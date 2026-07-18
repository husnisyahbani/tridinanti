<?php
/* Smarty version 3.1.39, created on 2026-07-18 05:35:19
  from 'plugins-16-plugins-importexport-users-importexport-users:results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6a5aae278fd230_78066497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa631128af03fe6ea5c52f37df126f708ef49884' => 
    array (
      0 => 'plugins-16-plugins-importexport-users-importexport-users:results.tpl',
      1 => 1664910542,
      2 => 'plugins-16-plugins-importexport-users-importexport-users',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5aae278fd230_78066497 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['validationErrors']->value) {?>
	<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.common.validationErrors"),$_smarty_tpl ) );?>
</h2>
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['validationErrors']->value, 'validationError');
$_smarty_tpl->tpl_vars['validationError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['validationError']->value) {
$_smarty_tpl->tpl_vars['validationError']->do_else = false;
?>
			<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['validationError']->value->message ));?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php } elseif ($_smarty_tpl->tpl_vars['filterErrors']->value) {?>
	<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.user.importExportErrors"),$_smarty_tpl ) );?>
</h2>
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filterErrors']->value, 'filterError');
$_smarty_tpl->tpl_vars['filterError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filterError']->value) {
$_smarty_tpl->tpl_vars['filterError']->do_else = false;
?>
			<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filterError']->value ));?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php } else { ?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.users.importComplete"),$_smarty_tpl ) );?>

<?php }
}
}
