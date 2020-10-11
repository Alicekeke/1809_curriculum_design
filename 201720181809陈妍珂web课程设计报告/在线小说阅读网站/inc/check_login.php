<?php
header('Content-type:text/html;charset=utf-8');
//防跳墙，检测用户是否登录
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script> alert('请重新登录!');location.href='check.php'</script>";
    exit;
}
?>