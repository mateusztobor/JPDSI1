<?php
	if(!defined("_INSIDE_APP")) exit; 
	define('_APP_PAGE_NAME', "Logowanie");
	load_tpl('head');
	load_tpl('nav');
	load_tpl('content_start');
	if(isset($_GET['c']))
		print('<div class="alert alert-primary" role="alert">Aby skorzystać z tej części strony musisz się zalogować.</div>');
	if(isset($errors)) print($errors);
?>

<h1>Logowanie</h1>
<form action="?p=login" method="post">
	<div class="form-group mb-3">
		<label for="id_login">Login</label>
		<input name="post_login" value="" required type="text" class="form-control" id="id_login" placeholder="Wprowadź login">
	</div>
	<div class="form-group mb-3">
		<label for="id_password">Hasło</label>
		<input name="post_password" value="" required type="password" class="form-control" id="id_password" placeholder="Wprowadź hasło">
	</div>
	<button type="submit" class="btn btn-primary">Zaloguj</button>
</form>

<?php
	load_tpl('content_end');
	load_tpl('footer');
?>