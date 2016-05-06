<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    //微博显示
	$message=M('message');
	$messages=$message->select();
	// $messages['time']=date('Y-m-d H:i:s',$messages['time']);
	// var_dump($messages);die;
	$this->assign('messages',$messages);
	//var_dump($messages);
	//显示评论


    $this->display();
    }
    //写入评论
    public function pinglunadd(){
    	$_POST['time']=time();
    	//var_dump($POST);
    	$pinglun=M('comments');
    	$pinglun->create();
    	$res=$pinglun->add();
    	//echo $pinglun->_sql();
    	if($res){
    		echo 0;
    	}else{
    		echo 1;
    	}
    }
    //评论显示
    

}