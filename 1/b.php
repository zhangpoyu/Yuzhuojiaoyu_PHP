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
    echo"<script>location='b.html'</script>";
    }
    if(strlen($name)>10){
    echo "<script>alert('用户名长度不能大于10');</script>";
    echo"<script>location='b.html'</script>";
    }
    if(strlen($pwd)<6){
    echo "<script>alert('密码长度不能小于6');</script>";
    echo"<script>location='b.html'</script>";
    }
    if(strlen($pwd)>10){
    echo "<script>alert('密码长度不能大于10');</script>";
    echo"<script>location='b.html'</script>";
    }
    
    
    //密码判断
    if(preg_match("/^\d*$/",$pwd))
   {
    echo "<script>alert('密码必须包含字母,强度:弱');</script>";
    echo"<script>location='b.html'</script>";
   }
    if(preg_match("/^[a-z]*$/i",$pwd))
   {
    echo "<script>alert('密码必须包含数字,强度:中');</script>";
    echo"<script>location='b.html'</script>";

   }
    if(!preg_match("/^[a-z\d]*$/i",$pwd))
    {
    echo "<script>alert('密码只能包含数字和字母,强度:强');</script>";
    echo"<script>location='b.html'</script>";
   }


    
    if($pwd!=$repwd){
        echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
        echo"<script>location='b.html'</script>";
   }else{
            $conn=@mysqli_connect("localhost","root","",'jiaowu');
            $sqlinsert="insert into teacher(username,password) values('{$name}','{$pwd}')";
            $sqlselect="select * from guanli";
            mysqli_query($conn,$sqlinsert);          
            $insertid="select * from guanli where username='{$name}'";
            $result=mysqli_query($conn,$insertid);//获取数据集  
            $row=mysqli_fetch_array($result);
            echo "欢迎:".$_POST['username']."老师注册成功<br>";
            echo "你的密码是:".$_POST['password']."<br>";
         }
?>
<a href="a.html">返回登录</a>
</body>
<html>











