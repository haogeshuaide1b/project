<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommonController {
    public function index(){
        //创建对象
        $user = M('message');
        // var_dump($_GET);
        //获取关键字
        if(!empty($_GET['keyword'])){
            //建议使用数组形式来创建where条件
            // $where['username'] = array('like','%'.$_GET['keyword'].'%');
            $where = "username like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }

        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 5;
        
        //统计总数
        $count = $user->where($where)->count();
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询
        $users = $user->limit($limit)->where($where)->select();
        //查看sql语句
        // echo $user->_sql();

        //分配变量
        $this->assign('num',$num);
        $this->assign('users',$users);
        $this->assign('pages',$pages);

        //解析模板
        $this->display();

        
    }
    //显示详情
//     public function edit(){
//     //创建对象
//     $user = M('message');
//     //获取id
//     $id = I('get.id');
//     //读取数据
//     $info = $user->where('user.id = '.$id)->find();
//     // echo $user->_sql();
//     //分配变量
//     $this->assign('info',$info);
//     $this->assign('hobby',$hobby);
//     //解析模板
//     $this->display();
// }
    //执行删除
    public function delete(){
        // var_dump(I('get.id'));
        //获取id
        $id = I('get.id');
        $message=M('message');
        $res= $message->delete($id);
        //echo $message->_sql();
         if($res){
           echo 0;
        }else{
           echo 1;
        }
    }
}