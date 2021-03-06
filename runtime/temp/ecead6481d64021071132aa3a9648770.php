<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"F:\site\nouya_rs\public/../nyinside/index\view\index\index.html";i:1534493279;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <!--link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"-->
    <title>Vali Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>诺亚业务管理</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="<?php echo url('Index/login'); ?>" method="post" id="login">
        <input type="hidden" id="passpt" value="<?php echo url('logindo'); ?>" />
        <input type="hidden" id="jamppt" value="<?php echo url('Index/index'); ?>" />
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>登录</h3>
          <div class="form-group">
            <label class="control-label">帐号</label>
            <input class="form-control" type="text" placeholder="Email" name="mail" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">密码</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">记住登录</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a data-toggle="flip">忘记密码 ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>登录</button>
          </div>
        </form>

        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>

      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/login.js"></script>
</html>