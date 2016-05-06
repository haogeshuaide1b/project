<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	$this->display(); 	
    }
    //验证用户
  	public function insert(){
  		$_POST;
  		$user=M('user');
  		//创建数据
    	$user->create();
    	//执行添加
    	$p['username']=$_POST['username'];
    	$p['password']=md5($_POST['password']);
    	$res = $user->where($p)->find();

    	if (!empty($res)) {
        session_start();
        // var_dump($res);
        $_SESSION['id']=$res['id'];
        $_SESSION['username']=$res['username'];
        // var_dump($_SESSION);
        // die;
    		$this->success('登录成功',U('Home/Index/index'));
    	}else{
    		$this->success('登录失败',U('Home/Login/index'));
    	}
  	}
    public function out(){
        session_start();
        //获取SESSION的名称
        //echo session_name();
        //1.使客户端COOKIE过去 ，让SESSIONID失效
        setcookie(session_name(),null,time()-1,'/');
        //2.清楚当前页面的SESSION数组中的值
        $_SESSION='';
        //3.摧毁服务器的SESSIO文件
        session_destroy();//文件会被时时删除。
        //var_dump($_SESSION);
        if($_SESSION==''){
        $this->success('退出成功',U('Home/Login/index'));
        }
    }
}