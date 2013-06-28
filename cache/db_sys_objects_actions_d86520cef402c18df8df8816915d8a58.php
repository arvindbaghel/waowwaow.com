<?php $mixedData=array (
  'Profile' => 
  array (
    0 => 
    array (
      'Caption' => '_Simle Messenger',
      'Icon' => '',
      'Url' => '',
      'Script' => '',
      'Eval' => 'return BxDolService::call(\'simple_messenger\', \'get_messenger_field\', array({ID}));',
      'bDisplayInSubMenuHeader' => '0',
    ),
    1 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'edit',
      'Url' => 'pedit.php?ID={ID}',
      'Script' => '',
      'Eval' => 'if ({ID} != {member_id}) return;
return _t(\'{cpt_edit}\');',
      'bDisplayInSubMenuHeader' => '0',
    ),
    2 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'envelope',
      'Url' => 'mail.php?mode=compose&recipient_id={ID}',
      'Script' => '',
      'Eval' => 'if ({ID} == {member_id}) return;
return _t(\'{cpt_send_letter}\');',
      'bDisplayInSubMenuHeader' => '0',
    ),
    3 => 
    array (
      'Caption' => '{cpt_fave}',
      'Icon' => 'asterisk',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getScriptFaveAdd({ID}, {member_id});',
      'bDisplayInSubMenuHeader' => '0',
    ),
    4 => 
    array (
      'Caption' => '{cpt_remove_fave}',
      'Icon' => 'asterisk',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getScriptFaveCancel({ID}, {member_id});',
      'bDisplayInSubMenuHeader' => '0',
    ),
    5 => 
    array (
      'Caption' => '{cpt_befriend}',
      'Icon' => 'plus',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getScriptFriendAdd({ID}, {member_id});',
      'bDisplayInSubMenuHeader' => '0',
    ),
    6 => 
    array (
      'Caption' => '{cpt_remove_friend}',
      'Icon' => 'minus',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getScriptFriendCancel({ID}, {member_id}, false);',
      'bDisplayInSubMenuHeader' => '0',
    ),
    7 => 
    array (
      'Caption' => '{cpt_greet}',
      'Icon' => 'hand-right',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'if ({ID} == {member_id}) return;

return "$.post(\'greet.php\', { sendto: \'{ID}\' }, function(sData){ $(\'#ajaxy_popup_result_div_{ID}\').html(sData) } );return false;";
',
      'bDisplayInSubMenuHeader' => '0',
    ),
    8 => 
    array (
      'Caption' => '{cpt_get_mail}',
      'Icon' => 'envelope-alt',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'if ({ID} == {member_id}) return;

$bAnonymousMode  = \'{anonym_mode}\';

if ( !$bAnonymousMode ) {
    return "$.post(\'freemail.php\', { ID: \'{ID}\' }, function(sData){ $(\'#ajaxy_popup_result_div_{ID}\').html(sData) } );return false;";
}
',
      'bDisplayInSubMenuHeader' => '0',
    ),
    9 => 
    array (
      'Caption' => '{cpt_share}',
      'Icon' => 'share',
      'Url' => '',
      'Script' => 'return launchTellFriendProfile({ID});',
      'Eval' => '',
      'bDisplayInSubMenuHeader' => '0',
    ),
    10 => 
    array (
      'Caption' => '{cpt_report}',
      'Icon' => 'exclamation-sign',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'if ({ID} == {member_id}) return;

return  "$.post(\'list_pop.php?action=spam\', { ID: \'{ID}\' }, function(sData){ $(\'#ajaxy_popup_result_div_{ID}\').html(sData) } );return false;";
',
      'bDisplayInSubMenuHeader' => '0',
    ),
    11 => 
    array (
      'Caption' => '{cpt_block}',
      'Icon' => 'ban-circle',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'if ( {ID} == {member_id} || isBlocked({member_id}, {ID}) ) return;

return  "$.post(\'list_pop.php?action=block\', { ID: \'{ID}\' }, function(sData){ $(\'#ajaxy_popup_result_div_{ID}\').html(sData) } );return false;";
',
      'bDisplayInSubMenuHeader' => '0',
    ),
    12 => 
    array (
      'Caption' => '{cpt_unblock}',
      'Icon' => 'ban-circle',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'if ({ID} == {member_id} || !isBlocked({member_id}, {ID}) ) return;

return "$.post(\'list_pop.php?action=unblock\', { ID: \'{ID}\' }, function(sData){ $(\'#ajaxy_popup_result_div_{ID}\').html(sData) } );return false;";
',
      'bDisplayInSubMenuHeader' => '0',
    ),
    13 => 
    array (
      'Caption' => '{sbs_profile_title}',
      'Icon' => 'paper-clip',
      'Url' => '',
      'Script' => '{sbs_profile_script}',
      'Eval' => '',
      'bDisplayInSubMenuHeader' => '0',
    ),
    14 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'comments-alt',
      'Url' => '',
      'Script' => 'window.open( \'modules/boonex/messenger/popup.php?rspId={ID}\' , \'Messenger\', \'width=550,height=500,toolbar=0,directories=0,menubar=0,status=0,location=0,scrollbars=0,resizable=1\', 0);',
      'Eval' => 'return BxDolService::call(\'messenger\', \'get_action_link\', array({member_id}, {ID}));',
      'bDisplayInSubMenuHeader' => '0',
    ),
    15 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'magic',
      'Url' => '',
      'Script' => '$(\'#profile_customize_page\').fadeIn(\'slow\', function() {dbTopMenuLoad(\'profile_customizer\');});',
      'Eval' => 'if (defined(\'BX_PROFILE_PAGE\') && {ID} == {member_id} && getParam(\'bx_profile_customize_enable\') == \'on\') return _t( \'_Customize\' ); else return null;',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'ProfileTitle' => 
  array (
    0 => 
    array (
      'Caption' => '{cpt_am_friend_add}',
      'Icon' => 'plus',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getScriptFriendAdd({ID}, {member_id}, false);',
      'bDisplayInSubMenuHeader' => '1',
    ),
    1 => 
    array (
      'Caption' => '{cpt_am_friend_accept}',
      'Icon' => 'plus',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getScriptFriendAccept({ID}, {member_id}, false);',
      'bDisplayInSubMenuHeader' => '1',
    ),
    2 => 
    array (
      'Caption' => '{cpt_am_friend_cancel}',
      'Icon' => 'minus',
      'Url' => '',
      'Script' => '{evalResult}',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getScriptFriendCancel({ID}, {member_id}, false);',
      'bDisplayInSubMenuHeader' => '1',
    ),
    3 => 
    array (
      'Caption' => '{cpt_am_profile_message}',
      'Icon' => 'envelope',
      'Url' => '{evalResult}',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getUrlProfileMessage({ID});',
      'bDisplayInSubMenuHeader' => '1',
    ),
    4 => 
    array (
      'Caption' => '{cpt_am_profile_account_page}',
      'Icon' => 'dashboard',
      'Url' => '{evalResult}',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getUrlAccountPage({ID});',
      'bDisplayInSubMenuHeader' => '1',
    ),
  ),
  'bx_forum_title' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => 'javascript:void(0);',
      'Script' => 'return f.newTopic(\'0\')',
      'Eval' => 'return $GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_forums_new_topic\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'bx_store_title' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => '{BaseUri}browse/my&bx_store_filter=add_product',
      'Script' => '',
      'Eval' => 'return ($GLOBALS[\'logged\'][\'member\'] && BxDolModule::getInstance(\'BxStoreModule\')->isAllowedAdd()) || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_store_action_add_product\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
    1 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'shopping-cart',
      'Url' => '{BaseUri}browse/my',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_store_action_my_products\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'bx_sites_title' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => '{BaseUri}browse/my/add',
      'Script' => '',
      'Eval' => 'if (($GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\']) && {isAllowedAdd} == 1) return _t(\'_bx_sites_action_add_site\'); return;',
      'bDisplayInSubMenuHeader' => '0',
    ),
    1 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'link',
      'Url' => '{BaseUri}browse/my',
      'Script' => '',
      'Eval' => 'if ($GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\']) return _t(\'_bx_sites_action_my_sites\'); return;',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'bx_files_title' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => '',
      'Script' => 'showPopupAnyHtml(\'{BaseUri}upload\');',
      'Eval' => 'return getLoggedId() ? _t(\'_sys_upload\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
    1 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'save',
      'Url' => '{BaseUri}albums/my/main/',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_files_albums_my\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'bx_videos_title' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => '',
      'Script' => 'showPopupAnyHtml(\'{BaseUri}upload\');',
      'Eval' => 'return (getLoggedId() && BxDolModule::getInstance(\'BxVideosModule\')->isAllowedAdd()) ? _t(\'_sys_upload\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
    1 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'film',
      'Url' => '{BaseUri}albums/my/main/',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_videos_albums_my\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'bx_sounds_title' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => '',
      'Script' => 'showPopupAnyHtml(\'{BaseUri}upload\');',
      'Eval' => 'return (getLoggedId() && BxDolModule::getInstance(\'BxSoundsModule\')->isAllowedAdd()) ? _t(\'_sys_upload\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
    1 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'music',
      'Url' => '{BaseUri}albums/my/main/',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_sounds_albums_my\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'bx_groups_title' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => '{BaseUri}browse/my&bx_groups_filter=add_group',
      'Script' => '',
      'Eval' => 'return ($GLOBALS[\'logged\'][\'member\'] && BxDolModule::getInstance(\'BxGroupsModule\')->isAllowedAdd()) || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_groups_action_add_group\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
    1 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'group',
      'Url' => '{BaseUri}browse/my',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_groups_action_my_groups\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'bx_photos_title' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => '',
      'Script' => 'showPopupAnyHtml(\'{BaseUri}upload\');',
      'Eval' => 'return (getLoggedId() && BxDolModule::getInstance(\'BxPhotosModule\')->isAllowedAdd()) ? _t(\'_sys_upload\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
    1 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'picture',
      'Url' => '{BaseUri}albums/my/main/',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_photos_albums_my\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'bx_events_title' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => '{BaseUri}browse/my&bx_events_filter=add_event',
      'Script' => '',
      'Eval' => 'return ($GLOBALS[\'logged\'][\'member\'] && BxDolModule::getInstance(\'BxEventsModule\')->isAllowedAdd()) || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_events_action_create_event\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
    1 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'calendar',
      'Url' => '{BaseUri}browse/my',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_bx_events_action_my_events\') : \'\';',
      'bDisplayInSubMenuHeader' => '0',
    ),
  ),
  'AccountTitle' => 
  array (
    0 => 
    array (
      'Caption' => '{cpt_am_account_profile_page}',
      'Icon' => 'user',
      'Url' => '{evalResult}',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'oTopMenu\']->getUrlProfilePage({ID});',
      'bDisplayInSubMenuHeader' => '1',
    ),
  ),
  'Mailbox' => 
  array (
    0 => 
    array (
      'Caption' => '{evalResult}',
      'Icon' => 'plus',
      'Url' => '{BaseUri}mail.php?mode=compose',
      'Script' => '',
      'Eval' => 'return $GLOBALS[\'logged\'][\'member\'] || $GLOBALS[\'logged\'][\'admin\'] ? _t(\'_sys_am_mailbox_compose\') : \'\';',
      'bDisplayInSubMenuHeader' => '1',
    ),
  ),
); ?>