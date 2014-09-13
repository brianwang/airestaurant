{extends file='layouts\main.tpl'}
{block name=content}
    <div class="logreg-box">
        <div class="logreg-form">
            <form id="login_form" name="login" method="post" action="{site_url('/auth/register')}" novalidate="novalidate">
                <div>{$error|default:''}</div>
                <div class="relative">
                    <label for="login_username"><span class="required-mark">*</span>用户名/Email</label>
                    <input type="text" id="email" class="logreg-input" name="email">
                </div>

                <div class="relative">
                    <label for="login_password"><span class="required-mark">*</span>密码</label>
                    <input type="password" id="password" class="logreg-input" name="password">
                </div>
                <div class="relative">
                    <label for="login_password"><span class="required-mark">*</span>确认密码</label>
                    <input type="password" id="confirmpassword" class="logreg-input" name="confirmpassword">
                </div>
                <div>
                    <button id="login_btn" class="btn btn-yellow logreg-btn" type="submit" data-loading="注册中…"> 注册</button>
                </div>
            </form>
        </div>
    </div>
{/block}