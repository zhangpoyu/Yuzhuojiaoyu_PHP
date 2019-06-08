<?php
$name=$_POST['username'];
$pwd=$_POST['password'];
if(empty($_POST['username'])){
    echo "<script>alert('用户名不能为空！');</script>";
    echo"<script>location='2.html'</script>";
    }
 if(empty($_POST['password'])){
    echo "<script>alert('密码不能为空！');</script>";
    echo"<script>location='2.html'</script>";
    }
    
else{
            $conn=@mysqli_connect("localhost","root","",'2宇卓教育管理系统');
            $sqlselect="select * from 学生 where 姓名='{$name}' ";
           //mysqli_query($conn,$sqlinsert);          
            $result=mysqli_query($conn,$sqlselect);//获取数据集  
            $row=mysqli_fetch_array($result);
            $repassword=$row['密码'];
            if($pwd!=$repassword){
             echo  "<script>alert('密码错误！');</script>";
             echo  "<script>location='2.html'</script>";
            }
            }
            
?>
<html>
<head>
<style type="text/css">
body{
   background:#CCCCCC;
}
	a{
		float:right;
		margin-right:100px;
		text-decoration:none;
	}
	
</style>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<div id="h1" align="center">
<img name="image"src="logo1.jpg" width=150 height=150>
<a href="http://jwzx.hrbust.edu.cn/homepage/index.do">教务在线</a>
<h1 align="center"></h1>
</div>

<div>
<form name="land" method="post" action="3.php">
欢迎：<h4 name="id"><?php echo $_POST['username']; ?></h4>
<font size="15px" face="宋体" color="#0099FF">假期重点学习科目:</font>
                <p>
            <span style="padding-top:15px;">
         
              <input type="checkbox" name="rol[]" value="数学" id="rol_1">
            数学</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value=" 英语" id="rol_2">
             英语</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value=" 物理" id="rol_3">
          物理</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value="化学" id="rol_4">
           化学</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value="政治" id="rol_5">
             政治</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value="地理" id="rol_6">
             地理</span>
                    <br>
                </p>
 <input name="name" type="submit" value="确认">
 <input name="reset" type="reset" value="重选">
</form>
</div>


</body>
</html>
