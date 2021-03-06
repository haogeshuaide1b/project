<?php if (!defined('THINK_PATH')) exit(); session_start(); ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>首页</title>
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
    <!-- 页脚 -->
    <link rel="stylesheet" href="/project/Public/css/footer.css">

    <!-- Custom Fonts -->
    <link href="/project/Public/Home/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- 文本框 -->
    <script type="text/javascript" charset="utf-8" src="/project/Public/Home/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/project/Public/Home/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/project/Public/Home/ueditor/lang/zh-cn/zh-cn.js"></script>
    <style type="text/css">
    *{text-decoration: none;}
    #btn{width:455px;}
    .log{
      margin-left: 50px;
      margin-top: -5px;
    }
    #daohang :hover{
        background-color:#ddd; 
    }
    #daohang a{
      color: #836953;
    }
    .line {
      margin-bottom: -8px;
      width:143px;
     /* border: 1px solid red;*/
      text-align: center;
      margin-left: 4px;

    }
    .line a{
      color: #808080;
      text-decoration: none;
    }
    .line a:hover{
      color:#F27370;
    }
    .cate li{
      line-height: 30px;
      margin-left: 8px;
    }
    .cate a{
      color: #808080; ;
      text-decoration: none;
    }
    .cate a:hover{
      color:#F27370;
    }
    </style>

  </head>
  <body background="/project/Public/images/body_bg.jpg">

  <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button> -->
    <a class="navbar-brand" href="#"><img class="log" src="/project/Public/images/WB_logo.png" alt=""></a>
  </div>
  <form class="navbar-form navbar-left" role="search">
      <!-- <div class="form-group">
        <input type="text" id="btn" class="form-control" placeholder="搜索">
      </div> -->
      <div class="input-group">
      <input type="text" class="form-control" id="btn"  placeholder="Search for...">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button">GO!</button>
        </span>
       </div>
      <!-- <button type="submit" class="btn btn-default" >搜索</button> -->
  </form>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <div class="col-md-1"></div>
    <ul class="nav navbar-nav">
      <li><a href="#" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 首页</a></li>
      <li><a href="#" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 发现</a></li>
      <li><a href="#" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 用户名</a></li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope " aria-hidden="true"></span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">@我的</a></li>
          <li><a href="#">评论</a></li>
          <li><a href="#">赞</a></li>
          <li class="divider"></li>
          <li><a href="#">私信</a></li>
          <li class="divider"></li>
          <li><a href="#">消息设置</a></li>
        </ul>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">账号设置</a></li>
          <li><a href="#">个人中心</a></li>
          <li><a href="#">账号安全</a></li>
          <li><a href="#">隐私设置</a></li>
          <li><a href="#">消息设置</a></li>
          <li><a href="#">帮助中心</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo U('Home/Login/out');?>">退出</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">个人中心 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">修改头像</a></li>
          <li><a href="#">密码修改</a></li>
          <li><a href="#">邮箱验证</a></li>
          <li class="divider"></li>
          <li><a href="#">手机号码</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </nav>
  <br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
    <!-- 左边导航条 -->
      <div style="width:1000px;margin-left:62px;background-color: rgba(255, 255,255, 0.2);float:left;">
        <div style="width:160px;float:left;">
          <ul class="nav nav-pills nav-stacked"  >
            <li style="margin-top:10px;" id="daohang" role="presentation"><a href="#"><b>首页</b></a></li>
            <li id="daohang" role="presentation"><a href="#"><b>消息</b></a></li>
            <li id="daohang" role="presentation"><a href="#"><b>收藏</b></a></li>
            <li id="daohang" role="presentation"><a href="#"><b>赞</b></a></li>
            <!-- <li id="daohang" class="divider"></li> -->
            <li id="daohang" role="presentation"><a href="#">好友圈</a></li>
            <li id="daohang" role="presentation"><a href="#">群微博</a></li>
            <li id="daohang" role="presentation"><a href="#">特别关注</a></li>
            <li id="daohang" role="presentation"><a href="#">搞笑幽默</a></li>
            <li id="daohang" role="presentation"><a href="#">视屏电影</a></li>
            <li id="daohang" role="presentation"><a href="#">职场招聘</a></li>
            <li id="daohang" role="presentation"><a href="#">情感生活</a></li>
          </ul>
        </div>
        <!-- 中间内容列 -->
        <div style="width:600px;float:left;">
        <form action="<?php echo U('Home/Message/add');?>" method="post">
          <div style="width:600px;height:auto;border-radius:3%;float:left;background:#fff;margin-top:11px;">
            <div style="margin-left:8px;color:#9A9D87;font-size:18px;font-family:微软雅黑;">有什么想告诉大家?</div>
            <script id="editor" name="content" type="text/plain" style="width:600px;height:160px;"></script>
            <button style="margin-top:10px;margin-left:500px;width:80px;" class="btn btn-warning">发布</button>
          </div>
          
        </form>
          <div style="width:600px;height:30px;border-radius:3%;float:left;background:#fff;margin-top:11px;">
            <ul class="list-inline cate ">
              <li><a href=""><b>全部</b></a></li>
              <li><a href="">原创</a></li>
              <li><a href="">图片</a></li>
              <li><a href="">视屏</a></li>
              <li><a href="">音乐</a></li>
              <li><a href="">文章</a></li>
              <li><a href="">其他</a></li>
            </ul>
          </div>
          <!-- 微博内容 -->
          <?php if(is_array($messages)): foreach($messages as $key=>$vo): ?><div style="width:600px;border-radius:3%;float:left;background:#fff;margin-top:11px;">
            <div class="row">
              <div class="col-md-2"><img style="width:60px;height:60px;border-radius:50%;margin:15px;" src="/project/Public/images/default_avatar_male_180.gif" width="100%" alt=""></div>
              <div class="col-md-4" style="margin-left:-20px;">
                <div style="margin-top:20px;font-size:16px;"><b><?php echo ($vo["username"]); ?></b></div>
                <div style="font-size:12px;"><?php echo date('Y-m-d H:i:s',$vo['time']);?></div>
                <div ><?php echo ($vo["content"]); ?></div>
              </div>
            </div>
           <div style="width:600px;border-color:#ccc;border-top-width:1px;border-top-style:solid;">
            <ul class="list-inline">
              <li class="line"><a href=""><h5><span class="glyphicon glyphicon-star-empty"></span>收藏<?php echo ($vo["collectnum"]); ?></h5></a></li>
              <li class="line"><a href=""><h5><span class="glyphicon glyphicon-random"></span> 转发<?php echo ($vo["transpondnum"]); ?></h5></a></li>
              <li  class="line">
                <h5><span class="glyphicon glyphicon-edit"></span>
                  <a class="comments"  role="button" data-toggle="collapse" href="#<?php echo $vo['id'];?>" aria-expanded="false" aria-controls="collapseExample">
                  评论<?php echo ($vo["commentnum"]); ?>
                  </a>
                </h5>
              </li>
              <li class="line"><a href=""><h5><span class="glyphicon glyphicon-thumbs-up"></span>赞<?php echo ($vo["agreenum"]); ?></h5></a></li>
            </ul>
            <div class="collapse" id="<?php echo $vo['id'];?>">
              <div class="well">
              <!-- 写评论 -->
              <div class="row">
                <div class="col-md-1">
                  <img style="float:left;" src="/project/Public/images/default_avatar_male_180.gif" width="30px" alt="">
                </div>
                <div style="border-color:#ccc;border-bottom-width:1px;border-bottom-style:solid;"  class="col-md-11">
                
                  <div><input  type="text" style="" class="form-control a<?php echo $vo['id'];?>" ></div>
                  <div>
                    <button class="btn btn-warning pinglun" style="width:55px;margin-left:450px;margin-top:5px;margin-bottom:5px;" >评论</button>
                    <input type="hidden" value="a<?php echo $vo['id'];?>">
                    <input type="hidden" value="<?php echo $_SESSION['uid'];?>">
                    <input type="hidden" value="<?php echo $vo['id'];?>">
                  </div>
                </div>
              </div>
                
                <div>
                  评论显示
                  微博的id<?php echo ($vo["id"]); ?>
                </div>
              </div>
            </div>
           </div>
          </div>
          <div style="width:600px;border-radius:3%;float:left;background:#fff;margin-top:3px;display:none;">
            评论内容<br><br><br>
          </div><?php endforeach; endif; ?>
        </div>
        <!-- 右边杂项 -->
        <div style="width:220px;float:left;">
          <div style="width:220px;height:165px;border-radius:3%;float:left;background:#fff;margin-top:11px;margin-left:10px;">
            <div style="width:220px;height:70px;float:left;">
              <img src="/project/Public/images/profile_cover_s.jpg" width="100%" alt="">
            </div>
            <!-- 头像 -->
            <div style="width:60px;height:60px;border-radius:50%;margin-left:78px;margin-top:-30px;float:left;">
              <img style="border-radius:50%;" src="/project/Public/images/default_avatar_male_180.gif" width="100%" alt="">
            </div>
            <div style="width:100px;float:left;margin-left:60px;text-align:center;font-size:16px;"><b>用户名</b></div>
            <div style="width:180px;text-align:center;float:left;margin-top:-6px;margin-left:18px;">
              <table border="0">
                <tr>
                  <td width="80px" height="25px" style="font-size:16px;"><b>10</b></td>
                  <td width="80px" height="25px" style="font-size:16px;"><b>10</b></td>
                  <td width="80px" height="25px" style="font-size:16px;"><b>10</b></td>
                </tr>
                <tr>
                  <td>关注</td>
                  <td>粉丝</td>
                  <td>微博</td>
                </tr>
              </table>
            </div>
          </div>
          <div style="width:220px;height:200px;border-radius:3%;float:left;background:#fff;margin-top:11px;margin-left:10px;">
            44
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
    <!-- //页脚 -->
    <div id="plc_bot"><!--footer-->
      <div class="WB_footer">
        <div class="footer_link">
          <dl class="list">
            <dt>微博精彩</dt>
            <dd><a class="col1" target="_blank" href="">热门微博</a><a class="col1 S_txt2" target="_blank" href="">热门话题</a></dd>
            <dd><a class="col1" target="_blank" href="">名人堂</a><a class="col1 S_txt2" target="_blank" href="">微博会员</a></dd>
            <dd><a class="col1" target="_blank" href="">微相册</a><a class="col1 S_txt2" target="_blank" href="">微游戏</a></dd>
            <dd><a class="col1" target="_blank" href="">微指数</a></dd>
          </dl>
          <dl class="list">
            <dt>手机玩微博</dt>
            <dd><span class="col2">
                    <img src="./images/footer_code.jpg" alt="二维码"></span>
                <a class="T_txt" href="">扫码下载，更多版本<br>戳这里</a>
            </dd>
          </dl>
          <dl class="list">
            <dt>认证&amp;合作</dt>
            <dd>
              <a class="col3" target="_blank" href="">申请认证</a>
              <a class="col3" target="_blank" href="">开放平台</a>
            </dd>
            <dd>
              <a class="col3" target="_blank" href="">企业微博</a>
              <a class="col3" target="_blank" href="">链接网站</a>
            </dd>
            <dd>
              <a class="col3" target="_blank" href="">微博标识</a>
              <a class="col3" target="_blank" href="">广告服务</a>
            </dd>
            <dd>
              <a class="col3" target="_blank" href="">微博商学院</a>
            </dd>
          </dl>
          <dl class="list">
            <dt>微博帮助</dt>
            <dd><a class="col4" target="_blank" href="">常见问题</a></dd>
            <dd><a class="col4" target="_blank" href="">自助服务</a></dd>
          </dl>
        </div>
        <div class="other_link">
            <p class="copy">
              <a target="_blank" href="" class="S_txt2"><i class="icon_weibo"></i>微博客服</a>
              <a class="S_txt2" target="_blank" href="">意见反馈</a>
              <a class="S_txt2" target="_blank" href="">舞弊举报</a>
              <a class="S_txt2" target="_blank" href="">开放平台</a>
              <a class="S_txt2" target="_blank" href="">微博招聘</a>
              <a class="S_txt2" target="_blank" href="">新浪网导航</a>
              <a class="S_txt2" target="_blank" href="">举报处理大厅</a>
                 <select class="lang_select" node-type="changeLanguage">
                        <option value="zh-cn" selected="">中文(简体)</option>
                        <option value="zh-tw">中文(台灣)</option>
                        <option value="zh-hk">中文(香港)</option>
                        <option value="en">English</option>
                 </select>
            </p>
            <p class="T_server_v2">服务热线：4000 960 960（个人/企业）服务时间9:00-21:00  4000 980 980（广告主）服务时间9:00-18:00 （按当地市话标准计算）</p>
            <p class="copy_v2">
              <a class="S_txt2" target="_blank" href="">京ICP证100780号</a>
              <a class="S_txt2" href="" target="__blank">互联网药品服务许可证</a>
              <a class="S_txt2" href="" target="__blank">互联网医疗保健许可证</a>
              <a class="S_txt2" href="" target="__blank">京网文[2014]2046-296号</a>
                <a class="S_txt2" href="" target="__blank">京ICP备12002058号</a>
                <a class="S_txt2" href="" target="__blank">增值电信业务经营许可证B2-20140447</a>
            </p>
            <p class="company">
                    <span class="copy">Copyright © 2009-2016 WEIBO 北京微梦创科网络技术有限公司</span>
                    <span>
                      <a class="S_txt2" target="_blank" href=""><i class="icon_netsecurity"></i>京公网安备11000002000019号</a>
                            </span>
            </p>
        </div>
      </div>
      <div class="W_fold">
            <a href="""><em>b</em></a>
            </div>
            <a class="W_gotop" href=""" style="visibility: hidden; transform: translateZ(0px);">
            <em class="">Ú</em></a>
<!--/footer-->
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
    <script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    //评论点击弹出框
    $('.pinglun').click(function(){
      var input = $(this).next().val();
      //alert(input);
      var content=$('.'+input).val();
      var userid=$(this).next().next().val();
      var messageid=$(this).next().next().next().val();
      $.ajax({
          url:'pinglunadd',
          data:{content:content,userid:userid,messageid:messageid},
          type:'post',
          // 同步
          async:false,
          success:function(data){
            //如果用户名可用
            if(data == 0){
              alert('评论成功');
            }else{
              alert('评论失败');
            }
          }
    })
      
    })

    </script>
  </body>
</html>