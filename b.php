<html>
<head>
<style>
body{
background:#BBDDEE;
font-family:"宋体";
font-size:30px;
text-align:center;
margin-top:100px;
}
h4{
color:#CF78CD;
margin-top:10px;
}
a{
text-decoration:none;
}
input{
background:#Y40C20;
font-size:30px;
border-radius:20px;
font-family:"宋体";
margin-top:-30px;
}
</style>
</head>
<body>
<?php
   if(empty($_POST['name'])){
    echo "<script>alert('请填写姓名！');</script>";
    echo"<script>location='a.html'</script>";
    }
    if(empty($_POST['course'])){
    echo "<script>alert('请填写补课科目！');</script>";
    echo"<script>location='a.html'</script>";
    }
    if(empty($_POST['money'])){
    echo "<script>alert('请缴费！');</script>";
    echo"<script>location='a.html'</script>";
    }
else{
           header("content-type:text/html;charset=utf-8");
           session_start();
           include("connect.php");
           $name=$_POST['name'];
           $course=$_POST['course'];
           $money=$_POST['money'];
           $sqlinsert="insert into 2初二(name,course,money)  values('{$name}','{$course}','{$money}')";
           $insert=mysqli_query($conn,$sqlinsert);          
           if($insert)
           {
              echo "<h4>$name 报名成功<h4>";     
           }
           else{
            echo "失败";        
            echo "<script>location='1.html'</script>";
          }
}
?>
<br>
<input type="button" name="button" onclick="location='1.html'" value="返回报名">
</body>
</html>


















