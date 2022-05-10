<?php if(Flight::get('user.type') == 0) { ?>
	<div class="mb-3 text-center"><code><?php print(Flight::get('lang.notes_guest_desc')); ?></code></div>
<?php } ?>


<div class="mb-3 row">
	<div class="col-sm">
		<select class="form-control" name="post_share" disabled>
			<option value="1" <?php if(Flight::get('notes_post_share')) print('selected'); ?>>Udostępnij wszystkim</option>
			<option value="0" <?php if(!Flight::get('notes_post_share')) print('selected'); ?>>Tylko dla mnie</option>
		</select>
	</div>
	<div class="col-sm">
		<input class="form-control" placeholder="Tytuł notatki" name="post_title" value="<?php print(Flight::get('title')); ?>" name="post_title" readonly>
	</div>
	<div class="col-sm">
		<select class="form-control" name="post_category">
			<option value="">Domyślna kategoria</option>
		</select>
	</div>
</div>
<div class="text-center">
		<textarea id="notes" class="form-control col-xs-12" readonly><?php print(Flight::get('notes_post_content')); ?></textarea>
		<a href="<?php print(Flight::get('app.url').Flight::get('app.path.notes')); ?>" class="btn btn-danger"><?php print(Flight::get('lang.notes.postview_addnew')); ?></a>
		
		<a target="_blank" href="<?php print(Flight::get('app.url').'txt/'.Flight::get('notes_post_id')); ?>" class="btn btn-danger"><?php print(Flight::get('lang.notes.postview_showtxt')); ?></a>
		
		<a onclick="copyUrl()" class="btn btn-danger" id="btncopy"><?php print(Flight::get('lang.notes.postview_copyurl')); ?></a>
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
  // First clear, in case the user already selected some other text
  selection.removeAllRanges();
  selection.addRange(range);

  document.execCommand('copy');
  document.body.removeChild(dummy);
}
</script>