<?php
/* Smarty version 3.1.39, created on 2026-07-23 09:22:00
  from 'plugins-12-plugins-generic-citationStyleLanguage-generic-citationStyleLanguage:citationstylesris.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6a617ac8955e43_78382581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a38fb87b27c531987c041952810e1bac9999397' => 
    array (
      0 => 'plugins-12-plugins-generic-citationStyleLanguage-generic-citationStyleLanguage:citationstylesris.tpl',
      1 => 1664910730,
      2 => 'plugins-12-plugins-generic-citationStyleLanguage-generic-citationStyleLanguage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a617ac8955e43_78382581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/univ-tridinanti-ejournal/htdocs/ejournal.univ-tridinanti.ac.id/tridinanti/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/univ-tridinanti-ejournal/htdocs/ejournal.univ-tridinanti.ac.id/tridinanti/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('containerTitle', "container-title");
$_smarty_tpl->_assignInScope('containerTitleShort', "container-title-short");?>
TY  - JOUR
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citationData']->value->author, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
AU  - <?php echo $_smarty_tpl->tpl_vars['author']->value->family;?>
, <?php echo $_smarty_tpl->tpl_vars['author']->value->given;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
PY  - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['citationData']->value->issued->raw,"%Y/%m/%d");?>

Y2  - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['citationData']->value->accessed->raw,"%Y/%m/%d");?>

TI  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->title;?>

JF  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->{$_smarty_tpl->tpl_vars['containerTitle']->value};?>

JA  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->{$_smarty_tpl->tpl_vars['containerTitleShort']->value};?>

VL  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->volume;?>

IS  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->issue;?>

SE  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->section;?>

DO  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->DOI;?>

UR  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->URL;?>

SP  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->page;?>

AB  - <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['citationData']->value->abstract,"\r\n",''),"\n",'');?>

ER  -
<?php }
}
