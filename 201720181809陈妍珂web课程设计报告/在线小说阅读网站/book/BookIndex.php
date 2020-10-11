<?php
require("../inc/check_login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>文件包含-网站实例</title>
    <link rel="stylesheet" href="../css/book.css">
</head>

<body>
    <header>
        <div class="container">
            <!-- 头部搜索框 -->
            <?php include('BaseHeader.php') ?>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <p>
                <!-- 左边内容区域 -->
                <?php include('BookTagContent.php') ?>
            </p>
        </div>

        <aside>
            <!-- 右边标签列表 -->
            <?php include('BookTag.php') ?>
        </aside>

    </div>
    <!-- <footer>
        <p>版权所有@2019</p>
    </footer> -->
</body>

</html>