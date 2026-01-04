<?php
/* Smarty version 3.1.39, created on 2025-12-24 14:18:34
  from 'app:reviewerreviewstep1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_694b93ca40bad4_14105367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec61878112543cbeab88afb3d9e2c2bef12cdc66' => 
    array (
      0 => 'app:reviewerreviewstep1.tpl',
      1 => 1664910542,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:reviewer/review/step1.tpl' => 1,
  ),
),false)) {
function content_694b93ca40bad4_14105367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('descriptionFieldKey', "article.abstract");
$_smarty_tpl->_subTemplateRender("core:reviewer/review/step1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
