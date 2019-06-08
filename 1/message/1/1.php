<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="JS/jquery-1.6.1.min.js"></script>
<style>
body{
background:#F5F5DC;
}
.div{
width:1230px;
height:2000x;
margin-right:auto;
margin-left:auto;
}
.div1{
text-align:center;
margin-top:-10px;
}
.div1 img{
box-shadow:4px 6px 10px  #000;
}
.div2{
position:relative;
background:#F0E68C;
width:150px;
height:960px;
margin-right:-10px;
margin-top:-960px;
float:right;
}
.div3{
position:relative;
background:;
width:500px;
height:500px;
float:left;
margin-top:-965px;
margin-left:-10px;
}
dl {
		width: 158px;
		margin:0px;
	}
	dt {
		font-size: 14px; 
		padding: 0px; 
		margin: 0px; 
		width:146px; 			/*设置宽度*/
		height:19px; 			/*设置高度*/
		background-image:url(images/title_show.gif);		/*设置背景图片*/	
		padding:6px 0px 0px 12px;
		color:#215dc6;
		font-size:12px;	
		cursor:hand;
	}
	dd{
		color: #000;
		font-size: 12px;
		margin:0px;
	 }
	a {
		text-decoration: none;		/*不显示下划线*/
	}
	a:hover {
		color: #FF6600;
	}
	#top{
		width:158px; 			/*设置宽度*/
		height:30px; 			/*设置高度*/
		background-image:url(images/top.gif);		/*设置背景图片*/		
	}
	#bottom{
		width:158px; 			/*设置宽度*/
		height:31px; 			/*设置高度*/
		background-image:url(images/bottom.gif);		/*设置背景图片*/				
	}
	.title{
		background-image:url(images/title_quit.gif);		/*设置背景图片*/	
	}
	.item{
		width:146px; 			/*设置宽度*/
		height:15px; 			/*设置高度*/
		background-image:url(images/item_bg.gif);		/*设置背景图片*/	
		padding:6px 0px 0px 12px;
		color:#215dc6;
		font-size:12px;	
		cursor:hand;
		background-position:center;
		background-repeat:no-repeat;
	}	
</style>
<script type="text/javascript">
$(document).ready(function(){
	$("dd").hide(); //隐藏全部子菜单
	$("dt[class!='title']").toggle(
		function(){
		//  slideDown:通过高度变化（向下增长）来动态地显示所有匹配的元素
			$(this).css("backgroundImage","url(images/title_hide.gif)");	//改变主菜单的背景
			$(this).next().slideDown("slow");
		},	
		function(){
		//  slideUp:通过高度变化（向上缩小）来动态地隐藏所有匹配的元素
			$(this).css("backgroundImage","url(images/title_show.gif)");	//改变主菜单的背景
			$(this).next().slideUp("slow");
		}
	);
});
</script>
</head>
<body>
<div class="div1">
<img src="01.jpg">
</img><br>
<img src="03.jpg">
</img>
</div>

<div class="div2">
<font color="green">您的留言内容是:<br><br>
<?php
if($_POST){
echo $_POST['text'];
}
?>
</font>
</div>

<div class="div3">
<div id="top"></div>
<dl>
	<dt>假期安排</dt>
	<dd>
        <div class="item">暑假安排</div>
        <div class="item">寒假安排</div>	
	</dd>
	<dt>课程设计</dt>
	<dd>
        <div class="item">大作业</div>
        <div class="item">代码设计</div>
        <div class="item">实验报告</div>
	</dd>
	<dt></dt>
	<dd>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
	</dd>
    <dt class="title"><a href="http://localhost/1/1/4/1/1.html">退出系统</a></dt>
</dl>
<div id="bottom">
</div>


</div>

</body>
</html>

<?php       
            $name=$_POST['name'];
            $email=$_POST['email'];
            $text=$_POST['text'];
            $conn=@mysqli_connect("localhost","root","",'jiaowu');
            $sqlinsert="insert into message(name,email,text) values('{$name}','{$email}','{$text}')";
            $result=mysqli_query($conn,$sqlinsert);
            $sqlselect="select * from message";         
            $insertid="select * from guanli where username='{$name}'";
            $result=mysqli_query($conn,$insertid);//获取数据集  
            $row=mysqli_fetch_array($result);
            mysqli_free_result($result);
            mysqli_close($conn);
            
?>




