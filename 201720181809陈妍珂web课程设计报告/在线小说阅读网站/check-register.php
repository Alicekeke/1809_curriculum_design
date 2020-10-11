<?php
header('Content-type:text/html;charset=utf-8');
session_start();
 require('connect.php');
var_dump($_POST);
$username = strtolower($_POST['username']);
// $name = strtolower($_POST['name']);
$sex = $_POST['sex'];
$password = md5($_POST['password']);
// $self_intr = $_POST['self_intr'];
$tele = $_POST['tele'];
// $resume = $_POST['resume'];
$sf = $_SESSION['sf'];
var_dump($sf);
switch ($sf) {
    case 1:
            $self_intr = $_POST['self_intr'];
        $sql = "insert into user_info(username,name,sex,password,self_intr,tele)
                values('$username','$username','$sex','$password','$self_intr','$tele')";
        break;
    case 2:
        $resume = $_POST['resume'];
        $sql = "insert into author_info(username,name,password,sex,resume,tele)
                values('$username','$username','$password','$sex','$resume','$tele')";
        break;
 }
 echo $sql;
 $pdo->exec($sql);
 echo '注册成功';
 echo "<script> alert('注册成功，请重新登录');</script>";
//  9-15 如何实现提示信息后白屏几秒后跳转到登录页       
 header("Refresh:0.00001;url=login.html");
// header("location:login.html");
?>