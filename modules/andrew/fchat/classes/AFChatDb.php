<?php
/***************************************************************************
*
* IMPORTANT: This is a commercial product made by AndrewP and cannot be modified for other than personal usage. 
* This product cannot be redistributed for free or a fee without written permission from AndrewP. 
* This notice may not be removed from the source code.
*
***************************************************************************/
bx_import('BxDolModuleDb');

class AFChatDb extends BxDolModuleDb {
    var $_oConfig;

    function AFChatDb(&$oConfig) {
        parent::BxDolModuleDb();
        $this->_oConfig = $oConfig;
    }
    function getMemberList($iLim, $bOnline = false) {
        $sOnlineSQL = ($bOnline) ? 'AND (`DateLastNav` > SUBDATE(NOW(), INTERVAL ' . $this->_oConfig->iOnlineTime . ' MINUTE))' : '';
        $sSQL = "
            SELECT `Profiles`.`ID`
            FROM `Profiles`
            WHERE 1
            {$sOnlineSQL}
            ORDER BY `DateReg` DESC
            LIMIT {$iLim} 
        ";
        return $this->getAll($sSQL);
    }
    function getMessages($iRecipient, $iRoom, $iLogged, $iSkip = 0, $iLim = 10) {
        $sRecipientSQL = 'WHERE `recipient` = 0';
        if ($iRecipient && $iLogged) {
            $sRecipientSQL = "WHERE (`sender` = '{$iRecipient}' && `recipient` = '{$iLogged}') || (`recipient` = '{$iRecipient}' && `sender` = '{$iLogged}')";
        }

        $sRecipientSQL .= " AND `room` = '{$iRoom}'";

        $sLim = ($iSkip) ? $iSkip * $iLim . ", " . $iLim : $iLim;
        $sSQL = "
            SELECT * , UNIX_TIMESTAMP() - `when` AS 'diff'
            FROM `a_fchat_messages`
            {$sRecipientSQL}
            ORDER BY `id` DESC
            LIMIT {$sLim} 
        ";
        // writeLog($sSQL);
        $aMessages = $this->getAll($sSQL);
        asort($aMessages);
        return $aMessages;
    }
    function acceptMessage($iPid, $sMessage, $iRoom = 0, $iRecipient = 0, $iOnlStatus = 0) {
        $sMessage = strip_tags($sMessage);

        $pattern = array('/(http:\/\/[a-z0-9\.\/]+)/i', '/\n/i');
        $replacement = array('<a href="$1" target="_blank">$1</a>', '<br />');
        $sMessage = preg_replace($pattern, $replacement, $sMessage); 
        $sMessage = $this->escape($sMessage);

        if ($iPid && $sMessage != '') {
            $sSQL = "
                SELECT `id`
                FROM `a_fchat_messages`
                WHERE `sender` = '{$iPid}' AND `recipient` = '{$iRecipient}' AND UNIX_TIMESTAMP() - `when` < 2
                    AND `room` = '{$iRoom}'
                LIMIT 1
            ";
            $iLastId = $this->getOne($sSQL);
            if ($iLastId) return 2; // protection

            if ($this->_oConfig->bFrMode) {
                $bFriends = is_friends($iPid, $iRecipient);
                if ($bFriends) {
                    // send to mailbox
                    if (! $iOnlStatus) {
                        $sName = $this->escape(getNickName($iPid));
                        $sName = _t('_fch_new_mail_x', $sName);
                        $this->res("INSERT INTO `sys_messages` SET `Sender` = '{$iPid}', `Recipient` = '{$iRecipient}', `Text` = '{$sMessage}', `Date` = NOW(), `Subject` = '{$sName}', `New` = '1', `Type` = 'greeting'");
                    }

                    $sStat = ($iOnlStatus) ? '' : ", `offmsg` = '1'";
                    $bRes = $this->res("INSERT INTO `a_fchat_messages` SET `sender` = '{$iPid}', `recipient` = '{$iRecipient}', `message` = '{$sMessage}', `when` = UNIX_TIMESTAMP(), `room` = '{$iRoom}' {$sStat}");
                    return ($bRes) ? 1 : 3;
                } else { // send to mailbox only
                    $sName = $this->escape(getNickName($iPid));
                    $sName = _t('_fch_new_mail_x', $sName);
                    $this->res("INSERT INTO `sys_messages` SET `Sender` = '{$iPid}', `Recipient` = '{$iRecipient}', `Text` = '{$sMessage}', `Date` = NOW(), `Subject` = '{$sName}', `New` = '1', `Type` = 'greeting'");
                    return 1;
                }
            } else {
                // send to mailbox
                if (! $iOnlStatus) {
                    $sName = $this->escape(getNickName($iPid));
                    $sName = _t('_fch_new_mail_x', $sName);
                    $this->res("INSERT INTO `sys_messages` SET `Sender` = '{$iPid}', `Recipient` = '{$iRecipient}', `Text` = '{$sMessage}', `Date` = NOW(), `Subject` = '{$sName}', `New` = '1', `Type` = 'greeting'");
                }

                $sStat = ($iOnlStatus) ? '' : ", `offmsg` = '1'";
                $bRes = $this->res("INSERT INTO `a_fchat_messages` SET `sender` = '{$iPid}', `recipient` = '{$iRecipient}', `message` = '{$sMessage}', `when` = UNIX_TIMESTAMP(), `room` = '{$iRoom}' {$sStat}");
                return ($bRes) ? 1 : 3;
            }
        }
    }
    function getRecentMessage($iPid) {
        if ($iPid) {
            $sSQL = "
                SELECT * , UNIX_TIMESTAMP( ) - `when` AS 'diff'
                FROM `a_fchat_messages`
                WHERE `recipient` = '{$iPid}' AND `room` = 0
                ORDER BY `id` DESC
                LIMIT 1
            ";

            $aMessage = $this->getRow($sSQL);
            $iDiff = (int)$aMessage['diff'];
            $iOffMsg = (int)$aMessage['offmsg'];
            if ($iDiff < ($this->_oConfig->iResFreq * 1.5) || $iOffMsg) { // -> new or offlinemsg
                if ($iOffMsg) {
                    $iId = (int)$aMessage['id'];
                    $this->res("UPDATE `a_fchat_messages` SET `offmsg` = '0' WHERE `id` = '{$iId}' LIMIT 1");
                }
                return (int)$aMessage['sender'];
            }
            return;
        }
    }
    function getRooms() {
        return $this->getAll("SELECT * FROM `a_fchat_rooms`");
    }
    function getRoomInfo($i) {
        $sSQL = "
            SELECT * 
            FROM `a_fchat_rooms`
            WHERE `id` = '{$i}'
        ";
        $aInfos = $this->getAll($sSQL);
        return $aInfos[0];
    }
    function addRoom($sTitle) {
        $sTitle = $this->escape(strip_tags($sTitle));
        if ($sTitle) {
            $this->res("INSERT INTO `a_fchat_rooms` SET `title` = '{$sTitle}', `owner` = '0', `when` = UNIX_TIMESTAMP()");
            return $this->lastId();
        }
    }
    function deleteRoom($iRoom) {
        $iRoom = (int)$iRoom;
        if ($iRoom) {
            $this->res("DELETE FROM `a_fchat_messages` WHERE `room` = '{$iRoom}'");
            return $this->res("DELETE FROM `a_fchat_rooms` WHERE `id` = '{$iRoom}' LIMIT 1");
        }
    }
    function getSettingsCategory() {
        return (int)$this->getOne("SELECT `ID` FROM `sys_options_cats` WHERE `name` = 'FChat' LIMIT 1");
    }
}
