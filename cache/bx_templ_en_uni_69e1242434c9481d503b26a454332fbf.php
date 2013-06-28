<div class="top_settings_block">
    <div class="tsb_cnt_out bx-def-btc-margin-out">
        <div class="tsb_cnt_in bx-def-btc-padding-in">
            <?=$a['top_controls'];?>
        </div>
    </div>
</div>
<div style="text-align:center;">
<?=$a['global_message'];?>
</div>
<form id="adm-dnsbl-form" name="adm-dnsbl-form" action="<?=$this->parseSystemKey('admin_url', $mixedKeyWrapperHtml);?>antispam.php?mode=<?=$a['mode'];?>" method="post">
    <table class="bx-def-bc-margin-thd" width="100%" cellpadding="5" cellspacing="0">
        <?php if(is_array($a['bx_repeat:items'])) for($i=0; $i<count($a['bx_repeat:items']); $i++){ ?>
            <tr class="sys-adm-active-<?=$a['bx_repeat:items'][$i]['active'];?>">
                <td><input type="checkbox" class="form_input_checkbox" id="adm-dnsbl-<?=$a['bx_repeat:items'][$i]['id'];?>" name="rules[]" value="<?=$a['bx_repeat:items'][$i]['id'];?>" /></td>
                <td><?=$a['bx_repeat:items'][$i]['chain'];?></td>
                <td><a target="_blank" href="<?=$a['bx_repeat:items'][$i]['url'];?>"><?=$a['bx_repeat:items'][$i]['zonedomain'];?></a></td>
                <td><?=$a['bx_repeat:items'][$i]['postvresp'];?></td>
                <td><img float_info="<?=$a['bx_repeat:items'][$i]['comment'];?>" src="http://waowwaow.com/administration/templates/base/images/icons/info.gif" alt="info" class="info"></td>
            </tr>
        <?php } else if(is_string($a['bx_repeat:items'])) echo $a['bx_repeat:items']; ?>
    
    </table>
    <?=$a['controls'];?>
</form>