<?php
	if(!defined("_INSIDE_APP")) exit;
	define('_APP_PAGE_NAME', "Start");
	load_tpl('head');
	load_tpl('nav');
	load_tpl('content_start');
	if(user_logged()) print('<div class="alert alert-primary mb-3" role="alert">Cześć, '.$_SESSION['user']['login'].'!</div>');
?>

<h1>Start</h1>
Witaj na stronie głównej projektu.<br>
Do tej zawartość oraz do jednej podstrony masz dostęp bez logowania.<br>
Jednakże do dalszej części strony dostęp jest tylko dla zalogowanych użytkowników.

<?php
	load_tpl('content_end');
	load_tpl('footer');
?>