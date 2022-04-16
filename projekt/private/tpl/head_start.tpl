<!DOCTYPE html>
<html lang="pl" class="h-100">
	<head>
		<!-- title -->
		<title><?php print($title); ?></title>
		<!-- META -->
		<meta charset="<?php print(Flight::get('php.charset')); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Mateusz Tobor">
		<!-- Bootstrap core CSS -->
		<link href="<?php print(Flight::get('app.url').Flight::get('bootstrap.path')); ?>css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
		<!-- others -->
		<link href="<?php print(Flight::get('app.url')); ?>public/css/style.css" rel="stylesheet" crossorigin="anonymous">
		<link href="<?php print(Flight::get('app.url')); ?>public/img/favicon.png" rel="icon" sizes="256x256">
		<meta name="theme-color" content="#7952b3">
		
		<script src="<?php print(Flight::get('app.url')); ?>public/js/jquery.min.js"></script>