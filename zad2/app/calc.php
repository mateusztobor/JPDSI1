<?php
	if(!defined("_INSIDE_APP")) exit;
	if(!user_logged()) {
		header('Location: ?p=login&c');
		exit;
	}
	$result = '';
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
				$result .= '<div class="text-center alert alert-secondary mb-4" role="alert">';
				$result .= '<h3>Wartość miesięcznej raty wynosi <span style="color:red;">'.$rata.'zł</span></h3>';
				$result .= 'W sumie pożyczając '.$_POST['post_kwota'].'zł na '.$_POST['post_mies'].' miesięcy, przy odsetkach '.$_POST['post_odsetki'].'% spłacisz łącznie '.($rata*$_POST['post_mies']).'zł<br>';
				$result .= 'Ta pożyczka będzie Cię kosztowała '.(($rata*$_POST['post_mies'])-$_POST['post_kwota']).'zł';
				$result .= '<br><br><a href="?p=calc" class="btn btn-light">Wykonaj nowe obliczenie</a>';
				$result .= '</div>';
			} else $result .= '<div class="alert alert-danger" role="alert">Podane wartości są niepoprawne!</div>';
		} else $result .= '<div class="alert alert-danger" role="alert">Nie podano wszystkich wymaganych wartości!</div>';
	}

	//wywołanie widoku
	include 'calc_view.php';