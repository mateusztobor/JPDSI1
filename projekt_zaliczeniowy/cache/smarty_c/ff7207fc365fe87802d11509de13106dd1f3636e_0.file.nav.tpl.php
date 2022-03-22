<?php
/* Smarty version 4.1.0, created on 2022-03-22 21:11:58
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623a2d8e0d78f0_49105985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff7207fc365fe87802d11509de13106dd1f3636e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\nav.tpl',
      1 => 1647979911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav_user.tpl' => 1,
    'file:nav_guest.tpl' => 1,
  ),
),false)) {
function content_623a2d8e0d78f0_49105985 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user_logged']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:nav_user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:nav_guest.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
