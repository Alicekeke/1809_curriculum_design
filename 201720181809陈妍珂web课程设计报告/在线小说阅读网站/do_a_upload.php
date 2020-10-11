<?php
// 解决乱码
    header('Content-type:text/html;charset=utf-8');
    // var_dump($_POST);
    // exit;
    require('inc/check_login.php');
    require('connect.php');
    // $title=$_POST['title'];
    // $column=$_POST['column'];
    $content=trim( $_POST['content']);
    
    var_dump($content);

    //************************** */
    // 重开一本书需要的
    // $intro=$_POST['intro'];
    // $author_name=$_POST['author_name'];
    // $novel_no=$_POST['novel_no'];
    //$id=$_POST['id'];
    //**************************** */
    $id=$_SESSION['id'];
    $name=$_SESSION['name'];
    // $novel_id=$_SESSION['novel_id'];
    //用session根据小说人的姓名找到对应的书
    $sql= "select * from novel_info where author_name='$name'";
    $rs = $pdo->query($sql);
    $result = $rs->fetch(PDO::FETCH_ASSOC);

    $contentAll= $result['content'].$content;
    $sql1="update novel_info set content = '$contentAll' where author_name='$name'";
    echo $sql1;
     $pdo->exec($sql1);

     echo "<script>alert('发布成功!');history.back();</script>"


    // $sql = "update novel_info set content = concat(content,$content) where author_name='$name'";
    // update novel_info set content = concat(content,000) where author_name='大陈';
    // update 表名 set 字段名 = concat(字段名,"要增加的数据") where 条件值  
    // 新增，insert into 或者update？
    // $sql="INSERT INTO `novel_info`(`novel_name`, `author_name`, `content`, `column`)
    // VALUES ('$title','$name','$content',$column)";

    // echo $sql;
    // $pdo->exec($sql);
    // echo"上传成功";
?>