<script type="text/javascript">
	function bx_scroll () {
	    var iTop = parseInt($(".rateObject").parents().filter('.boxContent').offset().top);
	    $($.browser.safari ? "body" : "html,body").scrollTop(iTop - 10);
	}
	$(document).ready(function() {
	    bx_scroll();
	});
</script>
<div class="fileBody" style="width:<?=$a['infoWidth'];?>px;">
	<img src="<?=$a['fileBody'];?>" class="bx-def-round-corners bx-def-shadow" onload="bx_scroll();">
</div>