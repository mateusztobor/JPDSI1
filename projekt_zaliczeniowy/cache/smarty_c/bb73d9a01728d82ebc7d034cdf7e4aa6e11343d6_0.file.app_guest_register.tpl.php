<?php
/* Smarty version 4.1.0, created on 2022-03-22 23:30:21
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\app_guest_register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623a4dfd7c3726_30434397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb73d9a01728d82ebc7d034cdf7e4aa6e11343d6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\app_guest_register.tpl',
      1 => 1647988219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_start.tpl' => 1,
    'file:head_end.tpl' => 1,
    'file:header.tpl' => 1,
    'file:content_start.tpl' => 1,
    'file:content_end.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:end.tpl' => 1,
  ),
),false)) {
function content_623a4dfd7c3726_30434397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Notuś - Logowanie"), 0, false);
$_smarty_tpl->_subTemplateRender("file:head_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:content_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Tworzenie konta</h1>
<form action="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
guest/register" method="post">
	<div class="form-group mb-3">
		<label for="id_login">Adres email</label>
		<input name="post_login" value="" required type="email" class="form-control" id="id_login" placeholder="Wprowadź swój adres email.">
	</div>
	<div class="form-group mb-3">
		<label for="id_login">Nick</label>
		<input name="post_login" value="" required type="text" class="form-control" id="id_login" placeholder="Jak się nazywasz? :)">
	</div>
	<div class="form-group mb-3">
		<label for="id_password">Hasło</label>
		<input name="post_password" value="" required type="password" class="form-control" id="id_password" placeholder="Wprowadź hasło.">
	</div>
	<button type="submit" class="btn btn-primary">Zaloguj</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:content_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
