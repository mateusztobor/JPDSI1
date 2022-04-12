<?php
/* Smarty version 4.1.0, created on 2022-03-23 18:01:24
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\nav_guest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623b526452d120_71337839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d5688b995ca3d16f26c1ed3ee01be65884f888' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\nav_guest.tpl',
      1 => 1648054882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623b526452d120_71337839 (Smarty_Internal_Template $_smarty_tpl) {
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
