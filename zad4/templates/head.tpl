<!doctype html>
<html lang="pl" class="h-100">
	<head>
		<!-- title -->
		<title>{$smarty.config.app_name}</title>
		<!-- META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="{$smarty.config.app_author}">
		<!-- Bootstrap core CSS -->
		<link href="{$smarty.config.url}bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
		<!-- Inne -->
		<meta name="theme-color" content="#7952b3">
		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				user-select: none;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
		</style>
	</head>
	<body class="d-flex flex-column h-100">
		<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
				<div class="container">
					<a class="navbar-brand" href="#">{$smarty.config.app_name}</a>
				</div>
			</nav>
		</header>
		<main class="flex-shrink-0 mt-4">
			<div class="container mt-5 mb-5">