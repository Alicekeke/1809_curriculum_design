<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>读者信息管理系统</title>
    <link rel="stylesheet" href="css/site.css">
</head>
<style type="text/css">
td {text-align: center;}
</style>
<?php
        session_start();
        require('connect.php');
        $sql = 'select * from user_info';
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
                <th>用户ID</th>
                <th>用户名</th>
                <th>用户性别</th>
                <th>简介</th>
                <th>联系电话</th>
                <th>操作</th>
            </tr>
            <?php
            foreach ( $result as $key => $value) { 
            ?>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['name']?></td> 
                <td><?=$value['sex']?></td>
                <td><?=$value['self_intr']?></td>
                <td><?=$value['tele']?></td>
                <!-- <a href='javascript:del()'>删除</a> -->
               <?php echo "<td>
                <a href='javascript:del({$value['id']})'>删除</a> 
                </td>"
                ?>
            <?php 
            }
            ?> 
            
        </table>
    </div>
    </div>
    
    <script type="text/javascript">
        function del (id) {
            console.log(id);
            if (confirm("确定注销这个读者吗？")){
                location = "del_userinfo.php?id="+id;
            }
        }
    </script>
</body>
</html>