<?php
/* Smarty version 3.1.39, created on 2025-12-24 05:00:54
  from 'plugins-14-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_694b11169fae74_42354687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9c833e7aad1802e36ca79b17b698d365a8e49ca' => 
    array (
      0 => 'plugins-14-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl',
      1 => 1664910730,
      2 => 'plugins-14-plugins-generic-customBlockManager-generic-customBlockManager',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694b11169fae74_42354687 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_custom" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customBlockId']->value ));?>
">
	<h2 class="title<?php if (!$_smarty_tpl->tpl_vars['showName']->value) {?> pkp_screen_reader<?php }?>"><?php echo $_smarty_tpl->tpl_vars['customBlockTitle']->value;?>
</h2>
	<div class="content">
		<?php echo $_smarty_tpl->tpl_vars['customBlockContent']->value;?>

	</div>
</div>
<?php }
}
