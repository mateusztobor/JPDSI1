<?php if(!defined("_INSIDE_APP")) exit; ?>
		<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php"><?php print(_APP_NAME); ?></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav me-auto mb-2 mb-md-0">
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'start') print(" active"); ?>" aria-current="page" href="?p=start">Start</a>
							</li>
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'calc') print(" active"); ?>" aria-current="page" href="?p=calc">Kalkulator oprocentowania</a>
							</li>
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'other') print(" active"); ?>" aria-current="page" href="?p=other">Inna podstrona</a>
							</li>
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'other2') print(" active"); ?>" aria-current="page" href="?p=other2">Inna podstrona bez logowania</a>
							</li>
							<li class="nav-item">
								<a class="nav-link<?php if(@$_GET['p'] == 'login') print(" active"); ?>" aria-current="page" href="?p=login"<?php if(user_logged()) print('onclick="return confirm('."'Czy na pewno chcesz się wylogować?');");?>"><?php (user_logged()) ? print("Wyloguj") : print("Zaloguj"); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>	
