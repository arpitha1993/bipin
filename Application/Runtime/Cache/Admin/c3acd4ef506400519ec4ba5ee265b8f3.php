<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>艾思电商后台管理系统</title>
    <script type="text/javascript" src="/bipin/static/a/resource/js/jquery.js"></script>
    <script type="text/javascript" src="/bipin/static/a/resource/js/common.js"></script>
    <script type="text/javascript" src="/bipin/static/a/resource/js/jquery.tscookie.js"></script>
    <script type="text/javascript" src="/bipin/static/a/resource/js/jquery.validation.min.js"></script>
    <link href="/bipin/static/a/default/css/login.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            background-color: #666666;
            background-image: url("");
            background-repeat: no-repeat;
            background-position: center top;
            background-attachment: fixed;
            background-clip: border-box;
            background-size: cover;
            background-origin: padding-box;
            width: 100%;
            padding: 0;
        }
    </style>
</head>
<body>

<div class="bg-dot"></div>
<div class="login-layout">
    <div class="top">
        <h5>艾思电商后台数据管理系统<em></em></h5>
        <h2><h2>平台管理中心</h2></h2>

    </div>
    <div class="box">
        <form method="post" id="form_login">
            <span>
                <label>账号</label>
                <input name="user_name" id="user_name" autocomplete="off" type="text" class="input-text" required>
            </span>
            <span>
                <label>密码</label>
                <input name="password" id="password" class="input-password" autocomplete="off" type="password" required pattern="[\S]{5}[\S]*"
                 title="密码不少于6个字符">
            </span>

            <span>
                <input name="" class="input-button" type="submit" value="登录">
            </span>
        </form>
    </div>
</div>
<div class="bottom">
</div>

<script type="text/javascript">
    $(document).ready(function(){
        //Random background image
        var random_bg=Math.floor(Math.random()*5+1);
        var bg='url(/bipin/static/a/default/images/login/bg_'+random_bg+'.jpg)';
        $("body").css("background-image",bg);
        //Hide Show verification code

        //跳出框架在主窗口登录
        if(top.location!=this.location)	top.location=this.location;
        $('#user_name').focus();
        if ($.browser.msie && $.browser.version=="6.0"){
            window.location.href='ie6update.html';
        }
        //$("#captcha").nc_placeholder();
    });
</script>
</body>
</html>