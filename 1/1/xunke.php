<!DOCTYPE html>
<html>
<meta charset=utf-8>
  <head>
    <title>学生选课详情</title>     
 </head>
 <style type="text/css">			
    td{
        font:normal 25px/30px Arial;
        padding:2px;
        width:180px;
        }	
    
    th{	
        font:bold 25px/30px Arial;
        text-align:left;
        padding:4px;
        border-bottom:1px solid #333;
    }
    .button{
               background-color:rgb(25, 172, 91) ;
               border:none;
               color:rgb(36, 29, 29);
               padding:15px 32px;
               text-align:center;
               text-decoration:none;
               display:inline-block;
               font-size:16px;
               border-radius:12px;
               box-shadow: 0 8px 16px 0 rgb(15, 15, 15);
           }
 </style>   
 <body background-color:#E6E6FA>
  <table boder="1" border-collapse="collapse">
      <caption><h1>学生选课详情</h1></caption>
      <thead>
        <tr>
          <th>课程</th>
          <th>日期</th>
          <th>教室</th>
          <th>任课教师</th>
          <th>学生</th>
        </tr>
      </thead>
      <?php
        $conn=@mysqli_connect("localhost","root","",'jiaowu');
        $sqlselect="select course,date,user from xuanke";
        //mysqli_query($conn,$sqlinsert);          
        $result=mysqli_query($conn,$sqlselect);//获取数据集  
        while($row=mysqli_fetch_array($result))
        {
            ?>
            <td><?php echo $row['course']?></td>
            <td><?php echo $row['date']?></td>
            <td><?php echo $row['addr']?></td>
            <td><?php echo $row['teacher']?></td>
            <td><?php echo $row['user']?></td>
        </tr><?php
        }
        ?>
 </table><br><br>
 <input type="button" class="button" value="返回" onclick="window.location.href='guanli.html'">
</body>
</html>
