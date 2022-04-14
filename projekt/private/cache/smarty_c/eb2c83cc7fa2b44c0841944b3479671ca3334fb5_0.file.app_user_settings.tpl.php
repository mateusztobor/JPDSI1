<?php
/* Smarty version 4.1.0, created on 2022-03-23 19:17:14
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\app_user_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623b642aee8521_80812126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2c83cc7fa2b44c0841944b3479671ca3334fb5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\app_user_settings.tpl',
      1 => 1648059434,
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
function content_623b642aee8521_80812126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['lang']->value['user_settings_title'])), 0, false);
$_smarty_tpl->_subTemplateRender("file:head_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:content_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_settings_title2'];?>
</h1>


<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_settings_chpass_title'];?>
</h3>
<?php echo $_smarty_tpl->tpl_vars['user_chpass_alerts']->value;?>

<form action="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
user/settings" method="post">
	<div class="form-group mb-3">
		<label for="id_oldpassword"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_settings_chpass_old_pass'];?>
</label>
		<input name="post_oldpassword" value="" required type="password" class="form-control" id="id_oldpassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['user_settings_chpass_old_pass_placeholder'];?>
">
	</div>
	<div class="form-group mb-3">
		<label for="id_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_settings_chpass_new_pass'];?>
</label>
		<input name="post_password" value="" required type="password" pattern="<?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_password_preg'];?>
" class="form-control" id="id_password" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['user_settings_chpass_new_pass_placeholder'];?>
">
		<small class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['lang']->value['guest_register_password_info'];?>
</small>
	</div>
	<div class="form-group mb-3">
		<label for="id_repassword"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_settings_chpass_repass'];?>
</label>
		<input value="" required type="password" name="post_repassword" class="form-control" id="id_repassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['user_settings_chpass_repass_placeholder'];?>
">
	</div>
	<button type="submit" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_settings_save_button'];?>
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
