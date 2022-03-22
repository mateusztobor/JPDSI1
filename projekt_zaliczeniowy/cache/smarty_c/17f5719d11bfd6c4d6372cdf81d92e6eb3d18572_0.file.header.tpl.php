<?php
/* Smarty version 4.1.0, created on 2022-03-22 20:02:37
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623a1d4d7c96c7_24381493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17f5719d11bfd6c4d6372cdf81d92e6eb3d18572' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\header.tpl',
      1 => 1647975756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623a1d4d7c96c7_24381493 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-expand-md fixed-top bg-danger navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
			N<img src="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">TUŚ
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Start</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled">Disabled</a>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2 col-lg" type="search" id="getnotus" placeholder="Wpisz id lub tytuł notatki" aria-label="Search">
					<button class="btn btn-warning" type="submit">»</button>
				</form>
			</div>
		</div>
	</nav>
</header><?php }
}
