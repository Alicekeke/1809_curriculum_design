<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/book@res.css">
    <?php
    // ***********报错Notice: Undefined variable: _SESSION要开启session 
       session_start(); 
       require('../connect.php');
       $novel_id=$_SESSION['novel_id'];
       //更据novel_id查找该书的所有信息
       $sql = "select * from novel_info where id='$novel_id'";
       $rs = $pdo->query($sql);
       $result = $rs->fetch(PDO::FETCH_ASSOC);
       // *****************************
       $author_name = $result['author_name'];
       $novel_name = $result['novel_name'];
       $intro = $result['intro'];
       $content = $result['content'];
       $column = $result['column'];
       ?>
</head>
<body>
    <div class="parent">
    <div class="main">
        <h2>
            <?=$novel_name?>
        </h2>
        <h3 class="btn_change">
            <a href="#">上一次更新</a> 
            <a href="javascript:history.back(-1)">返回书本简介</a>
            <a href="#">下一次更新</a>
        </h3>
        <div class="contents">
        <?=$content?>            
        </div>
    </div>
    </div>
</body>
</html>