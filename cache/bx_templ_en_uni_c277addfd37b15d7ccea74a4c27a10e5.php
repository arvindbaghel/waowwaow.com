<div class="ordered_block">
    <?=$a['name'];?>&nbsp;<select name="select_type" onchange="location.href='<?=$a['location_href'];?>' + this.value;">
        <?php if(is_array($a['bx_repeat:items'])) for($i=0; $i<count($a['bx_repeat:items']); $i++){ ?>
            <option value="<?=$a['bx_repeat:items'][$i]['value'];?>" <?=$a['bx_repeat:items'][$i]['selected'];?>>
                <?=$a['bx_repeat:items'][$i]['caption'];?>
            </option>
        <?php } else if(is_string($a['bx_repeat:items'])) echo $a['bx_repeat:items']; ?>
    </select>
</div>
<div class="clear_both"></div>