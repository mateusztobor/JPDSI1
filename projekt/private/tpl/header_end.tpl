				</ul>
				<form class="d-flex" method="get" action="{$system_url}index.php?app=search">
					<input type="hidden" name="app" value="search">
					<input name="id" class="form-control me-2 col-lg" type="search" id="getnotus" placeholder="<?php print(Flight::get('lang.header_search_placeholder')); ?>" aria-label="Search">
					<button class="btn btn-warning" type="submit"><?php print(Flight::get('lang.header_search_btn')); ?></button>
				</form>
			</div>
		</div>
	</nav>
</header>