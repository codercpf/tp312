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

}