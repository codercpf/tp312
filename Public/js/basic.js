/**
 * Created by Administrator on 2015/8/30.
 */
//alert("我被调用了！");

function sub(){
    alert('你好');
    var uname = document.myform.username;
    var upass = document.myform.password;
    var oc = document.myform.code1;
    if(uname.value=='' || upass.value=='' || oc.value=='')
    {
        alert('用户名、密码、验证码都不能为空');
    }
    else
    {
        document.myform.submit();
    }
}