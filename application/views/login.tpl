{extends file='layouts\main.tpl'}
{block name=content}
    <div class="logreg-box">
        <div class="logreg-form"><form id="login_form" name="login" method="post" action="{site_url('/auth/login')}" novalidate="novalidate">
                <div class="relative">
                    <label for="login_username"><span class="required-mark">*</span>用户名/Email</label>
                    <input type="text" id="login_username" class="logreg-input" name="username">
                </div>

                <div class="relative">
                    <label for="login_password"><span class="required-mark">*</span>密码</label>
                    <input type="password" id="login_password" class="logreg-input" name="password">
                </div>

                <div class="captcha">
                    <img src="{site_url('/auth/phrase')}">
                    <label for="login_phrase"><span class="required-mark">*</span>验证码</label>
                    <input type="text" id="login_phrase" class="logreg-input" name="phrase">
                </div>

                <div class="clearfix">
                    <label class="logreg-checkbox">
                        <input type="checkbox" name="signin[remember]" defaultvalue="on" checked="true">
                        记住我
                    </label>
                    <a href="/forget-password">忘记密码？</a>

                </div>
                <div>
                    <button id="login_btn" class="btn btn-yellow logreg-btn" type="submit" data-loading="登录中…"> 登录</button>
                </div>
                <div class="logreg-oauth">
                    其他方式：
                    <a class="logreg-olink" href="/weibo/auth"><img id="wb_login_image" src="https://static.ele.me/images/forward/sina.gif" title="微博连接" alt="" border="0"></a>
                    <a class="logreg-olink" href="/renren/auth"><img id="xn_login_image" src="https://static.ele.me/images/forward/renren.gif" title="人人连接" alt="" border="0"></a>
                </div>

            </form>
        </div>
    </div>
{/block}