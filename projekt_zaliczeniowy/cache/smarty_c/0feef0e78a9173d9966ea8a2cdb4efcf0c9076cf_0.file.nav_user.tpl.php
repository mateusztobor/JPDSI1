<?php
/* Smarty version 4.1.0, created on 2022-03-22 20:23:04
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\nav_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623a221881bf01_08256958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0feef0e78a9173d9966ea8a2cdb4efcf0c9076cf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\nav_user.tpl',
      1 => 1647976984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623a221881bf01_08256958 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="nav-item">
	<div class="dropdown">
	  <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
		USERNAME
	  </a>

	  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		<li><a class="dropdown-item" href="#">Ustawienia konta</a></li>
		<li><a class="dropdown-item" href="#">Wyloguj</a></li>
	  </ul>
	</div>
</li>
<li class="nav-item">
	<a class="nav-link" href="#">Moje notatki</a>
</li>
<?php }
}
