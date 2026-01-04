<?php
/* Smarty version 3.1.39, created on 2025-12-25 14:00:33
  from 'app:reviewerreviewreviewCompl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_694ce1113229e5_02171701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1586a3fda447bf7a43a228bf50a92fab556bd8b' => 
    array (
      0 => 'app:reviewerreviewreviewCompl',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694ce1113229e5_02171701 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reviewer.complete"),$_smarty_tpl ) );?>
</h2>
<br />
<div class="separator"></div>

<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reviewer.complete.whatNext"),$_smarty_tpl ) );?>
</p>

<!-- Display queries grid -->
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "queriesGridUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.queries.QueriesGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['reviewAssignment']->value->getStageId(),'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"queriesGridComplete",'url'=>$_smarty_tpl->tpl_vars['queriesGridUrl']->value),$_smarty_tpl ) );?>

<?php }
}
