<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>登录</title>
    <!-- Bootstrap -->
   <!-- Bootstrap Core CSS -->
    <link href="/project/Public/Home/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/project/Public/Home/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="/project/Public/Home/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/project/Public/Home/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/project/Public/Home/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/project/Public/Home/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style type="text/css">
    #input{width:255px;height:40px;   }
    </style>

  </head>
  <body background="/project/Public/images/background.jpg">
    <div class="container">
      <br>
      <div class="row" >
        <div class="col-md-1"></div>
        <div class="col-md-11"><img src="/project/Public/images/WB_logo_b.png" alt=""></div>
      </div>
      <br>
      <div class="row" >
        <div class="col-md-1"></div>
        <div class="col-md-7"><img src="/project/Public/images/dengluleft.png" width="103%" alt=""></div>
        <div class="col-md-3" style="border:1px solid black;height:325px;margin-left:4px;background-color: rgba(0, 0, 0, 0.5); " >
          <div style="color:#fff;;"><center><h3>账号登录</h3></center></div>

         <form class="form-inline" action="<?php echo U('Home/Login/insert');?>" method="post">
          <div class="form-group">
            <input type="text" name="username" class="form-control" id="input" placeholder="用户名/邮箱">
          </div>
          <br>
          <br>
          <div class="form-group">
            <input type="password" name="password" class="form-control" id="input"  placeholder="密码">
          </div>
          <div class="form-group">
            <div style="color:#fff;"><input type="checkbox">记住我<span style="margin-left:140px;"><a style="color:#fff;" href="">忘记密码</a></span></div>
            <br>
          </div>
          <br>
          <button style="width:255px;" class="btn btn-warning">登录</button>
          <br>
          <div><span style="color:#fff;">还没有微博??</span> <a style="color:#EB7350;" href="">立即注册</a></div>
          <hr>
          <div style="margin-top:-10px; color:#fff;">其他登录方式</div>
          <br>
         </form>
        </div>
      </div>
    </div>
    <script src="/project/Public/Home/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/project/Public/Home/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/project/Public/Home/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->

    <!-- Custom Theme JavaScript -->
    <script src="/project/Public/Home/dist/js/sb-admin-2.js"></script>
  </body>
</html>