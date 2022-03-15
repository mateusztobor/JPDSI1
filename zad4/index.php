<?php
require 'libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
//$smarty->cache_lifetime = 0;

if(isset($_POST['post_kwota'])) $smarty -> assign('value_kwota', $_POST['post_kwota']);
else $smarty -> assign('value_kwota', "");

if(isset($_POST['post_odsetki'])) $smarty -> assign('value_odsetki', $_POST['post_odsetki']);
else $smarty -> assign('value_odsetki', "");

if(isset($_POST['post_mies'])) $smarty -> assign('value_mies', $_POST['post_mies']);
else $smarty -> assign('value_mies', "");


$smarty -> assign('wynik', '');

//sprawdzanie, czy wszyskie pola formularza istnieją
if(isset($_POST['post_kwota']) && isset($_POST['post_odsetki']) && isset($_POST['post_mies'])) {
	//sprawdzanie, czy wymagane pola nie są puste
	if(!empty($_POST['post_kwota']) && !empty($_POST['post_odsetki']) && !empty($_POST['post_mies'])) {
		//sprawdzamy czy pola numeryczne mają poprawne wartości
		if(is_numeric($_POST['post_kwota']) && is_numeric($_POST['post_odsetki']) && is_numeric($_POST['post_mies'])) {
			//obliczanie raty
			$rata = ($_POST['post_kwota']/$_POST['post_mies']);
			$rata += (($rata/100) * $_POST['post_odsetki']);
			$rata *= 100;
			$rata = round($rata);
			$rata /= 100;
			//wczytywanie rezultatu do zmiennej $result
			$smarty -> assign('wynik', '<div class="text-center alert alert-secondary mb-4 mt-4" role="alert">
				<h3>Wartość miesięcznej raty wynosi <span style="color:red;">'.$rata.'zł</span></h3>
				W sumie pożyczając '.$_POST['post_kwota'].'zł na '.$_POST['post_mies'].' miesięcy, przy odsetkach '.$_POST['post_odsetki'].'% spłacisz łącznie '.($rata*$_POST['post_mies']).'zł<br>
				Ta pożyczka będzie Cię kosztowała '.(($rata*$_POST['post_mies'])-$_POST['post_kwota']).'zł
				<br><br><a href="index.php" class="btn btn-light">Wykonaj nowe obliczenie</a>
				</div>');
		} else $result .= '<div class="alert alert-danger mt-4 mb-4" role="alert">Podane wartości są niepoprawne!</div>';
	} else $result .= '<div class="alert alert-danger mt-4 mb-4" role="alert">Nie podano wszystkich wymaganych wartości!</div>';
}

$smarty->display('calc.tpl');