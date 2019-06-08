
<style type="text/css">
table{ border:0;border-collapse:collapse;}					/*设置表格整体样式*/
td{font:normal 25px/30px Arial;padding:2px;width:180px;}	/*设置单元格的样式*/

th{	/*设置表头的样式*/
	font:bold 25px/30px Arial;
	text-align:left;
	padding:4px;
	border-bottom:1px solid #333;
}
.odd{background:#cef;}		/*设置奇数行样式*/
.even{background:#ffc;}		/*设置偶数行样式*/
.light{background:#00A1DA;}	/*设置鼠标移到行的样式*/
</style>
<script type="text/javascript" src="JS/jquery-1.6.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("tbody tr:even").addClass("odd");	//为偶数行添加样式
  $("tbody tr:odd").addClass("even");	//为奇数行添加样式
  $("tbody tr").hover(				  	//为表格主体每行绑定hover方法
	  function() {$(this).addClass("light");},
	  function() {$(this).removeClass("light");}
  );
});
</script>
<div class="div1">
<table>
  <thead>
    <tr>
      <th>课程名称</th>
      <th>任课老师</th>
      <th>开课日期</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>数学</td>
      <td>张老师</td>
      <td>3月4日</td>
    </tr>
    <tr>
      <td>英语</td>
      <td>刘老师</td>
      <td>3月12日</td>
    </tr>
    <tr>
      <td>物理</td>
      <td>陈老师</td>
      <td>4月1日</td>
    </tr>
    <tr>
      <td>地理</td>
      <td>邱老师</td>
      <td>3月11日</td>
    </tr>
    <tr>
      <td>化学</td>
      <td>孙老师</td>
      <td>3月14日</td>
    </tr>
    <tr>
      <td>政治</td>
      <td>高老师</td>
      <td>3月15日</td>
      <tr>
      <td>生物</td>
      <td>关老师</td>
      <td>3月28日</td>
    </tr>
    </tr>
  </tbody>
</table>
</div>

<link rel="stylesheet" href="3.css" type="text/css" media="all">
<h1>你选的课程有：</h1>
<div calss="div">
<?php
$result = "";
$a=0;
foreach( $_POST['rol'] as $i)
{
$a++;
 echo '<br>';
 echo  $a." ". $i;
 echo '<br>';
}
?>
</div>


<a href="4.php">预约实验</a>








