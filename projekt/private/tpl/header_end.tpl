				</ul>
				<form class="d-flex" method="get" action="<?php print(Flight::get('app.url')); ?>">
					<input type="hidden" name="s" value="true">
					<input name="s_id" class="form-control me-2 col-lg" type="search" id="getnotus" placeholder="<?php print(Flight::get('lang.header_search_placeholder')); ?>" aria-label="Search">
					<button class="btn btn-warning" type="submit"><?php print(Flight::get('lang.header_search_btn')); ?></button>
				</form>
			</div>
		</div>
	</nav>
</header>