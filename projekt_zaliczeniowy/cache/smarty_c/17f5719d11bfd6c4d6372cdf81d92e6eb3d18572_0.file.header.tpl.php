<?php
/* Smarty version 4.1.0, created on 2022-03-22 21:18:35
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623a2f1bdf00d7_62756527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17f5719d11bfd6c4d6372cdf81d92e6eb3d18572' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\header.tpl',
      1 => 1647980313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_623a2f1bdf00d7_62756527 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-expand-md fixed-top bg-danger navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
">
			N<img src="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">TUŚ
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2 col-lg" type="search" id="getnotus" placeholder="Wpisz id lub tytuł notatki :)" aria-label="Search">
					<button class="btn btn-warning" type="submit">»</button>
				</form>
			</div>
		</div>
	</nav>
</header><?php }
}
