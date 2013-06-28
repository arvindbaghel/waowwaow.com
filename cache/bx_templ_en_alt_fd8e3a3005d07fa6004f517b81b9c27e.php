<div class="bx-def-bc-margin">
    <?php if($a['bx_if:select_target']['condition']){ ?>
        <?=$a['bx_if:select_target']['content']['top_controls'];?>
    <?php } ?>
    <?=$a['content'];?>
    <div class="buttons_bar">
        <?php if(is_array($a['bx_repeat:buttons'])) for($i=0; $i<count($a['bx_repeat:buttons']); $i++){ ?>
            <button class="bx-btn" type="<?=$a['bx_repeat:buttons'][$i]['btn_type'];?>" name="<?=$a['bx_repeat:buttons'][$i]['btn_name'];?>" onclick="<?=$a['bx_repeat:buttons'][$i]['btn_action'];?>"><?=$a['bx_repeat:buttons'][$i]['btn_value'];?></button>
	    <?php } else if(is_string($a['bx_repeat:buttons'])) echo $a['bx_repeat:buttons']; ?>
        <button class="bx-btn" type="button" name="close" onclick="$('#profile_customize_page').fadeOut('slow');">
            Close
        </button>
        <div class="clear_both"></div>
    </div>
</div>
<script type="text/javascript">
    $.colorInput.defaults.cellSize = 10;
    $.colorInput.defaults.hueWidth = 22;
    $.colorInput.defaults.hideInput = false;
    $.colorInput.defaults.hoverSelect = false;
    $.colorInput.defaults.cancelOnClick = [];
    $.colorInput.defaults.acceptCancelButtons = true;
    $.colorInput.defaults.showLeft = false;
    $("#profile_customize .input_wrapper_text").colorInput();
</script>
