<?php /* Smarty version Smarty-3.1.5, created on 2011-11-22 03:24:44
         compiled from "application/views\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253114ecb02cfa80338-44188781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a413bd83871b9c35802d6e535055cff10e5d18f1' => 
    array (
      0 => 'application/views\\templates\\home.tpl',
      1 => 1321928684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253114ecb02cfa80338-44188781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ecb02cfb7834',
  'variables' => 
  array (
    'Name' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecb02cfb7834')) {function content_4ecb02cfb7834($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>($_smarty_tpl->tpl_vars['Name']->value),'name'=>($_smarty_tpl->tpl_vars['Name']->value)), 0);?>

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