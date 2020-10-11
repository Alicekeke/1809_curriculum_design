<?php
    session_start();
    require('../connect.php');
    $cpeo_name=$_SESSION['name'];
    $content=$_POST['content'];
    $comment_date=$_SESSION['comment_date'];
    $novel_id=$_SESSION['novel_id'];
    $novel_name=$_SESSION['novel_name'];
    $c_peo=$_SESSION['id'];
    // var_dump($content,$novel_id,$comment_date,$c_peo);

    $sql="INSERT INTO `comment_info`(`content`,`comment_date`, `novel_id`,`novel_name`, `c_peo`,`cpeo_name`)
    VALUES ('$content','$comment_date','$novel_id','$novel_name','$c_peo','$cpeo_name')";
    $pdo->exec($sql);
    //加一个判断 和前端验证
    //ajax解决留在页面且数据刷新
        echo "<script> alert('评论成功~');history.back();</script>";
?>