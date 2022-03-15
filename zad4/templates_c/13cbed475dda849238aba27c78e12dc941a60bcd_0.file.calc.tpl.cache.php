<?php
/* Smarty version 4.1.0, created on 2022-03-15 21:17:15
  from 'D:\xampp\htdocs\zad4\templates\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6230f44b46ab99_32702502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13cbed475dda849238aba27c78e12dc941a60bcd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zad4\\templates\\calc.tpl',
      1 => 1647375333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_6230f44b46ab99_32702502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12291416866230f44b404ad5_82441597';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "app.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<form action="" method="post">
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
				<?php echo $_smarty_tpl->tpl_vars['wynik']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
