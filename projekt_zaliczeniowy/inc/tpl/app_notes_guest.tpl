{include file="head_start.tpl" title="Notuś"}
{include file="head_end.tpl"}
{include file="header.tpl"}
{include file="content_start.tpl"}

<div class="mb-3 text-center"><code>{$lang.notes_guest_desc}</code></div>

<div class="text-center">
	{$notes_alerts}
	{include file="app_notes_field.tpl"}
	<button type="submit" class="btn btn-danger">{$lang.notes_save_button}</button>
	</form>
</div>

{include file="content_end.tpl"}
{include file="footer.tpl"}
{include file="end.tpl"}