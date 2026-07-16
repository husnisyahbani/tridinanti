<?php
/* Smarty version 3.1.39, created on 2026-07-04 04:47:34
  from 'plugins-16-plugins-generic-recommendByAuthor-generic-recommendByAuthor:articleFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6a482df6b204b0_02937032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb7af09daf64ca02d3ce055071be81e8a68a44c7' => 
    array (
      0 => 'plugins-16-plugins-generic-recommendByAuthor-generic-recommendByAuthor:articleFooter.tpl',
      1 => 1664910542,
      2 => 'plugins-16-plugins-generic-recommendByAuthor-generic-recommendByAuthor',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a482df6b204b0_02937032 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="articlesBySameAuthorList">
	<?php if ($_smarty_tpl->tpl_vars['noMetricSelected']->value) {?>
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.recommendByAuthor.heading"),$_smarty_tpl ) );?>
</h3>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.recommendByAuthor.noMetric"),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php if (!$_smarty_tpl->tpl_vars['articlesBySameAuthor']->value->wasEmpty()) {?>
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.recommendByAuthor.heading"),$_smarty_tpl ) );?>
</h3>

			<ul>
				<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'articlesBySameAuthor','item'=>'articleBySameAuthor'));
$_block_repeat=true;
echo $_block_plugin2->smartyIterate(array('from'=>'articlesBySameAuthor','item'=>'articleBySameAuthor'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->_assignInScope('submission', $_smarty_tpl->tpl_vars['articleBySameAuthor']->value['publishedSubmission']);?>
					<?php $_smarty_tpl->_assignInScope('article', $_smarty_tpl->tpl_vars['articleBySameAuthor']->value['article']);?>
					<?php $_smarty_tpl->_assignInScope('issue', $_smarty_tpl->tpl_vars['articleBySameAuthor']->value['issue']);?>
					<?php $_smarty_tpl->_assignInScope('journal', $_smarty_tpl->tpl_vars['articleBySameAuthor']->value['journal']);?>
					<li>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
,
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['submission']->value->getBestId()),$_smarty_tpl ) );?>
">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

						</a>,
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getLocalizedName() ));?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ));?>

						</a>
					</li>
				<?php $_block_repeat=false;
echo $_block_plugin2->smartyIterate(array('from'=>'articlesBySameAuthor','item'=>'articleBySameAuthor'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</ul>
			<div id="articlesBySameAuthorPages">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], array( array('anchor'=>"articlesBySameAuthor",'iterator'=>$_smarty_tpl->tpl_vars['articlesBySameAuthor']->value,'name'=>"articlesBySameAuthor"),$_smarty_tpl ) );?>

			</div>
		<?php }?>
	<?php }?>
</div>
<?php }
}
