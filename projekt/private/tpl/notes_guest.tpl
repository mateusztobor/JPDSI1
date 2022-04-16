<div class="mb-3 text-center"><code><?php print(Flight::get('lang.notes_guest_desc')); ?></code></div>

<div class="text-center">
	{$notes_alerts}
		<form action="<?php print(Flight::get('app.url').Flight::get('app.path.notes')); ?>" method="post">
		<textarea id="notes" name="post_notes"></textarea>
		<button type="submit" class="btn btn-danger"><?php print(Flight::get('lang.notes_save_button')); ?></button>
	</form>
</div>