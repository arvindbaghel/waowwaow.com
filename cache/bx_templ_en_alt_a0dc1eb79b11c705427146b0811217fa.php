<script type="text/javascript">
	var iPerPage = '<?=$a['per_page'];?>';
	var iPageNumber	= '<?=$a['page_number'];?>';

	var sMode = '<?=$a['page_mode'];?>';
	var sMessagesTypes = '<?=$a['messages_types'];?>';
	var sMessagesSort = '<?=$a['messages_sort'];?>';

	// create the object;
	var oMailBoxMessages = new MailBoxMessages();
</script>
<div class="top_settings_block">
    <div class="tsb_cnt_out bx-def-btc-margin-out">
        <div class="tsb_cnt_in bx-def-btc-padding-in">
            <?=$a['top_controls'];?>
        </div>
    </div>
</div>
<?=$a['messages_section'];?>