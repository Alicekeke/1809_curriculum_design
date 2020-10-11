<?php
require("inc/check_login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>书本首页</title>
    <link rel="stylesheet" href="css/site.css">
</head>

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
        <div class="content">
            <p>
                这里是你的主页，用来展示你的生活和发现，也是别人认识你的地方
            </p>
            <p>
                <img src="images/1.jpg" alt="" width="300">
            </p>
        </div>

    </div>
    <footer>
        <p>版权所有@2019</p>
    </footer>
</body>

</html>