<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台留言管理系统</title>
    <link rel="stylesheet" href="css/site.css">
</head>
<style type="text/css">
td {text-align: center;}
</style>
<?php
        session_start();
        require('connect.php');
        $sql = 'select * from comment_info';
        $rs = $pdo->query($sql);
        // fechAll和fech不一样 fechAll返回数据库中所有结果
        $result = $rs->fetchAll(PDO::FETCH_ASSOC);
 ?>
<body>
<header>
        <div class="container">
           <?php include('inc/header.php') ?> 
        </div>
    </header>
    <div class="container">
        <aside>
            <?php include('inc/nav.php') ?>
        </aside>
    <div class="wrapper">
        <table width="750px" border="0" class="comment_table">
            <tr>
                <th>评论ID</th>
                <th>评论内容</th>
                <th>评论时间</th>
                <!-- <th>被评论的小说id</th> -->
                <th>评论的书名</th>
                <th>评论人的id</th>
                <th>评论人的姓名</th>
            </tr>
            <?php
            foreach ( $result as $key => $value) { 
            ?>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['content']?></td> 
                <td><?=$value['comment_date']?></td>
                <td><?=$value['novel_name']?></td>
                <td><?=$value['c_peo']?></td>
                <td><?=$value['cpeo_name']?></td>                
            <?php 
            }
            ?> 
            
        </table>
    </div>
    </div>
</body>
</html>