<?php
  require('../connect.php');
  session_start();
  $id=$_SESSION['b_id'];
  // $id=$_GET{'id'};
  $flag=$_GET['flag'];
  echo $id.".................".$flag;
  if($flag==1){
       $sql="update novel_info set vote_count = vote_count+1 where id='$id'";
      //  echo $sql;
        }
  //flag不要设零，js默认为零
  if($flag==2)
        {
      $sql ="update novel_info set vote_count = vote_count-1 where id='$id'";
      // echo $sql;
    }
  $pdo->exec($sql);
  // 执行完后跳转回原页面刷新
echo "<script>alert('点赞成功!');history.back();</script>"
    //携带书本id号所以不能直接重定向
  // header("Location:book@res.php?id="+$id);

  // ajax测试
//   echo json_encode($data);
//   file_put_contents('1.txt',$sql);


?>