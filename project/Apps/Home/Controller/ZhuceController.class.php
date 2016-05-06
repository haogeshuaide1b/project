<?php
namespace Home\Controller;
use Think\Controller;
class ZhuceController extends Controller {
    public function index(){
    	$this->display(); 	
    }
       //执行插入
    public function insert(){
    	//创建表对象
    	$user = M('user');
        
        $_POST['password']=md5($_POST['password']);
    	$user->create();
    	//执行添加
    	$res = $user->add();
    	if($res){
    		//添加成功
    		$this->success('添加成功',U('Home/Index/index'));
    	}else{
    		//失败
    		$this->error('添加失败',U('Home/Zhuce/index'));
    	}
    }
    public function yonghu(){
        $user=M('user');
        $user->create();
        $p['username']=$_GET['username'];
        $res=$user->where($p)->select();
        if(!$res){
            echo 0;
        }else{
            echo 1;
        }
    }
  
}