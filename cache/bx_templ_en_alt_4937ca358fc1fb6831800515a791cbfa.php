<div id="BxWmapParts<?=$a['suffix'];?>" class="bx_wmap_parts <?=$a['subclass'];?>_parts bx-def-margin-sec-bottom">
    <?php if(is_array($a['bx_repeat:parts'])) for($i=0; $i<count($a['bx_repeat:parts']); $i++){ ?>
        <div class="bx_wmap_part"><a href="#" alt="<?=$a['bx_repeat:parts'][$i]['part'];?>"><?=$a['bx_repeat:parts'][$i]['icon'];?></a><input type="checkbox" name="<?=$a['bx_repeat:parts'][$i]['part'];?>" id="BxWmapPartsCheckId_<?=$a['bx_repeat:parts'][$i]['part'];?>" value="<?=$a['bx_repeat:parts'][$i]['part'];?>" <?=$a['bx_repeat:parts'][$i]['checked'];?>/><label for="BxWmapPartsCheckId_<?=$a['bx_repeat:parts'][$i]['part'];?>"><?=$a['bx_repeat:parts'][$i]['title'];?></label></div>
    <?php } else if(is_string($a['bx_repeat:parts'])) echo $a['bx_repeat:parts']; ?>
    <div class="clear_both"></div>
</div>
<script type="text/javascript">
    jQuery('#BxWmapParts<?=$a['suffix'];?> > div > a').bind('click', function () {        
        jQuery('#BxWmapParts<?=$a['suffix'];?> > div > input:checked').removeAttr('checked');
        jQuery('#BxWmapParts<?=$a['suffix'];?> > div > input[name=' + $(this).attr('alt') + ']').attr('checked', 'checked');
        glBxWmap<?=$a['suffix'];?>.setParts($(this).attr('alt'));
        glBxWmap<?=$a['suffix'];?>.updateLocations();
        return false;
    });
jQuery('#BxWmapParts<?=$a['suffix'];?> > div > input').bind('change', function () {
        var s = '';
        jQuery('#BxWmapParts<?=$a['suffix'];?> > div > input:checked').each (function () {
            s += ',' + jQuery(this).attr('name');
        });
        glBxWmap<?=$a['suffix'];?>.setParts(s.substr(1));
        glBxWmap<?=$a['suffix'];?>.updateLocations();
    });
</script>
