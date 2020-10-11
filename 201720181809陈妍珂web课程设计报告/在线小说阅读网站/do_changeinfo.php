<?php
session_start();
require "connect.php";
// var_dump($_POST);
$id = $_SESSION['id'];
// $password=md5($_POST['password']);
$password=$_POST['password'];

var_dump($id,$password);
$sql="update author_info set password = '$password' WHERE id='$id'";
echo $sql;
// 记得exec执行啊！每次注释了都忘
$pdo->exec($sql);
// header("Location:index.php");
echo "<script>alert('修改成功!');history.back();</script>";
header("Refresh:1;url=index.php");
?>