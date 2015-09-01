<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/31
 * Time: 20:47
 */

class LoginAction extends Action{
    public function index(){
        $this->display();
    }

    public function do_login(){
        //获取用户名和密码等，和数据库中比对
//        dump($_SESSION);
        $username=$_POST['username'];
        $password=$_POST['password'];
        $code=$_POST['code'];
        if($_SESSION['verify'] !== md5($code))
        {
            $this->error('验证码错误！');
        }
        $m=M('User');

        $where['username']=$username;
        $where['password']=$password;

        $i=$m->where($where)->count();
        if($i>0){
            $this->redirect('User/index');
        }else{
            $this->error('用户名或密码错误！');
        }
    }
}