<?php
require("inc/check_login.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
require('connect.php');
$name = $_SESSION['name'];
$sql = "select*from novel_info where author_name='$name'";
$rs = $pdo->query($sql);
$result = $rs->fetch(PDO::FETCH_ASSOC);
// var_dump($result);
$_SESSION['novel_no'] = $result['novel_no'];
?>

<head>
    <meta charset="UTF-8">
    <title>文件包含-网站实例</title>
    <link rel="stylesheet" href="css/site.css">
    <!-- 链接 Simditor 的样式文件 -->
    <link rel="stylesheet" type="text/css" href="simditor/styles/simditor.css" />

    <!-- 引入 Simditor 所必须的 JavaScript 库 -->
    <script type="text/javascript" src="simditor/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="simditor/scripts/module.js"></script>
    <script type="text/javascript" src="simditor/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="simditor/scripts/uploader.js"></script>
    <script type="text/javascript" src="simditor/scripts/simditor.js"></script>
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
            <form action="do_a_upload.php" method="post">
                <p>
                    <input type="text" name="novel_name" placeholder="请输入连载的该章节名">
                </p>
                <!-- <p>
                    <select name="column" id="column">
                        <option value="'小说'" selected>小说</option>
                        <option value="'诗歌'" selected>诗歌</option>
                        <option value="'随笔'" selected>随笔</option>
                        <option value="'散文'" selected>散文</option>
                        <option value="'生活'" selected>生活</option>
                        <option value="'自传'" selected>自传</option>
                        <option value="'纪实'" selected>纪实</option>

                    </select>
                </p> -->
                <textarea id="editor" name="content" placeholder="请输入您要连载的内容" ></textarea>
            <!-- 使用 JavaScript 代码初始化富文本编辑器 -->
             <script type="text/javascript">
                $(function(){
                    toolbar = [ 'title', 'bold', 'italic', 'underline', 'strikethrough',
                        'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|',
                        'link', 'image', 'hr', '|', 'indent', 'outdent' ];
                    var editor = new Simditor( {
                        textarea : $('#editor'),
                        placeholder : '请输入内容...',
                        toolbar : toolbar,  //工具栏
                        defaultImage : 'simditor-2.0.1/images/image.png', //编辑器插入图片时使用的默认图片
                        upload : {
                            url : 'ImgUpload.action', //文件上传的接口地址
                            params: null, //键值对,指定文件上传接口的额外参数,上传的时候随文件一起提交
                            fileKey: 'fileDataFileName', //服务器端获取文件数据的参数名
                            connectionCount: 3,
                            leaveConfirm: '正在上传文件'
                        }
                    });
                //检验提交的内容是否为空值
                if (content.length==0) {
                alert("更新的内容不能为空！");
                return false;
            }
                })
            </script>

                <button type="submit">提交</button>

            </form>
        </div>
        
    </div>
    <footer>
        <p>版权所有@2019</p>
    </footer>
</body>

</html>