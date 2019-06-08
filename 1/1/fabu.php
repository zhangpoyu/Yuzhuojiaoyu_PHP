<!DOCTYPE html>
<html>
 <meta charset=utf-8>
  <head>
    <title>实验室详情</title>     
 </head>
 <style type="text/css">			
    .div{
        color:brown;
        font-size:20px;
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
 <body>
 <form>
 <div class="div">
    <?php
    $s=$_POST["ss"];
    error_reporting(0);
    $fil=$fil=fopen('kk.txt',w);
    fwrite($fil,$s);
    fclose($fil);
    $fil=fopen('kk.txt',r);
    $kk=fread($fil,filesize('kk.txt'));
    echo $kk;
    fclose($fil);
    ?>     
</div><br><br>
<div>
    <?php
    if($_FILES["file"]["error"]>0)
    {
        echo "错误：".$_FILES["file"]["error"]."<br>";
    }
    else
    {
        echo "上传文件名：".$_FILES["file"]["name"]."<br>";
        echo "文件类型：".$_FILES["file"]["type"]."<br>";
        echo "文件大小：".$_FILES["file"]["size"]."<br>";
        echo "文件临时存储的位置：".$_FILES["file"]["tmp_name"];
    }
    ?>     
</div><br><br>
 <input type="button" class="button" value="返回" onclick="window.location.href='guanli.html'">     
</form>
</body>  
 </html>
