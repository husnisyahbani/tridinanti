<?php
/* Smarty version 3.1.39, created on 2025-12-30 12:23:40
  from 'plugins-4-plugins-pubIds-doi-pubIds-doi:doiAssignCheckBox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_695361dceb8f49_81959541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d8669386152a306c7f6b066f6702c88ee42b75' => 
    array (
      0 => 'plugins-4-plugins-pubIds-doi-pubIds-doi:doiAssignCheckBox.tpl',
      1 => 1664910542,
      2 => 'plugins-4-plugins-pubIds-doi-pubIds-doi',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695361dceb8f49_81959541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedObjectType', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>("plugins.pubIds.doi.editor.doiObjectType").($_smarty_tpl->tpl_vars['pubObjectType']->value)),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'assignCheckboxLabel', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.editor.assignDoi",'pubId'=>$_smarty_tpl->tpl_vars['pubId']->value,'pubObjectType'=>$_smarty_tpl->tpl_vars['translatedObjectType']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"assignDoi",'checked'=>"true",'value'=>"1",'label'=>$_smarty_tpl->tpl_vars['assignCheckboxLabel']->value,'translate'=>false,'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
