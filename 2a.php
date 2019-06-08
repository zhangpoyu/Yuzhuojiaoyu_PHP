<?php
           header("content-type:text/html;charset=utf-8");
           session_start();
           include("connect1.php");
           $name=$_POST['name'];
           $pwd=$_POST['password'];
           $repwd=$_POST['repassword'];
           if(strlen($name)<3){
    echo "<script>alert('用户名长度不能小于3');</script>";
    echo"<script>location='1a.html'</script>";
    }
    if(strlen($name)>10){
    echo "<script>alert('用户名长度不能大于10');</script>";
    echo"<script>location='1a.html'</script>";
    }
    if(strlen($pwd)<6){
    echo "<script>alert('密码长度不能小于6');</script>";
    echo"<script>location='1a.html'</script>";
    }
    if(strlen($pwd)>10){
    echo "<script>alert('密码长度不能大于10');</script>";
    echo"<script>location='1a.html'</script>";
    }
    
    
    //密码判断
    if(preg_match("/^\d*$/",$pwd))
   {
    echo "<script>alert('密码必须包含字母,强度:弱');</script>";
    echo"<script>location='1a.html'</script>";
   }
    if(preg_match("/^[a-z]*$/i",$pwd))
   {
    echo "<script>alert('密码必须包含数字,强度:中');</script>";
    echo"<script>location='1a.html'</script>";

   }
    if(!preg_match("/^[a-z\d]*$/i",$pwd))
    {
    echo "<script>alert('密码只能包含数字和字母,强度:强');</script>";
    echo"<script>location='1.html'</script>";
   }
    if($pwd!=$repwd){
        echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
        echo"<script>location='1.html'</script>";
   }else{
           $sqlinsert="insert into 学生 (姓名,密码)  values('{$name}','{$pwd}')";
           $insert=mysqli_query($conn,$sqlinsert);          
           if($insert)
           {
              echo "成功";
           }
           else echo "失败";
   }    
?>