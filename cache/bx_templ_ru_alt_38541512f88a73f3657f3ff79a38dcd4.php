<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?=$this->parseSystemKey('page_charset', $mixedKeyWrapperHtml);?>" />
	<title><?=$this->parseSystemKey('page_header', $mixedKeyWrapperHtml);?></title>
	<base href="http://waowwaow.com/" />	
	<?=$this->parseSystemKey('page_description', $mixedKeyWrapperHtml);?>
	<?=$this->parseSystemKey('page_keywords', $mixedKeyWrapperHtml);?>
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<bx_include_css />
	<bx_include_js />
    <?=$this->parseSystemKey('dol_images', $mixedKeyWrapperHtml);?>
    <?=$this->parseSystemKey('dol_lang', $mixedKeyWrapperHtml);?>
    <?=$this->parseSystemKey('dol_options', $mixedKeyWrapperHtml);?>
    <script type="text/javascript" language="javascript">
		var site_url = 'http://waowwaow.com/';
        var aUserInfoTimers = new Array();
		$(document).ready( function() {
			$( 'div.RSSAggrCont' ).dolRSSFeed();
		} );
	</script>
    <?=$this->parseSystemKey('extra_js', $mixedKeyWrapperHtml);?>
	<?=$this->processInjection($GLOBALS['_page']['name_index'], 'injection_head'); ?>
    <script type="text/javascript">
        var oBxUserStatus = new BxUserStatus();
        oBxUserStatus.userStatusInit('http://waowwaow.com/', <?=$this->parseSystemKey('is_profile_page', $mixedKeyWrapperHtml);?>);
    </script>
</head>
<?=$this->parseSystemKey('flush_header', $mixedKeyWrapperHtml);?>
<body <?=$this->processInjection($GLOBALS['_page']['name_index'], 'injection_body'); ?> class="bx-def-font">
    <?=$this->processInjection($GLOBALS['_page']['name_index'], 'injection_header'); ?>
    <div id="notification_window" class="notifi_window"></div>
	<div id="FloatDesc" style="position:absolute;display:none;z-index:100;"></div>


    <?=$this->processInjection($GLOBALS['_page']['name_index'], 'banner_left'); ?>
    <?=$this->processInjection($GLOBALS['_page']['name_index'], 'banner_right'); ?>
    <?=$this->parseSystemKey('extra_top_menu', $mixedKeyWrapperHtml);?>
    <div class="sys_main_logo" style="min-width:<?=$this->parseSystemKey('main_div_width', $mixedKeyWrapperHtml);?>;">
		<div class="sys_ml" style="width:<?=$this->parseSystemKey('main_div_width', $mixedKeyWrapperHtml);?>;">
            <div class="sys_ml_wrapper bx-def-padding-sec">
                <?=$this->processInjection($GLOBALS['_page']['name_index'], 'injection_logo_before'); ?>
    			<?=$this->parseSystemKey('main_logo', $mixedKeyWrapperHtml);?>
    			<?=$this->processInjection($GLOBALS['_page']['name_index'], 'injection_logo_after'); ?>
            </div>
		</div>
		<?=$this->processInjection($GLOBALS['_page']['name_index'], 'banner_top'); ?>
	</div>
	<?=$this->processInjection($GLOBALS['_page']['name_index'], 'injection_between_logo_top_menu'); ?>
    <?=$this->parseSystemKey('top_menu', $mixedKeyWrapperHtml);?>
    <?=$this->processInjection($GLOBALS['_page']['name_index'], 'injection_between_top_menu_content'); ?>
	<!-- end of top -->

	<div class="sys_main_content" style="width:<?=$this->parseSystemKey('main_div_width', $mixedKeyWrapperHtml);?>;">
        <div class="sys_mc_wrapper bx-def-margin-sec-leftright">
            <div class="sys_mc">

                <!--[if lt IE 8]>
                <div style="background-color:#fcc" class="bx-def-border bx-def-margin-top bx-def-padding bx-def-font-large">
                    <b>You are using a subprime browser.</b> <br />
                    It may render this site incorrectly. <br />
                    Please upgrade to a modern web browser: 
                    <a href="http://www.google.com/chrome" target="_blank">Google Chrome</a> | 
                    <a href="http://www.firefox.com" target="_blank">Firefox</a> | 
                    <a href="http://www.apple.com/safari/download/" target="_blank">Safari</a>
                </div>
                <![endif]-->
                
                <!-- body -->
                <?=$this->processInjection($GLOBALS['_page']['name_index'], 'injection_splash_before'); ?>
                <?=$this->parseSystemKey('main_splash', $mixedKeyWrapperHtml);?>
                <?=$this->processInjection($GLOBALS['_page']['name_index'], 'injection_content_before'); ?>
