<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function index(){
 		// $message=M('message');
 		// $messages=$message->select();
 		// var_dump($messages);die;
 		// $this->assign('messages',$messages);
   //  	//解析模板
   //  	$this->display();
    }
    //用户的添加
    public function add(){
        $time=time();
        $_POST['username']=$_SESSION['username'];
        $_POST['userid']=$_SESSION['id'];
        $_POST['time']=$time;
        $user=M('message');
        var_dump($_POST);
        die;
        $user->create();
        $res=$user->add();
        if($res){
    		//添加成功
    		$this->success('添加成功',U('Home/Index/index'));
    	}else{
    		//失败
    		$this->error('添加失败',U('Home/Index/index'));
    	}

    }

}