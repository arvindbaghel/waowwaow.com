<?php
/***************************************************************************
*
* IMPORTANT: This is a commercial product made by AndrewP and cannot be modified for other than personal usage. 
* This product cannot be redistributed for free or a fee without written permission from AndrewP. 
* This notice may not be removed from the source code.
*
***************************************************************************/
bx_import('BxDolModuleTemplate');

class AFChatTemplate extends BxDolModuleTemplate {

    /*
    * Constructor.
    */
    function AFChatTemplate(&$oConfig, &$oDb) {
        parent::BxDolModuleTemplate($oConfig, $oDb);
    }

    // output
    function pageCode($aPage = array(), $aPageCont = array(), $aCss = array(), $aJs = array(), $bAdminMode = false, $isSubActions = true) {
        if (!empty($aPage)) {
            foreach ($aPage as $sKey => $sValue)
                $GLOBALS['_page'][$sKey] = $sValue;
        }
        if (!empty($aPageCont)) {
            foreach ($aPageCont as $sKey => $sValue)
                $GLOBALS['_page_cont'][$aPage['name_index']][$sKey] = $sValue;
        }
        if (!empty($aCss))
            $this->addCss($aCss);
        if (!empty($aJs))
            $this->addJs($aJs);

        if (!$bAdminMode)
            PageCode($this);
        else
            PageCodeAdmin();
    }
}
