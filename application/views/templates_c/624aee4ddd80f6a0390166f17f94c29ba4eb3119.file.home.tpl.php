<?php /* Smarty version Smarty-3.1.5, created on 2011-11-22 15:26:21
         compiled from "application/views/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15477584654ecbb10d049ae4-22169658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624aee4ddd80f6a0390166f17f94c29ba4eb3119' => 
    array (
      0 => 'application/views/templates/home.tpl',
      1 => 1321971276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15477584654ecbb10d049ae4-22169658',
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
  'unifunc' => 'content_4ecbb10d135d0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecbb10d135d0')) {function content_4ecbb10d135d0($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>($_smarty_tpl->tpl_vars['Name']->value),'name'=>($_smarty_tpl->tpl_vars['Name']->value)), 0);?>

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