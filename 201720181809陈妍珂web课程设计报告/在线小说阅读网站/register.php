<!DOCTYPE html>
<html lang="en">
<?php
 session_start();
 $_SESSION['sf']=1;
?>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="container1">

        <form action="check-register.php" name="f1" method="post" class="frmregister">
            <h2 class="title">
                读者用户注册
            </h2>
            <p>
                <label for="username" class="label_title">用户名</label>
                <input type="text" name="username" id="username" class="text">
            </p>
            <p>
                <label for="password" class="label_title">密码</label>
                <input type="password" name="password" id="password" class="text">
            </p>
            <p>
                <label>
                    <input type="radio" name="sex" id="sex" value="男" checked class="radio">男
                </label>
                <label>
                    <input type="radio" name="sex" id="sex" value="女" class="radio">女
                </label>
            </p>
            <p>
                <label for="tele" class="tele">电话</label>
                <input type="text" name="tele">
            </p>
            <p>
                <label for="self_intr" class="label_self_intr">个人介绍</label>
                <textarea name="self_intr" cols="17" rows="12"></textarea>
            </p>
            <p>
                <!-- 前端验证使用input并将type改为botton,不能使用默认button，才能强制验证 -->
                <!-- <button type="botton" value="注册" onclick="check()"></button> -->
                <input type="button" value="注册" class="b_register" onclick='check()'>
            </p>
        </form>
    </div>
    <script type="text/javascript">
        function check(){
            // 前端验证
            console.log("ok");
            var uname,pwd;
            uname=f1.username.value;
            pwd=f1.password.value;
            sex=f1.sex.value;
            tele=f1.tele.value;
            intr=f1.self_intr.value;
            console.log(uname,pwd);
            if (uname.length==0) {
                alert("用户名不能为空！");
                return false;
            }
            if (pwd.length==0) {
                alert("密码不能为空！");
                return false;
            }
            if (sex.length==0) {
                alert("性别不能为空！");
                return false;
            }
            if (tele.length==0) {
                alert("联系电话不能为空！");
                return false;
            }
            if (intr.length==0) {
                alert("个人介绍不能为空！");
                return false;
            }
            f1.submit();
        }
    </script>
</body>

</html>