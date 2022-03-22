<header>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-expand-md fixed-top bg-danger navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="{$system_url}">
			N<img src="{$system_url}favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">TUŚ
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					{include file="nav.tpl"}
				</ul>
				<form class="d-flex">
					<input class="form-control me-2 col-lg" type="search" id="getnotus" placeholder="Wpisz id lub tytuł notatki :)" aria-label="Search">
					<button class="btn btn-warning" type="submit">»</button>
				</form>
			</div>
		</div>
	</nav>
</header>