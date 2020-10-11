<?php
    // session_start();
    require('connect.php');
?>
<div class="box nav">
    <h2>导航</h2>
    <ul class="nav">
        <?php
        // var_dump($_SESSION['sf']);
        switch ($_SESSION['sf']) {
            case 1://读者
                echo '<li><a href="change_info.php">修改密码</a></li>';
                echo '<li><a href="book/BookIndex.php">读书大厅</a></li>';
                echo '<li><a href="logout.php">注销</a></li>';
                break;
            case 2://作者
                echo '<li><a href="book/BookIndex.php">读书大厅</a></li>';
                echo '<li><a href="a_upload.php">写文章</a></li>';
                echo '<li><a href="author_comment.php">查看留言</a></li>';
                echo '<li><a href="logout.php">注销</a></li>';
                break;
            case 3://管理员
                echo '<li><a href="user_info.php">读者管理</a></li>';
                echo '<li><a href="author_info.php">作者管理</a></li>';
                echo '<li><a href="comment_info.php">评论管理</a></li>';
                echo '<li><a href="logout.php">注销</a></li>';
                break;
        }
        ?> 
    </ul>
</div>
