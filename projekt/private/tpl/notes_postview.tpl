<?php if(Flight::get('user.type') == 0) { ?>
	<div class="mb-3 text-center"><code><?php print(Flight::get('lang.notes_guest_desc')); ?></code></div>
<?php } ?>


<div class="mb-3 row">
	<div class="col-sm">
		<input class="form-control" value="<?php if(Flight::get('notes_post_share') == 1) print(Flight::get('lang.share_all')); else print(Flight::get('lang.not_share')); ?>" readonly>
	</div>
	<div class="col-sm">
		<input class="form-control" value="<?php print(Flight::get('title')); ?>" readonly>
	</div>
	<div class="col-sm">
		<input class="form-control" value="<?php print(Flight::get('lang.category:').Flight::get('notes_post_category')); ?>" readonly>
	</div>
</div>
<div class="text-center">
		<textarea id="notes" class="form-control col-xs-12" readonly><?php print(Flight::get('notes_post_content')); ?></textarea>
		
		<a href="<?php print(Flight::get('app.url').Flight::get('app.path.notes')); ?>" class="btn btn-secondary"><?php print(Flight::get('lang.notes.postview_addnew')); ?></a>
		<a target="_blank" href="<?php print(Flight::get('app.url').Flight::get('app.path.txt').'/'.Flight::get('notes_post_id')); ?>" class="btn btn-secondary"><?php print(Flight::get('lang.notes.postview_showtxt')); ?></a>
		<a onclick="copyUrl()" class="btn btn-secondary" id="btncopy"><?php print(Flight::get('lang.notes.postview_copyurl')); ?></a>
</div>

<script>
	function copyUrl() {
		$( "#btncopy" )
		.removeClass("btn-danger")
		.addClass("btn-success")
		.text("<?php print(Flight::get('lang.notes.postview_copiedurl')); ?>");
		
		if (!window.getSelection) {
			alert('Please copy the URL from the location bar.');
			return;
		}
		
		const dummy = document.createElement('p');
		dummy.textContent = window.location.href;
		document.body.appendChild(dummy);

		const range = document.createRange();
		range.setStartBefore(dummy);
		range.setEndAfter(dummy);

		const selection = window.getSelection();
		selection.removeAllRanges();
		selection.addRange(range);

		document.execCommand('copy');
		document.body.removeChild(dummy);
	}
</script>