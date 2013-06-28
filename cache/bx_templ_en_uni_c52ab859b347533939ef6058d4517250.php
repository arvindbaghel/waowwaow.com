<div class="top_settings_block">
    <div class="tsb_cnt_out bx-def-btc-margin-out">
        <div class="tsb_cnt_in bx-def-btc-padding-in">
            <?=$a['top_controls'];?>
        </div>
    </div>
</div>
<form id="<?=$a['form_name'];?>" enctype="multipart/form-data" method="post" action="" class="form_advanced">
    <div class="catgs-items bx-def-bc-margin">
        <?php if(is_array($a['bx_repeat:items'])) for($i=0; $i<count($a['bx_repeat:items']); $i++){ ?>
            <div class="catgs-item bx-def-margin-thd-top-auto">
                <input type="checkbox" class="form_input_checkbox" id="<?=$a['bx_repeat:items'][$i]['name'];?>" name="pathes[]" value="<?=$a['bx_repeat:items'][$i]['value'];?>" />
                <label for="pathes-<?=$a['bx_repeat:items'][$i]['name'];?>"><?=$a['bx_repeat:items'][$i]['title'];?></label>
            </div>
        <?php } else if(is_string($a['bx_repeat:items'])) echo $a['bx_repeat:items']; ?>
    </div>
    <?=$a['controls'];?>
</form>