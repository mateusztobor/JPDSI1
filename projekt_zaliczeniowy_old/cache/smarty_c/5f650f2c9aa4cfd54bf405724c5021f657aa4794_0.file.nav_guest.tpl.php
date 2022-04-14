<?php
/* Smarty version 4.1.0, created on 2022-04-12 14:10:04
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy_old\inc\tpl\nav_guest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62556c1cc90565_98534125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f650f2c9aa4cfd54bf405724c5021f657aa4794' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy_old\\inc\\tpl\\nav_guest.tpl',
      1 => 1648054882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62556c1cc90565_98534125 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="nav-item">
	<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
guest/login"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_guest_login'];?>
</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
guest/register"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_guest_register'];?>
</a>
</li><?php }
}
