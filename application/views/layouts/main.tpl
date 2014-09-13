<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <!--link rel="stylesheet" href="{base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.css')}"-->
        <!-- Optional theme -->
        <link rel="stylesheet" href="{base_url('/assets/css/style.css')}">
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
    {block name=header}{/block}
</head>
<body>


    <header id="topbar" role="banner">
        <div class="container clearfix">

            <a id="logo" href="/" title="{$g.sitename}" alt="{$g.sitename}" role="logo">
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
                    {if $smarty.session.user|default: false}
                        <a rel="nofollow" href="{site_url('/page/profile/')}/{$smarty.session.user.id}">{$smarty.session.user.username}</a> 
                        <a rel="nofollow" href="{site_url('/auth/logout')}">退出</a> 
                    {else}
                        <a rel="nofollow" href="{site_url('/page/login')}">登录</a> /
                        <a rel="nofollow" href="{site_url('/page/register')}">注册</a>
                    {/if}
                </div>

            </nav>

        </div>
    </header>

    <div id="container"  class="container full-content-wrapper">
    {block name=content}{/block}
    {include file="layouts/footer.tpl"}
</div>
</body>
</html>
