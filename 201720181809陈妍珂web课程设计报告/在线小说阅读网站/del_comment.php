<?php
require "connect.php";
$id = $_GET['id'];
echo "被删除的id号时".$id;
$sql="DELETE FROM comment_info WHERE id='$id'";
// 记得exec执行啊！每次注释了都忘
$pdo->exec($sql);
header("Location:comment_info.php");
?>