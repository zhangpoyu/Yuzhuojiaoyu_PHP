<?php
$sno=$_POST['xuehao'];
$conn=@mysqli_connect("localhost","root","",'jiaowu');
$sqldelete="delete  from Student where sno='$sno'";
$kk=mysqli_query($conn,$sqldelete);
if($kk)
{
    echo  "删除成功！";
    //echo  "<script>location='delete.html'</script>";
}
else{
    echo  "删除失败！";
    //echo  "<script>location='guanlixuesheng.html'</script>";
}
?>
<input type="button" value="返回" class="button" onclick="window.location.href='add.html'">