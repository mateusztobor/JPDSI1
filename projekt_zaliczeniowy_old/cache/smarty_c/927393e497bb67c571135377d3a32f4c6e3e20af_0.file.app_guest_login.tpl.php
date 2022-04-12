<?php
/* Smarty version 4.1.0, created on 2022-03-23 17:54:20
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\app_guest_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623b50bc064a90_33549008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '927393e497bb67c571135377d3a32f4c6e3e20af' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\app_guest_login.tpl',
      1 => 1648054282,
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
function content_623b50bc064a90_33549008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['lang']->value['guest_login_title'])), 0, false);
$_smarty_tpl->_subTemplateRender("file:head_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:content_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_login_title2'];?>
</h1>
<div class="mb-3"><code><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_login_desc'];?>
</code></div>
<?php echo $_smarty_tpl->tpl_vars['guest_login_alerts']->value;?>

<form action="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
guest/login" method="post">
	<div class="form-group mb-3">
		<label for="id_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_login_email'];?>
</label>
		<input name="post_email" value="" required type="text" class="form-control" id="id_email" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_login_email_placeholder'];?>
">
	</div>
	<div class="form-group mb-3">
		<label for="id_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_login_password'];?>
</label>
		<input name="post_password" value="" required type="password" class="form-control" id="id_password" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_login_password_placeholder'];?>
">
	</div>
	<button type="submit" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_login_button'];?>
</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:content_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
