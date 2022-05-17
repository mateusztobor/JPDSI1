<h4><?php print(Flight::get('lang.new_category_title')); ?></h4>

<div class="notes_category_title " style="cursor:default !important;">
	<div class="catbox catbox_edit">
		<span class="collapse-icon-plus rounded-circle">&nbsp;</span>
		<input class="text-center" style="width: 55px" type="number" min="1" name="" value="1" placeholder="">
		<input type="text" name="" value="" placeholder="<?php print(Flight::get('lang.new_category_name')); ?>">
		<div class="mt-2 ms-5">
			<button class="btn btn-danger"><?php print(Flight::get('lang.add_category')); ?></button>
		</div>
	</div>
</div>

</div>
<div class="shadow p-3 rounded bg-light mt-3">
<h4 class="text-danger"><?php print(Flight::get('lang.mgmt_categories')); ?></h4>