<li class="nav-item">
	<div class="dropdown">
	  <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
		<?php print(Flight::get('user.nick')); ?>
	  </a>

	  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		<li><a class="dropdown-item" href="<?php print(Flight::get('app.url').Flight::get('app.path.account')); ?>"><?php print(Flight::get('lang.nav_user_account_settings')); ?></a></li>
		<li><a class="dropdown-item" href="<?php print(Flight::get('app.url').Flight::get('app.path.logout')); ?>"><?php print(Flight::get('lang.nav_user_logout')); ?></a></li>
	  </ul>
	</div>
</li>
<li class="nav-item">
	<a class="nav-link" href="#"><?php print(Flight::get('lang.nav_user_my_notes')); ?></a>
</li>
