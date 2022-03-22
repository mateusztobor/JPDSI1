{include file="head_start.tpl" title="{$lang.guest_register_title}"}
{include file="head_end.tpl"}
{include file="header.tpl"}
{include file="content_start.tpl"}
<h1>{$lang.guest_register_title2}</h1>
{$guest_register_message}

<form action="{$system_url}guest/register" method="post">
	<div class="form-group mb-3">
		<label for="id_login">{$lang.guest_register_email}</label>
		<input name="post_email" value="" required type="email" class="form-control" id="id_login" placeholder="{$lang.guest_register_email_placeholder}">
	</div>
	<div class="form-group mb-3">
		<label for="id_nick">{$lang.guest_register_nick}</label>
		<input name="post_nick" value="" required type="text" class="form-control" id="id_nick" placeholder="{$lang.guest_register_nick_placeholder}">
	</div>
	<div class="form-group mb-3">
		<label for="id_password">{$lang.guest_register_password}</label>
		<input name="post_password" value="" required type="password" class="form-control" id="id_password" placeholder="{$lang.guest_register_password_placeholder}">
	</div>
	<div class="form-group mb-3">
		<label for="id_repassword">{$lang.guest_register_repassword}</label>
		<input value="" required type="password" class="form-control" id="id_repassword" placeholder="{$lang.guest_register_repassword_placeholder}">
	</div>
	<button type="submit" class="btn btn-primary">{$lang.guest_register_btn}</button>
</form>
<script type="text/javascript">
    window.onload = function () {
        var txtPassword = document.getElementById("id_password");
        var txtConfirmPassword = document.getElementById("id_repassword");
        txtPassword.onchange = ConfirmPassword;
        txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
                txtConfirmPassword.setCustomValidity("{$lang.guest_register_password_not_match}");
            }
        }
    }
</script>
{include file="content_end.tpl"}
{include file="footer.tpl"}
{include file="end.tpl"}