<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends CommonController {
	//生成验证码
	public function createVcode(){
		$Verify = new \Think\Verify();
		$Verify->entry();
	}
}