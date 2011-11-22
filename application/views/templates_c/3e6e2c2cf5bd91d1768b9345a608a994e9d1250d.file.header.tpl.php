<?php /* Smarty version Smarty-3.1.5, created on 2011-11-22 05:53:54
         compiled from "application/views\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151484ecb02cfb88243-73909923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e6e2c2cf5bd91d1768b9345a608a994e9d1250d' => 
    array (
      0 => 'application/views\\templates\\header.tpl',
      1 => 1321937160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151484ecb02cfb88243-73909923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ecb02cfc4b4e',
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'stylefiles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecb02cfc4b4e')) {function content_4ecb02cfc4b4e($_smarty_tpl) {?><!DOCTYPE html> 
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