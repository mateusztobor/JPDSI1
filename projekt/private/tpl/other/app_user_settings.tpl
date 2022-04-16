{include file="head_start.tpl" title="{$lang.user_settings_title}"}
{include file="head_end.tpl"}
{include file="header.tpl"}
{include file="content_start.tpl"}

<h1>{$lang.user_settings_title2}</h1>


<h3>{$lang.user_settings_chpass_title}</h3>
{$user_chpass_alerts}
<form action="{$system_url}user/settings" method="post">
	<div class="form-group mb-3">
		<label for="id_oldpassword">{$lang.user_settings_chpass_old_pass}</label>
		<input name="post_oldpassword" value="" required type="password" class="form-control" id="id_oldpassword" placeholder="{$lang.user_settings_chpass_old_pass_placeholder}">
	</div>
	<div class="form-group mb-3">
		<label for="id_password">{$lang.user_settings_chpass_new_pass}</label>
		<input name="post_password" value="" required type="password" pattern="{$lang.guest_register_password_preg}" class="form-control" id="id_password" placeholder="{$lang.user_settings_chpass_new_pass_placeholder}">
		<small class="form-text text-muted">{$lang.guest_register_password_info}</small>
	</div>
	<div class="form-group mb-3">
		<label for="id_repassword">{$lang.user_settings_chpass_repass}</label>
		<input value="" required type="password" name="post_repassword" class="form-control" id="id_repassword" placeholder="{$lang.user_settings_chpass_repass_placeholder}">
	</div>
	<button type="submit" class="btn btn-danger">{$lang.user_settings_save_button}</button>
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