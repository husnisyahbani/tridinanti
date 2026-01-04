<?php
/* Smarty version 3.1.39, created on 2025-12-29 06:10:24
  from 'plugins-10-plugins-generic-staticPages-generic-staticPages:staticPagesTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6951b8e05f9f04_25086826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0afefabbc3f8b6be50e1ef2f2adc007258aab0d' => 
    array (
      0 => 'plugins-10-plugins-generic-staticPages-generic-staticPages:staticPagesTab.tpl',
      1 => 1664910731,
      2 => 'plugins-10-plugins-generic-staticPages-generic-staticPages',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6951b8e05f9f04_25086826 (Smarty_Internal_Template $_smarty_tpl) {
?><tab id="staticPages" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.staticPages.staticPages"),$_smarty_tpl ) );?>
">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'staticPageGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"plugins.generic.staticPages.controllers.grid.StaticPageGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"staticPageGridContainer",'url'=>$_smarty_tpl->tpl_vars['staticPageGridUrl']->value),$_smarty_tpl ) );?>

</tab>
<?php }
}
