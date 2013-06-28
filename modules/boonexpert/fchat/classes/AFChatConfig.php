<?php
/***************************************************************************
*
* IMPORTANT: This is a commercial product made by AndrewP and cannot be modified for other than personal usage. 
* This product cannot be redistributed for free or a fee without written permission from AndrewP. 
* This notice may not be removed from the source code.
*
***************************************************************************/
bx_import('BxDolConfig');

class AFChatConfig extends BxDolConfig {

    var $iOnlineCnt;
    var $iOfflineCnt;
    var $iOnlineTime;
    var $sDisplay;
    var $iResFreq;
    var $iResGrFreq;
    var $bFrMode;

    function AFChatConfig($aModule) {
        parent::BxDolConfig($aModule);

        $this->iOnlineCnt = getParam('a_fchat_online_cnt');
        $this->iOfflineCnt = getParam('a_fchat_offline_cnt');
        $this->iOnlineTime = getParam('member_online_time');
        $this->sDisplay = getParam('a_fchat_display');
        $this->iResFreq = 2; // 2 seconds
        $this->iResGrFreq = 300; // 5 mins
        $this->bFrMode = (getParam('a_fchat_fr_mode') == 'on');
    }
}
