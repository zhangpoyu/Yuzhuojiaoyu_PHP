<html>
<head>
<style type="text/css">
body{
 min-width:1000px;
min-height:1000px;
width:100%;
overflow:hidden;
background:url(0.jpg) no-repeat; 
background-size:100%;
position:absolute;
 }
 a{
 text-decoration:none;
 color:#930000;
 }
 a:hover{
 color:red;
 font-size:30px;
 }
 </style>
</head>
<body>
<?php
    header("content-type:text/html;charset=utf-8");
    session_start();
    $name=$_POST['username'];
    $pwd=$_POST['password'];
    $repwd=$_POST['repassword'];
    if(strlen($name)<3){
    echo "<script>alert('用户名长度不能小于3');</script>";
    echo"<script>location='1.html'</script>";
    }
    if(strlen($name)>10){
    echo "<script>alert('用户名长度不能大于10');</script>";
    echo"<script>location='1.html'</script>";
    }
    if(strlen($pwd)<6){
    echo "<script>alert('密码长度不能小于6');</script>";
    echo"<script>location='1.html'</script>";
    }
    if(strlen($pwd)>10){
    echo "<script>alert('密码长度不能大于10');</script>";
    echo"<script>location='1.html'</script>";
    }
    
    
    //密码判断
    if(preg_match("/^\d*$/",$pwd))
   {
    echo "<script>alert('密码必须包含字母,强度:弱');</script>";
    echo"<script>location='1.html'</script>";
   }
    if(preg_match("/^[a-z]*$/i",$pwd))
   {
    echo "<script>alert('密码必须包含数字,强度:中');</script>";
    echo"<script>location='1.html'</script>";

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
            $conn=@mysqli_connect("localhost","root","",'2宇卓教育管理系统');
            $sqlinsert="insert into 学生 values('{$name}','{$pwd}')";
            $sqlselect="select * from guanli";
            mysqli_query($conn,$sqlinsert);          
            $insertid="select * from 学生 where 姓名='{$name}'";
            $result=mysqli_query($conn,$insertid);//获取数据集  
            $row=mysqli_fetch_array($result);
            echo "欢迎用户:".$row['姓名']."<br>";
            echo "你的密码是:".$row['密码']."<br>";
         }
?>
<a href="1.html">返回登录</a>
</body>
<html>











