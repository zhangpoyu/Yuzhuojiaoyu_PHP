<html>
<head>
<style type="text/css">
body{
min-width:1000px;
min-height:1000px;
width:100%;
overflow:hidden;
background-color:rgb(25, 172, 91) ; 
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
    $name=$_POST['cai'];
    $user=$_POST['user'];
    $conn=@mysqli_connect("localhost","root","",'jiaowu');
    mysqli_query($conn,$sqlinsert); 
    if(is_int($name)){
        $sqlselect="select * from xuanke where course='$name' and user='$user'";
        $result=mysqli_query($conn,$sqlselect);//获取数据集  
        $row=mysqli_fetch_array($result);
        if($row==null)
        {
            echo"<script>alert('你没有选过这门课');</script>";
            echo"<script>location='guanlixiugai.html'</script>";    
        }
        else
        {
            $sqldelete="delete from xuanke where course='$name' and user='$user'";
            echo"<script>alert('删除成功！');</script>";
        }
    }
    else
    {
        $sqlselect="select * from shiyan where sno='$name' and teacher='$user'";
        $result=mysqli_query($conn,$sqlselect);//获取数据集  
        $row=mysqli_fetch_array($result);
        if($row==null)
        {
            echo"<script>alert('你没有选过这间教室');</script>";
            echo"<script>location='guanlixiugai.html'</script>";    
        }
        else
        {
            $sqldelete="update set state=0 and date=null and course=null and teacher char(10)) xuanke where course='$name' and user='$user'";
            echo"<script>alert('删除成功！');</script>";
        }
    }
?>
<a href="guanli.html">返回管理员界面</a>
</body>
<html>











