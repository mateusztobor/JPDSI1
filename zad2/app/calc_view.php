<?php if(!defined("_INSIDE_APP")) exit; ?>
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
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php">Zad2</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav me-auto mb-2 mb-md-0">
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'start') print(" active"); ?>" aria-current="page" href="?p=start">Start</a>
							</li>
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'calc') print(" active"); ?>" aria-current="page" href="?p=calc">Kalkulator oprocentowania</a>
							</li>
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'other') print(" active"); ?>" aria-current="page" href="?p=other">Inna podstrona</a>
							</li>
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'other2') print(" active"); ?>" aria-current="page" href="?p=other2">Inna podstrona bez logowania</a>
							</li>
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'login') print(" active"); ?>" aria-current="page" href="?p=login"<?php if(user_logged()) print('onclick="return confirm('."'Czy na pewno chcesz si?? wylogowa???');");?>"><?php (user_logged()) ? print("Wyloguj") : print("Zaloguj"); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>	
		<main class="flex-shrink-0 mt-4">
			<div class="container mt-5">
				<div class="mb-5">
					<h1>Kalkulator oprocentowania</h1>
					<form action="?p=calc" method="post">
					
					
						<div class="form-group mb-3">
							<label for="id_kwota">Warto???? po??yczki (warto???? w Z??)<span style="color:red;">*</span></label>
							<input name="post_kwota" value="<?php if(isset($_POST['post_kwota'])) print($_POST['post_kwota']); ?>" required type="number" step="0.01" min="1" class="form-control" id="id_kwota" aria-describedby="h_kwota" placeholder="Wprowad?? warto???? po??yczki">
							<small id="h_kwota" class="form-text text-muted">Tutaj nale??y wpisa?? warto???? po??yczki do wyliczenia miesi??cznej sp??aty.</small>
						</div>
						
						<div class="form-group mb-3">
							<label for="id_odsetki">Warto???? oprocentowania (warto???? w %)<span style="color:red;">*</span></label>
							<input name="post_odsetki" value="<?php if(isset($_POST['post_odsetki'])) print($_POST['post_odsetki']); ?>" required type="number" step="0.1" class="form-control" id="id_odsetki" aria-describedby="h_odsetki" placeholder="Wprowad?? warto???? oprocentowania">
							<small id="h_odsetki" class="form-text text-muted">Tutaj nale??y wpisa?? warto???? odsetek miesi??cznych (warto???? procentowa).</small>
						</div>
						
						<div class="form-group mb-2">
							<label for="id_mies">Ilo???? miesi??cy<span style="color:red;">*</span></label>
							<input name="post_mies" value="<?php if(isset($_POST['post_mies'])) print($_POST['post_mies']); ?>" required type="number" step="1" class="form-control" id="id_mies" aria-describedby="h_mies" placeholder="Wprowad?? ilo???? miesi??cy">
							<small id="h_mies" class="form-text text-muted">Tutaj nale??y wpisa?? ilo???? miesi??cy, na kt??r?? zostanie wyliczona warto???? do sp??aty.</small>
						</div>
						<div class="mb-3">
							Pola oznaczone <span style="color:red;">*</span> s?? wymagane.
						</div>
						<button type="submit" class="btn btn-primary">Oblicz rat?? kredytu</button>
					</form>
				</div>
				<?php print($result); ?>
			</div>
		</main>
		<footer class="footer mt-auto py-3 bg-dark text-light">
			<div class="container">
				<span class="text-muted">Zad 2. by <a href="//matva.eu.org">Mateusz Tobor</a></span>
			</div>
		</footer>
		<script src="<?php print(_APP_URL);?>bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	</body>
</html>