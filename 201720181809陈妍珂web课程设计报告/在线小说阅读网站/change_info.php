<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件包含-网站实例</title>
    <link rel="stylesheet" href="css/site.css">
</head>
<body>
    <header>
        <div class="container">
           <?php include('inc/header.php') ?> 
        </div>
    </header>
    <div class="container">
        <aside>
            <?php include('inc/nav.php') ?>
        </aside>
        <div class="content">
        <h2>请修改你的密码</h2>
        <div class="container1">

<form action="do_changeinfo.php" name="f1" method="post" class="frmregister">
   
    <p>
        <label for="password" class="label_title">密码</label>
        <input type="password" name="password" id="password" class="text">
    </p>
    <p>
        <!-- 前端验证使用input并将type改为botton,不能使用默认button，才能强制验证 -->
        <!-- <button type="botton" value="注册" onclick="check()"></button> -->
        <input type="button" value="确认修改" class="b_register" onclick='check()'>
    </p>
</form>
</div>

<script type="text/javascript">
function check(){
    // 前端验证
    console.log("ok");
    var pwd;
    pwd=f1.password.value;
    console.log(pwd);
   
    if (pwd.length==0) {
        alert("密码不能为空！");
        return false;
    }
    f1.submit();
}
</script>
        </div>
    </div>
    <footer>
        <p>版权所有@2019</p>
    </footer>
</body>
</html>