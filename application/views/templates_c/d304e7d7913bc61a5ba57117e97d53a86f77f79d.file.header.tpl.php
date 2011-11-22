<?php /* Smarty version Smarty-3.1.5, created on 2011-11-22 15:26:21
         compiled from "application/views/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11074860124ecbb10d13e812-11424262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd304e7d7913bc61a5ba57117e97d53a86f77f79d' => 
    array (
      0 => 'application/views/templates/header.tpl',
      1 => 1321971276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11074860124ecbb10d13e812-11424262',
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
  'unifunc' => 'content_4ecbb10d1ae95',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecbb10d1ae95')) {function content_4ecbb10d1ae95($_smarty_tpl) {?><!DOCTYPE html> 
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