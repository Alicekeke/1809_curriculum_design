<?php
header('Content-type:text/html;charset=utf-8');
//开启session
session_start();
//引入连接数据库代码
require('connect.php');
//获取页面_POST传过来的值
$username = strtolower($_POST['username']);
$password = $_POST['password'];
$sf = $_POST['sf'];
switch ($sf) {
    case 1:
        $sql = "select*from user_info where username='$username'";
        break;
    case 2:
        $sql = "select*from author_info where username='$username'";
        break;
    case 3:
        $sql = "select*from admin_info where username='$username'";
        break;
}
$rs = $pdo->query($sql);
$result = $rs->fetch(PDO::FETCH_ASSOC);
var_dump($result);
if ($result) {
    if (md5($password) == $result['password']) {
        echo '登录成功' . '<br>';
        setcookie('username', $username, time() + 24 * 3600 * 7);
        // 将用户名，身份，id值，名字存入session
        $_SESSION['username']=$result['username'];
        $_SESSION['sf']=$sf;
        $_SESSION['id']=$result['id'];
        $_SESSION['name']=$result['name'];
        switch ($sf) {
            case 1:
                header("location:index.php");//读者
                break;
            case 2:
                header("location:index.php");//作者
                break;
            case 3:
                header("location:index.php");//管理员
                break;
        }
        }
        else {
            echo "<script> alert('请输入正确的用户名和密码！');</script>";
            exit;
        }
    // 记得password MD5 统一32位
} else {
    echo "<script>alert('用户名不存在！');history.back();</script>";
    exit;
}
?>