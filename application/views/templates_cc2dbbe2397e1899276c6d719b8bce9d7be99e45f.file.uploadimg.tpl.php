<?php /* Smarty version Smarty-3.1.5, created on 2014-09-13 11:19:06
         compiled from "D:\www\airestaurant\application\views/rest\uploadimg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41105414014ada9321-64697751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2dbbe2397e1899276c6d719b8bce9d7be99e45f' => 
    array (
      0 => 'D:\\www\\airestaurant\\application\\views/rest\\uploadimg.tpl',
      1 => 1410599945,
      2 => 'file',
    ),
    '5e72141f5623798666b003f954676e444c41bda5' => 
    array (
      0 => 'D:\\www\\airestaurant\\application\\views/layouts\\main.tpl',
      1 => 1410512008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41105414014ada9321-64697751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5414014b43b37',
  'variables' => 
  array (
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5414014b43b37')) {function content_5414014b43b37($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <!--link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.css');?>
"-->
        <!-- Optional theme -->
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>
">
        <!-- Latest compiled and minified JavaScript -->
        <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>


    <header id="topbar" role="banner">
        <div class="container clearfix">

            <a id="logo" href="/" title="<?php echo $_smarty_tpl->tpl_vars['g']->value['sitename'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['sitename'];?>
" role="logo">
                <i class="default-logo"></i>
            </a>

            <a class="m-apps" href="/mobile" target="_blank" onclick="_gaq.push(['_trackEvent', 'topbar', 'click_mobile']);"><i class="icon-mobile"></i>手机客户端</a>

            <div id="topbar_search" class="topbar-search" role="search">
                <form id="tsearch_form" class="tsearch-form clearfix" action="/search" method="get">
                    <i class="icon-tsearch"></i>
                    <input id="tsearch_input" class="tsearch-input" type="text" name="kw" autocomplete="off" placeholder="搜索餐厅，美食…">
                    <i id="ts_loading" class="icon-tloading hide"></i>
                    <a id="ts_clear" class="icon-tclear hide"></a>
                </form>
                <div id="tsearch_autocomplete" class="tsearch-autocomplete"></div>

            </div>

            <nav class="topbar-nav" role="navigation">
                <ul class="topbar-site-nav">
                    <li><a class="tnav-link" rel="nofollow" href="/profile/order">我的饿单</a></li>
                    <li><a class="tnav-link" rel="nofollow" href="/gift">礼品中心</a></li>
                    <li><a class="tnav-link" rel="nofollow" href="/feedback">反馈留言</a></li>
                    <li><a class="tnav-link" rel="nofollow" href="http://t.dianping.com/home?latitude=34.799175385722&amp;longitude=113.66132301184&amp;distance=500&amp;utm_source=eleme1&amp;utm_medium=eleme&amp;utm_term=pc&amp;utm_content=1&amp;utm_campaign=f" target="_blank">附近团购</a></li>
                </ul>

                <div id="topbar_cart" class="eleme_dropdown topbar-widget topbar-cart">
                    <a class="e_toggle twidget-toggle">
                        <span id="tcart_total" class="tcart-total twidget-total">9</span>
                        <i class="icon-tcart"></i>
                    </a>
                    <div class="e_dropdown twidget-dropdown">
                        <div id="tcart_loading" class="twidget-loading"></div>
                        <div id="tcart_wrapper"></div>
                    </div>
                </div>


                <div class="topbar-user-nav tnav-link">
                    <?php if ((($tmp = @$_SESSION['user'])===null||$tmp==='' ? false : $tmp)){?>
                        <a rel="nofollow" href="<?php echo site_url('/page/profile/');?>
/<?php echo $_SESSION['user']['id'];?>
"><?php echo $_SESSION['user']['username'];?>
</a> 
                        <a rel="nofollow" href="<?php echo site_url('/auth/logout');?>
">退出</a> 
                    <?php }else{ ?>
                        <a rel="nofollow" href="<?php echo site_url('/page/login');?>
">登录</a> /
                        <a rel="nofollow" href="<?php echo site_url('/page/register');?>
">注册</a>
                    <?php }?>
                </div>

            </nav>

        </div>
    </header>

    <div id="container"  class="container full-content-wrapper">
    
    <?php echo validation_errors();?>

    <form method='post' class="form" enctype="multipart/form-data">
        <div>
            <span>商店ID</span>
            <input type="text" name="restid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['restid']->value;?>
" disabled="disabled" readonly>
        </div>
        <div>
            <input type="file" name="imgs[]" multiple>
        </div>
        <input type="submit">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>