<?php /* Smarty version Smarty-3.1.5, created on 2014-08-29 10:45:52
         compiled from "application/views\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:741154003dc0bb8f58-32370520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e6e2c2cf5bd91d1768b9345a608a994e9d1250d' => 
    array (
      0 => 'application/views\\templates\\header.tpl',
      1 => 1409299663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '741154003dc0bb8f58-32370520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'stylefiles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54003dc0c7860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54003dc0c7860')) {function content_54003dc0c7860($_smarty_tpl) {?><!DOCTYPE html> 
<html lang="en">  
<head> 
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title> 
	<meta http-equiv="content-type" content="application/xhtml+xml;charset=utf-8" /> 
	<style type="text/css"><?php echo $_smarty_tpl->tpl_vars['stylefiles']->value;?>
</style>        
</head> 
<body>
<?php }} ?>