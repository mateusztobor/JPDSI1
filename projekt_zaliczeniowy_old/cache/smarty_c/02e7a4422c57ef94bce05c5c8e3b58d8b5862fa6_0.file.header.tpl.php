<?php
/* Smarty version 4.1.0, created on 2022-04-12 14:10:04
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy_old\inc\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62556c1cad94e0_49334445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e7a4422c57ef94bce05c5c8e3b58d8b5862fa6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy_old\\inc\\tpl\\header.tpl',
      1 => 1648109693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_62556c1cad94e0_49334445 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-expand-md fixed-top bg-danger navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
">
			N<img src="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">TUŚ
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value['header_toggle_nav'];?>
">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</ul>
				<form class="d-flex" method="get" action="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
index.php?app=search">
					<input type="hidden" name="app" value="search">
					<input name="id" class="form-control me-2 col-lg" type="search" id="getnotus" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['header_search_placeholder'];?>
" aria-label="Search">
					<button class="btn btn-warning" type="submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_search_btn'];?>
</button>
				</form>
			</div>
		</div>
	</nav>
</header><?php }
}
