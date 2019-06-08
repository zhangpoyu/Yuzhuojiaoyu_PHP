<?php
session_start();
$sno=$_POST['sno'];
$name=$_POST['sname'];
$sex=$_POST['sex'];
$sdept=$_POST['sdept'];
$snian=$_POST['nian'];
$sclass=$_POST['class'];
$conn=@mysqli_connect("localhost","root","",'jiaowu');
$sqlinsert="insert into student(Sno,Sname,Ssex,Sdept,Sjianji,Sclass) values('{$sno}','{$name}','{$sex}','${sdept}','{$snian}','{$sclass}')";
$kk=mysqli_query($conn,$sqlinsert);
if($kk)
{
    echo  "添加成功";
    
}
else{
    echo  "<script>alert('添加失败！');</script>";
    echo  "<script>location='add.html'</script>";
}
?>
  <input type="button" value="返回" class="button" onclick="window.location.href='add.html'">