<?php
/* Smarty version 4.1.0, created on 2022-03-22 23:54:43
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623a53b3360b00_64523490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '400c14742c9ad95f07ff115648744d37912fd3c3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\alert.tpl',
      1 => 1647989628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623a53b3360b00_64523490 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div><?php }
}
