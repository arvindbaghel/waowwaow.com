<script type="text/javascript">
	BxDolVoting.prototype.onvote = function (fRate, iCount) {
		document.location = '<?=$a['url'];?>';
	}
	BxDolVoting.prototype.onvotefail = function () {
		document.location = '<?=$a['url'];?>';
	}
</script>
<div class="rateObject">
	<div class="ratePart bx-def-margin-bottom">
		<div class="ratePartCnt"><?=$a['ratePart'];?></div>
		<div class="clear_both"></div>
	</div>
	<div class="rateFile"><?=$a['fileBody'];?></div>
	<div class="rateInfoMain bx-def-margin-sec-top bx-def-font-h1">
		<a href="<?=$a['fileUri'];?>"><?=$a['fileTitle'];?></a>
	</div>
	<div class="rateInfoAux bx-def-margin-sec-topbottom bx-def-font-large">
		<span class="addInfoDate"><?=$a['fileWhen'];?></span>
   		<span class="addInfoFrom">from <a href="<?=$a['fileFromLink'];?>"><?=$a['fileFrom'];?></a></span>
   	</div>
</div>