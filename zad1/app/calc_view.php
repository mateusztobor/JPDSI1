<!doctype html>
<html lang="pl" class="h-100">
	<head>
		<!-- title -->
		<title><?php print(_APP_NAME);?></title>
		<!-- META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Mateusz Tobor">
		<!-- Bootstrap core CSS -->
		<link href="<?php print(_APP_URL);?>bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
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
					<a class="navbar-brand" href="#"><?php print(_APP_NAME);?></a>
				</div>
			</nav>
		</header>
		<main class="flex-shrink-0 mt-4">
			<div class="container mt-5">
				<div class="mb-5">
					<form action="<?php print(_APP_URL);?>" method="post">
						<div class="form-group mb-3">
							<label for="id_kwota">Wartość pożyczki (wartość w ZŁ)<span style="color:red;">*</span></label>
							<input name="post_kwota" value="<?php if(isset($_POST['post_kwota'])) print($_POST['post_kwota']); ?>" required type="number" step="0.01" min="1" class="form-control" id="id_kwota" aria-describedby="h_kwota" placeholder="Wprowadź wartość pożyczki">
							<small id="h_kwota" class="form-text text-muted">Tutaj należy wpisać wartość pożyczki do wyliczenia miesięcznej spłaty.</small>
						</div>
						
						<div class="form-group mb-3">
							<label for="id_odsetki">Wartość oprocentowania (wartość w %)<span style="color:red;">*</span></label>
							<input name="post_odsetki" value="<?php if(isset($_POST['post_odsetki'])) print($_POST['post_odsetki']); ?>" required type="number" step="0.1" class="form-control" id="id_odsetki" aria-describedby="h_odsetki" placeholder="Wprowadź wartość oprocentowania">
							<small id="h_odsetki" class="form-text text-muted">Tutaj należy wpisać wartość odsetek miesięcznych (wartość procentowa).</small>
						</div>
						
						<div class="form-group mb-2">
							<label for="id_mies">Ilość miesięcy<span style="color:red;">*</span></label>
							<input name="post_mies" value="<?php if(isset($_POST['post_mies'])) print($_POST['post_mies']); ?>" required type="number" step="1" class="form-control" id="id_mies" aria-describedby="h_mies" placeholder="Wprowadź ilość miesięcy">
							<small id="h_mies" class="form-text text-muted">Tutaj należy wpisać ilość miesięcy, na którą zostanie wyliczona wartość do spłaty.</small>
						</div>
						<div class="mb-3">
							Pola oznaczone <span style="color:red;">*</span> są wymagane.
						</div>
						<button type="submit" class="btn btn-primary">Oblicz ratę kredytu</button>
					</form>
				</div>
				<?php print($result); ?>
			</div>
		</main>
		<footer class="footer mt-auto py-3 bg-dark text-light">
			<div class="container">
				<span class="text-muted">Zad 1. by <a href="//matva.eu.org">Mateusz Tobor</a></span>
			</div>
		</footer>
		<script src="<?php print(_APP_URL);?>bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	</body>
</html>