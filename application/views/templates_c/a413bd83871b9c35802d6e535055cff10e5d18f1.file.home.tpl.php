<?php /* Smarty version Smarty-3.1.5, created on 2014-08-29 10:45:52
         compiled from "application/views\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:905854003dc0a36376-66741212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a413bd83871b9c35802d6e535055cff10e5d18f1' => 
    array (
      0 => 'application/views\\templates\\home.tpl',
      1 => 1409299663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '905854003dc0a36376-66741212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Name' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54003dc0b9d9c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54003dc0b9d9c')) {function content_54003dc0b9d9c($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>($_smarty_tpl->tpl_vars['Name']->value),'name'=>($_smarty_tpl->tpl_vars['Name']->value)), 0);?>

<div id="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</h1>
    <div id="body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("htmlfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>