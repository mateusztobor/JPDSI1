<?php
/* Smarty version 4.1.0, created on 2022-04-12 14:10:04
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy_old\inc\tpl\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62556c1cc13293_49827840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a31fbadf1dd3663f1b52463639c0c6b1ad8d1db' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy_old\\inc\\tpl\\nav.tpl',
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
function content_62556c1cc13293_49827840 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user_logged']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:nav_user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:nav_guest.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
