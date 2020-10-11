<!DOCTYPE html>
<html lang="en">
<?php
 session_start();
 $_SESSION['sf']=2;
?>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="container1">
        
        <form action="check-register.php" name="f1" method="post" class="frmregister">
            <h2>
                作者用户注册
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
                <input type="text" name="tele" id="email">
            </p>
            <p>
                <label for="resume" class="label_self_intr">个人介绍</label>
                <textarea name="resume" cols="17" rows="12" id="intro"></textarea>
            </p>
            <p>
            <input type="button" value="注册" class="b_register" onclick='check()'>
            </p>
        </form>
    </div>
    <script type="text/javascript">
        function check(){
            // 前端验证
            var uname,pwd,sex,tele,resume;
            uname=f1.username.value;
            pwd=f1.password.value;
            sex=f1.sex.value;
            tele=f1.tele.value;
            resume=f1.resume.value;
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
            if (resume.length==0) {
                alert("个人介绍不能为空！");
                return false;
            }
            f1.submit();
        }
    </script>
</body>

</html>