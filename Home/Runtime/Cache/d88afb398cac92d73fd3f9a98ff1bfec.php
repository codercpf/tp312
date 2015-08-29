<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modify</title>
    <script>
        window.onload= function () {
//            alert("<?php echo ($data["sex"]); ?>");
            if (<?php echo ($data["sex"]); ?>==0){
                document.getElementsByName('sex')[1].checked=true;
            }else{
                document.getElementsByName('sex')[0].checked=true;
            }

        }
    </script>
</head>
<body>
<form method="post" action="/tp312/index.php/User/update">
    <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
    姓名：<input type="text" name="username" value="<?php echo ($data["username"]); ?>"/><br/>
    性别：男<input type="radio" name="sex" value="1">
        女<input type="radio" name="sex" value="0"><br/>
    <input type="submit" value="提交"/>
</form>
</body>
</html>