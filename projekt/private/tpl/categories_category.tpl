<div class="notes_category_title" style="cursor:default !important;">
	<div class="catbox catbox_edit">
		<span class="collapse-icon-plus rounded-circle">&nbsp;</span>
		<input class="text-center" style="width: 55px" type="number" min="1" name="post_categories_orders[<?php print($cat_id); ?>]" value="<?php print($cat_order); ?>" placeholder="">
		<input type="text" name="post_categories_names[<?php print($cat_id); ?>]" value="<?php print($cat_title); ?>" placeholder="">
		<div class="mt-2 ms-5">
			<button class="btn btn-warning"><?php print(Flight::get('lang.del_category')); ?></button>
			<button class="btn btn-secondary"><?php print(Flight::get('lang.clear_category')); ?></button>
			<button class="btn btn-danger"><?php print(Flight::get('lang.save_category')); ?></button>
		</div>
	</div>
</div>