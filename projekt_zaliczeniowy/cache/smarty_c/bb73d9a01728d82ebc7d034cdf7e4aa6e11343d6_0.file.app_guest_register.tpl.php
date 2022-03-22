<?php
/* Smarty version 4.1.0, created on 2022-03-23 00:28:32
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\app_guest_register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623a5ba0d71471_71619743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb73d9a01728d82ebc7d034cdf7e4aa6e11343d6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\app_guest_register.tpl',
      1 => 1647991311,
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
function content_623a5ba0d71471_71619743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['lang']->value['guest_register_title'])), 0, false);
$_smarty_tpl->_subTemplateRender("file:head_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:content_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_title2'];?>
</h1>
<?php echo $_smarty_tpl->tpl_vars['guest_register_message']->value;?>


<form action="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
guest/register" method="post">
	<div class="form-group mb-3">
		<label for="id_login"><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_email'];?>
</label>
		<input name="post_email" value="" required type="email" class="form-control" id="id_login" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_email_placeholder'];?>
">
	</div>
	<div class="form-group mb-3">
		<label for="id_nick"><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_nick'];?>
</label>
		<input name="post_nick" value="" required type="text" class="form-control" id="id_nick" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_nick_placeholder'];?>
">
	</div>
	<div class="form-group mb-3">
		<label for="id_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_password'];?>
</label>
		<input name="post_password" value="" required type="password" class="form-control" id="id_password" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_password_placeholder'];?>
">
	</div>
	<div class="form-group mb-3">
		<label for="id_repassword"><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_repassword'];?>
</label>
		<input value="" required type="password" class="form-control" id="id_repassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_repassword_placeholder'];?>
">
	</div>
	<button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_btn'];?>
</button>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
    window.onload = function () {
        var txtPassword = document.getElementById("id_password");
        var txtConfirmPassword = document.getElementById("id_repassword");
        txtPassword.onchange = ConfirmPassword;
        txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
                txtConfirmPassword.setCustomValidity("<?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_password_not_match'];?>
");
            }
        }
    }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:content_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
