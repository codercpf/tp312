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


/*        $data['id']=1;
         $data['username']='Lili';
         $count = $m->save($data);                   //save()函数要传入一个修改过的参数。
         echo $count;*/


//        $name='常鹏飞';

//        $this->assign('data',$arr[0]['username']);

//        $this->assign('data',$arr);

//        $this->display('./Public/error.html','utf8', 'text/html');

        /*
        $content=$this->fetch('New:new');
        dump($content);
        $content=str_replace('h1','i',$content);
        $this->show($content);
        */

//        $this->assign('name', '常鹏飞');
        $this->name='常鹏飞2';
        $this->display();

    }

    public function showself()
    {
//        echo "欢迎你".$_GET['name']." 你的年龄".$_GET['age'];

        $m=M('User');
//        $m->select();

//        echo $m->where('id=2')->getField('username');

        // 字符串查询
        /*$arr=$m->where("sex=0 and username='张宝慧'")->find();*/


        //数组查询
//        $data['sex']=0;
//        $data['username']='张宝慧';
//        $data['_logic']='or';
//        $arr=$m->where($data)->find();

        //表达式查询
        /*$data['id']=array('neq',4);          //id大于4的所有查询
        $arr=$m->where($data)->select();*/

        //模糊查询-----------notlike 中间没有空格

        /*
        //单条件查询
        $data['username']=array('like','%张%');
        //多条件查询——OR
        $data['username']=array('like',array('%张%','%常%'));
        //多条件查询——AND
        $data['username']=array('like',array('%张%','%常%'),'and');
        */

        /*
         //区间查询--------------not between中间有空格
//        $data['id']=array('between', array(4,6));
        $data['id']=array('not between', array(4,6));
        */

        /*
        //In查询  --------------not in中间有空格
        $data['id']=array('not in',array(1,3,5));
        */


        //区间查询
//        $data['id']=array(array('gt',5),array('lt',7));     //默认AND方式
//        $data['id']=array(array('gt',5),array('lt',3),'or');    // Or方式

//        $data['username']=array(array('like','%张%'),array('like','%慧%'),'常飞', array('like','%于%'),'or');  //复杂例子
/*
        $arr=$m->where($data)->select();
        var_dump($arr);*/


        //统计查询
        /*
        $data['username']='常飞';
        $a=$m->where($data)->count();
        $c=$m->where("username like '%张%'")->count();
        echo $a."<br/>".$c;*/

        /*
        $c=$m->sum('id');       //count、max、min、avg、sum各个统计操作
        echo $c;
        */


        //SQL直接查询
                // Query方式用于读取数据，成功放回数据结果集，失败返回boolean false
                $result=$m->query("select * from tp_user where id>3");
                var_dump($result);

        // Execute用于更新和插入数据    成功放回影响行数，失败返回boolean false，字段名称不加单引号。
//        $result2=$m->execute("INSERT INTO `tp_user` (username,sex) VALUES ('cpf5',1)");
        var_dump($result2);


        $this->display();
    }
}