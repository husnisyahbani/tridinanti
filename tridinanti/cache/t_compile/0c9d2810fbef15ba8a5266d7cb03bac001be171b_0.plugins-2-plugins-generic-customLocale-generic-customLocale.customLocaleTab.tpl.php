<?php
/* Smarty version 3.1.39, created on 2026-07-10 15:04:44
  from 'plugins-2-plugins-generic-customLocale-generic-customLocale:customLocaleTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6a50a79c16cd65_96261518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c9d2810fbef15ba8a5266d7cb03bac001be171b' => 
    array (
      0 => 'plugins-2-plugins-generic-customLocale-generic-customLocale:customLocaleTab.tpl',
      1 => 1770285982,
      2 => 'plugins-2-plugins-generic-customLocale-generic-customLocale',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a50a79c16cd65_96261518 (Smarty_Internal_Template $_smarty_tpl) {
?><tab id="customLocale" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.customLocale.customLocale"),$_smarty_tpl ) );?>
">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'customLocaleGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"plugins.generic.customLocale.controllers.grid.CustomLocaleGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"customLocaleGridContainer",'url'=>$_smarty_tpl->tpl_vars['customLocaleGridUrl']->value),$_smarty_tpl ) );?>

</tab>
<?php }
}
