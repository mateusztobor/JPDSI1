<?php
	if(!defined("_INSIDE_APP")) exit;
	define('_APP_PAGE_NAME', "Błąd 404");
	load_tpl('head');
	load_tpl('nav');
	load_tpl('content_start');
	if(user_logged()) print('<div class="alert alert-primary mb-3" role="alert">Cześć, '.$_SESSION['user']['login'].'!</div>');
?>

<h1>Błąd 404</h1>
Taka strona nie istnieje.
<a href="<?php print(_APP_URL); ?>">Wróć do strony głównej</a>

<?php
	load_tpl('content_end');
	load_tpl('footer');
?>