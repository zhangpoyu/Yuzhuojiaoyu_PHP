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
            $sqlselect="select * from message";
            $result=mysqli_query($conn,$sqlselect);  
            echo "<h1>留言板</h1>";
            echo "<hr>";
            echo "<table width='500px' border='1px'>";
            //从结果中拿出一行
            echo "<tr>";
            echo "<th>姓名</th><th>留言</th>";
            echo "</tr>";
            $a=0;
            while($row=mysqli_fetch_array($result)){
                  echo "<tr>";
                //打印出$row这一行
                 $a=$a+1;
                echo "<td>{$row['name']}</td><td>{$row['text']}</td>";
                 
                echo "</tr>";
                 }
            echo "</table>";
 
            //释放连接资源
            mysqli_close($conn);  
?>
<input type="button" name="chaxu" value="返回登录" onclick="window.location.href='1.html'">
</center>
</body>
</html>