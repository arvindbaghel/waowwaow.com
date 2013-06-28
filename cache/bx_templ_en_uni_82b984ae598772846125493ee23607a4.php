<div class="ordered_block bx-def-margin-sec-bottom">
        <?=$a['name_box'];?> <select name="<?=$a['name_targets_box'];?>" onchange="oCustomizer.reloadCustomizeBlock(this.value);">
        <?php if(is_array($a['bx_repeat:targets'])) for($i=0; $i<count($a['bx_repeat:targets']); $i++){ ?>
        <option value="<?=$a['bx_repeat:targets'][$i]['value'];?>" <?=$a['bx_repeat:targets'][$i]['select'];?>><?=$a['bx_repeat:targets'][$i]['name'];?></option>
        <?php } else if(is_string($a['bx_repeat:targets'])) echo $a['bx_repeat:targets']; ?>
    </select>
</div>
