<html>
<html>
<head>
<style>
body{
background:#CCDDBB;
}
</style>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<center>
<?php
           
             header("content-type:text/html;charset=utf-8");
            $conn=mysqli_connect("localhost","root","","jiaowu");  
            $sqlselect="select * from date";
            $result=mysqli_query($conn,$sqlselect);  
            echo "<h1>实验时间表</h1>";
            echo "<hr>";
            echo "<table width='500px' border='1px'>";
            //从结果中拿出一行
            echo "<tr>";
            echo "<th>姓名</th><th>课程</th><th>实验</th><th>时间</th>";
            echo "</tr>";
            $a=0;
            while($row=mysqli_fetch_array($result)){
                  echo "<tr>";
                //打印出$row这一行
                 $a=$a+1;
                echo "<td>{$row['name']}</td><td>{$row['course']}</td><td>{$row['project']}</td><td>{$row['date']}</td>";
                 
                echo "</tr>";
                 }
            echo "</table>";
 
            //释放连接资源
            mysqli_close($conn);  
?>
<input type="button" name="chaxu" value="查看留言板" onclick="window.location.href='d.php'">
<input type="button" name="chaxu" value="返回登录" onclick="window.location.href='1.html'">
</center>
</body>
</html>