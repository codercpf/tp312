<?php
return array(
	//'配置项'=>'配置值'
    'URL_PATHINFO_DEPR' => '/',          //修改URL的分隔符

    'TMPL_L_DELIM'  =>  '<{',           //修改左定界符
    'TMPL_R_DELIM'  =>  '}>',            //修改右定界符

    'DB_TYPE'       =>  'mysql',
    'DB_HOST'       =>  'localhost',
    'DB_NAME'       =>  'thinkphp',
    'DB_USER'       =>  'root',
    'DB_PWD'        =>  'root',
    'DB_PORT'       =>  '3306',

    'DB_PREFIX'     =>  'tp_',

    //使用DSN方式配置数据库信息，同时存在的话，DSN优先级高
//    'DB_DSN'        =>  'mysql://root:root@localhost:3306/thinkphp',

//    'SHOW_PAGE_TRACE'   => 1,

//    'TMPL_TEMPLATE_SUFFIX'  =>  '.tpl'      //更改模板文件后缀名

//    'TMPL_FILE_DEPR'    => '_'      //修改模板文件目录层次

/*
    'DEFAULT_THEME'     =>  'your',     //修改模板主题

    'TMPL_DETECT_THEME' =>  true,        //自动检车模板主题
    'THEME_LIST'        =>  'my,your'
    */          //在url中增加 ?t=my,?t=your 修改显示主题

    'TMPL_PARSE_STRING'     => array(
        '__CSS__'   =>   __ROOT__.'/Public/css',
        '__JS__'    =>   __ROOT__.'/Public/js',
)
);
