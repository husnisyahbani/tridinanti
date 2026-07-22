<?php
/* Smarty version 3.1.39, created on 2026-07-22 08:01:51
  from 'plugins-3-plugins-generic-staticPages-generic-staticPages:content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6a60167f130785_48094717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f17bfa2c67a9140745e9f35d7ff14a1ec46b69d6' => 
    array (
      0 => 'plugins-3-plugins-generic-staticPages-generic-staticPages:content.tpl',
      1 => 1664910731,
      2 => 'plugins-3-plugins-generic-staticPages-generic-staticPages',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6a60167f130785_48094717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

<div class="page">
	<h2><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));?>
</h2>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
