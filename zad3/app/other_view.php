<?php
	if(!defined("_INSIDE_APP")) exit;
	define('_APP_PAGE_NAME', "Podstrona 1");
	load_tpl('head');
	load_tpl('nav');
	load_tpl('content_start');
?>

<h1>Jakaś fajna podstrona</h1>
Cześć, <?php print($_SESSION['user']['login']); ?>!<br>
Tutaj może kiedyś w przyszłości będzie znajdowała się treść, która odmieni Twoje życie!

<?php
	load_tpl('content_end');
	load_tpl('footer');
?>