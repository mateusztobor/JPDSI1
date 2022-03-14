<?php
	if(!defined("_INSIDE_APP")) exit;
	define('_APP_PAGE_NAME', "Kalkulator oprocentowania");
	load_tpl('head');
	load_tpl('nav');
	load_tpl('content_start');
?>

<h1>Kalkulator oprocentowania</h1>
<form action="?p=calc" method="post">
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

<?php
	print($result);
	load_tpl('content_end');
	load_tpl('footer');
?>