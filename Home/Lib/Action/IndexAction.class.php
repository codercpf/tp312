<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action
{
    public function index()
    {
//        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>', 'utf-8');

//        echo "Hello World!";

//        $m=new Model('User');           //通过New Model操作数据库

        $m=M('User');       //M()方法等效于 new Model()方法

        // // // // // //选择数据
//        $arr=$m->select();

//        $arr=$m->find(1);   //find($id)方法获取单条数据

//        $arr=$m->where('id=1')->getField('username');

//        var_dump($arr);


        // // // // // //增加数据           ---------- 返回值新增的Id号
//        $m->username='李四';
//        $m->sex=1;
//        $m->add();
//          $countadd=$m->add();

        // // // // // //删除数据           ---------- 返回值为受影响行数
//  //         $m->delete(3);
//        $m->where('id=2')->delete();

        // // // // // //更新数据           ------------ 返回值是受影响的行数
         $data['id']=1;
         $data['username']='Lili';
         $count = $m->save($data);                   //save()函数要传入一个修改过的参数。
         echo $count;

//        $name='常鹏飞';

//        $this->assign('data',$arr[0]['username']);

//        $this->assign('data',$arr);

        $this->display();
    }

    public function showself()
    {
//        echo "欢迎你".$_GET['name']." 你的年龄".$_GET['age'];

        $this->display();
    }
}