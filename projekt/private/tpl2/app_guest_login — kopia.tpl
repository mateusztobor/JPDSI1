{include file="head_start.tpl" title="{$lang.guest_login_title}"}
{include file="head_end.tpl"}
{include file="header.tpl"}
{include file="content_start.tpl"}


<h1>{$lang.guest_login_title2}</h1>
<div class="mb-3"><code>{$lang.guest_login_desc}</code></div>
{$guest_login_alerts}
<form>
	<div class="form-group mb-3">
		<label for="id_email">{$lang.guest_login_email}</label>
		<input name="post_email" value="" required type="text" class="form-control" id="id_email" placeholder="{$lang.guest_login_email_placeholder}">
	</div>
	<div class="form-group mb-3">
		<label for="id_password">{$lang.guest_login_password}</label>
		<input name="post_password" value="" required type="password" class="form-control" id="id_password" placeholder="{$lang.guest_login_password_placeholder}">
	</div>
</form>


{include file="content_end.tpl"}
{include file="footer.tpl"}
{include file="end.tpl"}