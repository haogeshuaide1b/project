<?php
namespace Admin\Controller;
use Think\Controller;
class AuthController extends CommonController {
    //用户权限显示
    public function index(){
        //创建对象
        $user = M('user');
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
        //var_dump($users);die;
        $auth=M('think_auth_group');
        $type=$auth->select();
        //var_dump($type);die;
        //分配变量
        $this->assign('type',$type);
        $this->assign('num',$num);
        $this->assign('users',$users);
        $this->assign('pages',$pages);

        //解析模板
        $this->display();       
    }
    //权限添加
    public function add(){
        // var_dump(expression)
        // echo '权限的添加';

        //解析模板
        $this->display();
    }
    // 权限添加
    public function insert(){
        //var_dump($_GET);die;
        //创建表对象
        $auth = M('think_auth_rule');
        $res = $auth->create();
      
        $auth->add();
       
        if($res){
            //添加成功
            $this->success('添加成功',U('Admin/Auth/add'));
        }else{
            //失败
            $this->error('添加失败',U('Admin/Auth/add'));
        }
    }
    // 组权限添加
    public function typeadd(){
        $auth = M('think_auth_rule');
        $auths=$auth->select();
        $this->assign('auths',$auths);
        //解析模板
        $this->display();
    }
    // 组权限添加
    public function typeinsert(){
        if(!empty($_POST['rules'])){
            $_POST['rules'] = implode(',', $_POST['rules']);
        }
        //var_dump($_POST);die;
        //创建表对象
        $auth = M('think_auth_group');
        $res = $auth->create();
      
        $auth->add();
       
        if($res){
            //添加成功
            $this->success('添加成功',U('Admin/Auth/typeadd'));
        }else{
            //失败
            $this->error('添加失败',U('Admin/Auth/typeadd'));
        }
    }
    //组权限显示
    public function typeindex(){
        //创建对象
        $user = M('think_auth_group');
        // var_dump($_GET);
        //获取关键字
        if(!empty($_GET['keyword'])){
            //建议使用数组形式来创建where条件
            // $where['username'] = array('like','%'.$_GET['keyword'].'%');
            $where = "title like '%".$_GET['keyword']."%'";
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
        $types = $user->limit($limit)->where($where)->select();
        //查看sql语句
        // echo $user->_sql();
        //var_dump($types);die;
        //分配变量
        $this->assign('types',$types);
        $this->assign('num',$num);
        $this->assign('pages',$pages);

        //解析模板
        $this->display();
     
    }
    //权限修改页面
    public function edit(){
        $id = I('get.id');
        $username = I('get.username');
        // var_dump($id);die;
        $auth=M('think_auth_group_access');
        $p['uid']=$id;
        $res=$auth->where($p)->find();
        // echo $auth->_sql();
        $res['username']=$username;
        //var_dump($res);
        $type=M('think_auth_group');
        $res1=$type->where('status=1')->select();
        //var_dump($res1);

        $this->assign('username',$res);
        $this->assign('types',$res1);
        //解析模板
        $this->display();
    }
    //每个人权限的修改
    public function update(){

        $id = $_POST['id'];
      
        $_POST['group_id']=$_POST['type'];
        //var_dump($_POST);
        $user=M('user');
        //创建数据
        $user->create();
        //执行更新
        $res = $user->save();
        $auth=M('think_auth_group_access');
        //创建数据
        $auth->create();
        $p['uid']=$_POST['id'];
        //执行更新
        $res1 = $auth->where($p)->save();
      
       if($res || $res1){
            //添加成功
            $this->success('修改成功',U('Admin/Auth/index'));
        }else{
            //失败
            $this->error('修改失败',U('Admin/Auth/index'));
        }

    }
    public function typedelete(){
        //var_dump($_GET);
        $id=$_GET['id'];
        $auth=M('think_auth_group');
        $res=$auth->delete($id);
        if($res){
           echo 0;
        }else{
           echo 1;
        }
    }

}