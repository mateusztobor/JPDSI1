<div class="notes_category_title notes_category_title_edit ui-state-default px-3 pt-2">
	<div class="catbox catbox_edit">
		<span class="collapse-icon-plus rounded-circle">&nbsp;</span>
		<input type="hidden" name="cat[<?php print($cat_id); ?>][id]" value="<?php print($cat_id); ?>" required>
		<input type="text" name="cat[<?php print($cat_id); ?>][title]" value="<?php print($cat_title); ?>" placeholder="<?php print(Flight::get('lang.title_of_category')); ?>" maxlength="40" required>
		<div class="mt-2 ms-5">
			<button class="btn btn-warning"><?php print(Flight::get('lang.del_category')); ?></button>
			<button class="btn btn-secondary"><?php print(Flight::get('lang.clear_category')); ?></button>
		</div>
	</div>
</div>