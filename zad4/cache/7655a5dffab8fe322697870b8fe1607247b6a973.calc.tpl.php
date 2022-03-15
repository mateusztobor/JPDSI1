<?php
/* Smarty version 4.1.0, created on 2022-03-15 21:17:15
  from 'D:\xampp\htdocs\zad4\templates\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6230f44b51b2b8_94774497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13cbed475dda849238aba27c78e12dc941a60bcd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zad4\\templates\\calc.tpl',
      1 => 1647375333,
      2 => 'file',
    ),
    'f0958a49a2a6e12a313a92c25001f8cf42b1b16c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zad4\\templates\\head.tpl',
      1 => 1647375315,
      2 => 'file',
    ),
    '6ca47c33de925db4c7aed11ac602159b55a1ccaf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zad4\\templates\\foot.tpl',
      1 => 1647374865,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_6230f44b51b2b8_94774497 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="pl" class="h-100">
	<head>
		<!-- title -->
		<title>test</title>
		<!-- META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Mateusz Tobor">
		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
					<a class="navbar-brand" href="#">test</a>
				</div>
			</nav>
		</header>
		<main class="flex-shrink-0 mt-4">
			<div class="container mt-5 mb-5">				<form action="" method="post">
					<div class="form-group mb-3">
						<label for="id_kwota">Wartość pożyczki (wartość w ZŁ)<span style="color:red;">*</span></label>
						<input name="post_kwota" value="<?php echo '<?php'; ?>
 if(isset($_POST['post_kwota'])) print($_POST['post_kwota']); <?php echo '?>'; ?>
" required type="number" step="0.01" min="1" class="form-control" id="id_kwota" aria-describedby="h_kwota" placeholder="Wprowadź wartość pożyczki">
						<small id="h_kwota" class="form-text text-muted">Tutaj należy wpisać wartość pożyczki do wyliczenia miesięcznej spłaty.</small>
					</div>
					
					<div class="form-group mb-3">
						<label for="id_odsetki">Wartość oprocentowania (wartość w %)<span style="color:red;">*</span></label>
						<input name="post_odsetki" value="<?php echo '<?php'; ?>
 if(isset($_POST['post_odsetki'])) print($_POST['post_odsetki']); <?php echo '?>'; ?>
" required type="number" step="0.1" class="form-control" id="id_odsetki" aria-describedby="h_odsetki" placeholder="Wprowadź wartość oprocentowania">
						<small id="h_odsetki" class="form-text text-muted">Tutaj należy wpisać wartość odsetek miesięcznych (wartość procentowa).</small>
					</div>
					
					<div class="form-group mb-2">
						<label for="id_mies">Ilość miesięcy<span style="color:red;">*</span></label>
						<input name="post_mies" value="<?php echo '<?php'; ?>
 if(isset($_POST['post_mies'])) print($_POST['post_mies']); <?php echo '?>'; ?>
" required type="number" step="1" class="form-control" id="id_mies" aria-describedby="h_mies" placeholder="Wprowadź ilość miesięcy">
						<small id="h_mies" class="form-text text-muted">Tutaj należy wpisać ilość miesięcy, na którą zostanie wyliczona wartość do spłaty.</small>
					</div>
					<div class="mb-3">
						Pola oznaczone <span style="color:red;">*</span> są wymagane.
					</div>
					<button type="submit" class="btn btn-primary">Oblicz ratę kredytu</button>
				</form>
				
				<div class="text-center alert alert-secondary mb-4" role="alert">
				<h3>Wartość miesięcznej raty wynosi <span style="color:red;">5.1zł</span></h3>
				W sumie pożyczając 5zł na 1 miesięcy, przy odsetkach 2% spłacisz łącznie 5.1zł<br>
				Ta pożyczka będzie Cię kosztowała 0.1zł
				<br><br><a href="index.php" class="btn btn-light">Wykonaj nowe obliczenie</a>
				</div>
			
			</div>
		</main>
		<footer class="footer mt-auto py-3 bg-dark text-light">
			<div class="container">
				<span class="text-muted">Zad 1. by <a href="//matva.eu.org">Mateusz Tobor</a></span>
			</div>
		</footer>
		<script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html><?php }
}
