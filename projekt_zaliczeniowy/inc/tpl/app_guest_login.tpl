{include file="head_start.tpl" title="Notuś - Logowanie"}
{include file="head_end.tpl"}
{include file="header.tpl"}
{include file="content_start.tpl"}


<h1>Logowanie</h1>
<form action="{$system_url}guest/login" method="post">
	<div class="form-group mb-3">
		<label for="id_login">Login</label>
		<input name="post_login" value="" required type="text" class="form-control" id="id_login" placeholder="Wprowadź login">
	</div>
	<div class="form-group mb-3">
		<label for="id_password">Hasło</label>
		<input name="post_password" value="" required type="password" class="form-control" id="id_password" placeholder="Wprowadź hasło">
	</div>
	<button type="submit" class="btn btn-primary">Zaloguj</button>
</form>


{include file="content_end.tpl"}
{include file="footer.tpl"}
{include file="end.tpl"}