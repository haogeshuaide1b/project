<?php
namespace Admin\Controller;
use Think\Controller;
class RelationController extends CommonController {
    public function index(){
    	//创建对象
    	$relation = M('relation');
         //获取关键字
        if(!empty($_GET['keyword'])){
            //建议使用数组形式来创建where条件
            // $where['username'] = array('like','%'.$_GET['keyword'].'%');
            $where = "username like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }
        //var_dump($relation);
        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 5;
    	//统计总数
    	$count = $relation->where($where)->count();
    	// 实例化分页类
    	$Page = new \Think\Page($count,$num);
    	$limit = $Page->firstRow.','.$Page->listRows;
    	// 分页显示输出
    	$pages = $Page->show();
        //var_dump($pages);
    	// var_dump($pages);
        //$relations = $relation->table('relation, user')->where('relation.userid = user.id '.$where)->
        //field('relation.id as id,relation.userid as userid, user.username as username,relation.userbyid as userbyid, user.username as userbyname')->select();
    	// 查询
    	$relations = $relation->limit($limit)->where($where)->select();
        //查看sql语句
        //echo $relation->_sql();
        //var_dump($relations);

    	//分配变量
        $this->assign('num',$num);
    	$this->assign('relation',$relations);
    	$this->assign('pages',$pages);

    	//解析模板
    	$this->display();

    	
    }
    // //执行删除
    // public function delete(){
    //     // var_dump(I('get.id'));
    //     //获取id
    //     $id = I('get.id');
    //     //创建对象模型
    //     // $user = M('user');
    //     $m = new \Think\Model();//
    //     //开启事物
    //     $m->startTrans();
    //     //创建对象 执行删除
    //     $one = $m->table('user')->delete($id);
    //     // echo $m->_sql();
    //     // echo '<br>';
    //     $two = $m->table('userinfo')->where(array('uid'=>$id))->delete();
    //     // echo $m->_sql();
      
    //     //判断 并给ajax返回数据
    //     if($one && $two){
    //        echo 0;
    //         $m->commit();
    //     }else{
    //        echo 1;
    //         $m->rollback();
    //     }
    // }

}