<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
        <?php
       
        require('../connect.php');
        // $id = $_SESSION['id'];
        $keywords=$_POST['keywords'];
        $sql = "select * from novel_info where novel_name='$keywords'";
        // 模糊查询
        // $sql = "select * from novel_info where novel_name like '%{$keywords}%'";
        $rs = $pdo->query($sql);
        $result = $rs->fetch(PDO::FETCH_ASSOC);
        // *****************************
        $b_id=$result['id'];
        $author_name = $result['author_name'];
        $novel_name = $result['novel_name'];
        $intro = $result['intro'];
        $content = $result['content'];
        $column = $result['column'];
        var_dump($b_id);
        // header("location:'book@res.php?b_id'+$b_id)直接跳转不知道为啥不管用啊。。。只能用最傻的办法了。。。
        $url = "http://localhost/ks/book/book@res.php?b_id=$b_id";
        header("location:$url");
        ?>
<body>
    
</body>
</html>