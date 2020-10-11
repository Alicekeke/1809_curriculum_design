<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/book@res.css">
</head>
<?php
//引用conn.php文件
require('../connect.php');
// 设置中国时区
date_default_timezone_set('PRC');
//查询数据表中的数据
// $id = $_SESSION['id'];
// ************获取GET传过来的id值
session_start();
//********b_id为传来的书本id值*****/
$b = $_GET['b_id'];
// echo "传来的值是" . $b;
$sql = "select * from novel_info where id= '$b'";
$rs = $pdo->query($sql);
$result = $rs->fetch(PDO::FETCH_ASSOC);
//书的信息
$novel_id = $result['id'];
$author_name = $result['author_name'];
$novel_name = $result['novel_name'];
$intro = $result['intro'];
$content = $result['content'];
$column = $result['column'];
$vote_count = $result['vote_count'];
// ***************存在session下次用
// ***************$_SESSION['b_id']将书本id写入session
$_SESSION['b_id'] = $b;
$_SESSION['novel_id']=$novel_id;
$_SESSION['novel_name']=$novel_name;
$_SESSION['comment_date']= date("Y-m-d H:i:s");
?>
<body>
    <dl id="content">
        <dd>
            <h1><?= $novel_name ?></h1>
        </dd>
        <dd>
            <div class="bookimg">
                <img alt="" style="width:150px; height:230px; margin:0 25px 0 15px;" src="../images/book@<?= $b ?>.jpg">
            </div>
            <div class="info" style="width:650px;">
                <table cellspacing="1" cellpadding="0" class="table">
                    <tbody>
                        <tr>
                            <th>小说类别</th>
                            <!-- 好像直接$字段名没有用耶，必须用<#>的形式 -->
                            <td>&nbsp;<?= $column ?></td>
                        </tr>
                        <tr>
                            <th>小说作者</th>
                            <td>&nbsp;<?= $author_name ?></td>
                        </tr>
                        <tr>
                            <th>小说状态</th>
                            <td>&nbsp;连载中</td>
                        </tr>
                        <tr>
                            <th>收 藏 数</th>
                            <td>&nbsp;<?= $vote_count ?></td>
                        </tr>
                        <tr>
                            <th>最后更新</th>
                            <td>&nbsp;2019-09-15 20:22:29</td>
                        </tr>
                        <tr>
                            <th>推荐数</th>
                            <td>&nbsp;0</td>
                        </tr>
                    </tbody>
                </table>
                <p></p>
                <div class="btnlinks">
                    <img src="../images/bookIn@dis.png" style="width:40px; height:50px; padding:0px 50px;" title="加入书架" id="bookIn" onClick="bookIn()">
                    <img src="../images/like@dis.png" id="like" title="投票" onClick="like()">
                    <a href="book@Content.php" class="btn_look_now">我现在就要看</a>
                    <script text="text/javascript">
                      //创建对象
                      var xhr = new XMLHttpRequest();
                            //get请求
                            xhr.open('get','do_like.php?id=1');
                            xhr.send();
                                function bookIn() {
                                        var imgObj = document.getElementById("bookIn");
                                        if (imgObj.getAttribute("src", 2) == "../images/bookIn@dis.png") {
                                            imgObj.src = "../images/bookIn.png";
                                        } else {
                                            imgObj.src = "../images/bookIn@dis.png";
                                            console.log(zt);
                                        }
                                    }
                        function like() {
                            var imgObj = document.getElementById("like");
                            if (imgObj.getAttribute("src", 2) == "../images/like@dis.png") {
                                imgObj.src = "../images/like.png";
                                flag=1;//标记点赞的状态
                                location = "do_like.php?flag="+flag;
                            } else {
                                imgObj.src = "../images/like@dis.png";
                                $sql = "update novel_info set vote_count = vote_count-1 where id='$id'";
                                flag=2;
                                location = "do_like.php?flag="+flag;
                            }
                        }
                    </script>
                </div>
                 <!-- 9-16 10:30还在想评论框怎么右对齐。。。 -->
                 <div class="comment">
                        <form action="do_comment.php" method="post" >
                            <h4>请输入你的书评</h4>
                            <textarea class="text" name="content" cols="30" rows="10"> </textarea>
                            <p>
                                <button type="submit">发布</button>
                            </p>
                        </form>
                    </div>

            </div>
        </dd>
        <dd style="padding:10px 30px 0 25px;">
            <p class="intro">内容简介：</p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $intro ?><br> </p>
            <p style="height:10px;"></p>
            <p class="intro"><a href="#"> 最近章节：<p></a>&nbsp;&nbsp;&nbsp;&nbsp;<?= $content ?></p>
            </p>
            <p style="height:10px;"></p>
        </dd>
    </dl>
</body>

</html>