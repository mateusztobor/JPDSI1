{if $user_logged eq true}
    {include file="nav_user.tpl"}
{else}
    {include file="nav_guest.tpl"}
{/if}