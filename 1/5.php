<html>
<head>
<style>
body{
text-align:center;
background:#8FBC8F;
}
a{
text-decoration:none;
<title></title>
</style>
</head>

<body>
<?php
if($_POST){
if(empty($_POST['username'])){
    echo "<script>alert('姓名不能为空！');</script>";
    echo"<script>location='4.php'</script>";
    }
if(empty($_POST['course'])){
    echo "<script>alert('课程不能为空！');</script>";
    echo"<script>location='4.php'</script>";
    }
if(empty($_POST['name'])){
    echo "<script>alert('实验名称不能为空！');</script>";
    echo"<script>location='4.php'</script>";
    }
else {
$name=$_POST['username'];
$course=$_POST['course'];
$project=$_POST['name'];
$s=$_POST['YYYY']."年".$_POST['MM']."月".$_POST['DD']."日";
echo "<br>";
            $conn=@mysqli_connect("localhost","root","",'jiaowu');
            $sqlinsert="insert into date(name,course,project,date) values('{$name}','{$course}','{$project}','{$s}')";
            $sqlselect="select * from date";
            mysqli_query($conn,$sqlinsert);          
            $insertid="select * from date where date='{$s}'";
            $result=mysqli_query($conn,$insertid);//获取数据集  
            $row=mysqli_fetch_array($result);
            echo "你预约的时间是:".$row['date']."请牢记!<br>";
}
}
?>
<a href="message/index.html">留下足迹</a>
</body>
</html>
















