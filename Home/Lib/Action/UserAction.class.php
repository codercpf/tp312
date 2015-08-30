<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/28
 * Time: 22:28
 */

class UserAction extends Action
{
    public function index(){
//        echo "你好！";

        $m=M('User');
        $arr=$m->select();
//        var_dump($arr);

        $this->assign('data', $arr);
        $this->display();
    }

    public function del(){
        $m=M('User');
        $id=$_GET['id'];
        $count=$m->delete($id);
        if($count>0){
            $this->success('数据删除成功！');
        }else{
            $this->error('数据删除失败.');
        }
    }

    public function modify(){
        $id=$_GET['id'];
        $m=M('User');
        $arr=$m->find($id);
        $this->assign('data', $arr);

        $this->display();           //显示修改页面
    }

    public function update(){
        $m=M('User');
        $data['id']=$_POST['id'];
        $data['username']=$_POST['username'];
        $data['sex']=$_POST['sex'];
        $count=$m->save($data);
        if($count>0){
            $this->success('数据修改成功！','index');
        }else{
            $this->error('数据修改失败.');
        }
    }

    public function add(){              //添加页面
        $this->display();
    }

    public function create(){
        $m=M('User');
        $m->username=$_POST['username'];
        $m->sex=$_POST['sex'];
        $idNum=$m->add();
        if($idNum>0){
//            $this->error('数据添加成功！');
            $this->success('数据添加成功！','index');
        }else{
            $this->error('数据添加失败');
        }
    }

    public function search(){
//        var_dump($_POST);
//        获取post数据，根据数据组装查询条件，
//        根据条件从数据库中获取数据，返回给页面遍历。

        $m=M('User');

        if(isset($_POST['username']) && $_POST['username']!=null){
            $condition['username'] = array('like', "%{$_POST['username']}%");
        }
        if(isset($_POST['sex']) && $_POST['sex']!=null){
            $condition['sex']=array('eq',$_POST['sex']);
        }

        $arr=$m->where($condition)->select();
        $this->assign(data,$arr);
        $this->display('index');
        //调用User模块下的index.html模板，无参数默认调用search.html模板
    }

    public function demo(){
        $m=M('User');
//        $arr=$m->order('id')->select();
//        $arr=$m->order('id','desc')->limit(3,3)->field('username as Name, id')->select();

//        $arr=$m->field(array('username as Name','id'))->limit(3,5)->select();

        $arr=$m->field('id',true)->limit(3,5)->select();  // 获取除了ID之外的字段
        dump($arr);
        $this->show('abc');
    }

}