<?php
	if(!defined("_INSIDE_APP")) exit;
	define('_APP_PAGE_NAME', "Podstrona 2");
	load_tpl('head');
	load_tpl('nav');
	load_tpl('content_start');
?>

<h1>Jakaś fajna podstrona</h1>
Tutaj nie ma nic szczególnego, lecz możesz się zalogować na jedno z poniższych kont, aby zobaczyć więcej:<br>
user/user<br>
admin/admin<br>
login/haslo
	
<?php
	load_tpl('content_end');
	load_tpl('footer');
?>