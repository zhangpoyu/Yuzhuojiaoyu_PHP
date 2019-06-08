<?php
$sno=$_POST['sno'];
$name=$_POST['sname'];
$sex=$_POST['sex'];
$sdept=$_POST['sdept'];
$snian=$_POST['nian'];
$sclass=$_POST['class'];
$conn=@mysqli_connect("localhost","root","",'jiaowu');
mysql_query("set names 'utf8'");
$sqlupdate="update from table Student set Sname='$name',Ssex='$sex',Sdept='$sdept',Sjianji='$snian',Sclass='$sclass'
where sno='$sno'";
$kk=mysql_query($sqlupdate,$conn);
if($kk)
{
    echo  "<script>alert('修改成功！');</script>";
    echo  "<script>location='guanlixuesheng.html'</script>";
}
else{
    echo  "<script>alert('修改失败！');</script>";
    echo  "<script>location='guanlixuesheng.html'</script>";
}
?>