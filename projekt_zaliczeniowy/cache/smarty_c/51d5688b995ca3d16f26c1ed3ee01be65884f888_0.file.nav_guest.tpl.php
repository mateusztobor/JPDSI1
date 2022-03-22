<?php
/* Smarty version 4.1.0, created on 2022-03-22 22:58:16
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\nav_guest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623a467829b451_84942423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d5688b995ca3d16f26c1ed3ee01be65884f888' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\nav_guest.tpl',
      1 => 1647986294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623a467829b451_84942423 (Smarty_Internal_Template $_smarty_tpl) {
?>					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
guest/register">Stwórz konto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
guest/login">Zaloguj się</a>
					</li><?php }
}
