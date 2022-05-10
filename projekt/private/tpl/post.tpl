		<div class="col-lg notes_category">
			<a href="<?php print(Flight::get('app.url').$post_pin); ?>">
				<div class="card card-body border border-danger clearfix">
					<strong><?php print($post_title); ?></strong>
					<?php print($post_content); ?>
					<div class="post_nav mt-3 right text-danger"><?php print($post_share); ?></div>
				</div>
			</a>
		</div>