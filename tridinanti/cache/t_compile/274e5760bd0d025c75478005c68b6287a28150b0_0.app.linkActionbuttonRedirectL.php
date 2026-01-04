<?php
/* Smarty version 3.1.39, created on 2025-12-25 13:59:10
  from 'app:linkActionbuttonRedirectL' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_694ce0be0c4720_84327763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '274e5760bd0d025c75478005c68b6287a28150b0' => 
    array (
      0 => 'app:linkActionbuttonRedirectL',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694ce0be0c4720_84327763 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		$('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonSelector']->value,'javascript' ));?>
').pkpHandler(
				'$.pkp.controllers.linkAction.LinkActionHandler',
				{
					actionRequest: '$.pkp.classes.linkAction.RedirectRequest',
					actionRequestOptions: {
						url: <?php echo json_encode($_smarty_tpl->tpl_vars['cancelUrl']->value);?>
,
						name: <?php echo json_encode($_smarty_tpl->tpl_vars['cancelUrlTarget']->value);?>

					},
			});
	});
<?php echo '</script'; ?>
>
<?php }
}
