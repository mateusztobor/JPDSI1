<?php
/* Smarty version 4.1.0, created on 2022-03-24 08:59:01
  from 'D:\xampp\htdocs\JPDSI1\projekt_zaliczeniowy\inc\tpl\app_notes_guest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623c24c5f2f787_97879906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109aa4eedbff0244ef87601d9a3f34b01f17b2a2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\JPDSI1\\projekt_zaliczeniowy\\inc\\tpl\\app_notes_guest.tpl',
      1 => 1648108741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_start.tpl' => 1,
    'file:head_end.tpl' => 1,
    'file:header.tpl' => 1,
    'file:content_start.tpl' => 1,
    'file:app_notes_field.tpl' => 1,
    'file:content_end.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:end.tpl' => 1,
  ),
),false)) {
function content_623c24c5f2f787_97879906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Notuś"), 0, false);
$_smarty_tpl->_subTemplateRender("file:head_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:content_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mb-3 text-center"><code><?php echo $_smarty_tpl->tpl_vars['lang']->value['notes_guest_desc'];?>
</code></div>

<div class="text-center">
	<?php echo $_smarty_tpl->tpl_vars['notes_alerts']->value;?>

	<?php $_smarty_tpl->_subTemplateRender("file:app_notes_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<button type="submit" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['notes_save_button'];?>
</button>
	</form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:content_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
