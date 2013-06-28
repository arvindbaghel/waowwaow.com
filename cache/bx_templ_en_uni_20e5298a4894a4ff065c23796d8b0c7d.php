<div style="float:left;">
    <span class="<?=$a['status_class'];?>"><?=$a['status'];?></span>
</div>
<div style="float:right;">
    <a href="javascript:void(0);" onclick="loadHtmlInPopup('adm_antispam_popup', 'http://waowwaow.com/administration/antispam.php?popup=<?=$a['mode'];?>_log');">Log</a>
    <span class="bullet">&#183;</span>
    <a href="javascript:void(0);" onclick="loadHtmlInPopup('adm_antispam_popup', 'http://waowwaow.com/administration/antispam.php?popup=<?=$a['mode'];?>_recheck');">Recheck</a>
    <span class="bullet">&#183;</span>
    <a href="javascript:void(0);" onclick="loadHtmlInPopup('adm_antispam_popup', 'http://waowwaow.com/administration/antispam.php?popup=<?=$a['mode'];?>_help');">Help</a>
    <span class="bullet">&#183;</span>
    <a href="javascript:void(0);" onclick="loadHtmlInPopup('adm_antispam_popup', 'http://waowwaow.com/administration/antispam.php?popup=<?=$a['mode'];?>_add');">Add</a>
</div>
<div class="clear_both"></div>
