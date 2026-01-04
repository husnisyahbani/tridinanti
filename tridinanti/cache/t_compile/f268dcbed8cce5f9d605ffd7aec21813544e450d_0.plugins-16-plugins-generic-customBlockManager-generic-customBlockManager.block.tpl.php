<?php
/* Smarty version 3.1.39, created on 2025-12-24 04:51:58
  from 'plugins-16-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_694b0efe9d4215_53749846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f268dcbed8cce5f9d605ffd7aec21813544e450d' => 
    array (
      0 => 'plugins-16-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl',
      1 => 1664910730,
      2 => 'plugins-16-plugins-generic-customBlockManager-generic-customBlockManager',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694b0efe9d4215_53749846 (Smarty_Internal_Template $_smarty_tpl) {
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
