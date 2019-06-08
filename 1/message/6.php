
<html>
<head>
<meta charset="utf-8">
<style>
body{
background:#F5F5DC;
}
.div1{
background:#F0E68C;
width:150px;
height:960px;
margin-right:-10px;
margin-top:0px;
float:right;
}
.div2{
margin-left:-10px;
margin-top:-1px;
}
.div2 img{
box-shadow:5px 5px 6px #000;
margin-bottom:3px;
}
.div3{
background:#FFF08C;
margin-left:-10px;
width:880px;
posotion:absolute;
height:960px;
margin-right:-1px;
margin-top:0px;
float:right;
}
.div4{
position:relative;
float:right;
}
</style>
</head>
<body>

<div class="div1">
<font color="green">您的留言内容是:<br><br>
<?php
if($_POST){
echo $_POST['text'];
}
?>
</font>
</div>

<div class="div3">
<div class="div4">
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>设置页面背景</title>
<style>
	body{
		background-color:#FF0;				/*定义页面背景色*/
	}
	p{
		font-size:16px;						/*定义文字样式*/
		padding-left:10px;
		padding-top:8px;
		line-hright:120%;	
	}
	span{									/*定义标题文字样式*/
		font-size:80px;
		float:left;
		padding-right:5px;
		padding-left:10px;
		padding-top:8px;	
	}
</style>
</head>

<body>
	<img src="new.jpg" style="float:right;" />		<!--在页面中添加图片-->
    <span>福</span>											<!--定义文字标题-->
    <p>对中国人来说，春节是最重要的传统节日。每逢春节，家家户户都要贴上鲜红的福字。聚福、纳福、惜福、享福，一生幸福！中国的“福”文化源远流长，流传千余年。不同的时代，“福”字有着不同的内涵，旧社会，“福”字在某种程度上带有迷信色彩，在穷人中，不知“福”从何来，只能祈祷老天和鬼神保佑过上幸福生活。在新中国成立后，人们沿袭了这一传统，每年春节家家户户贴“福”字，不仅仅是期盼吉祥、平安、幸福、而且在很大程度上是为了营造文明、祥和、温馨、快乐、喜庆氛围。可见，不管哪个时代，“福”字有一个共同特点，那就是祝愿人们“福、禄、寿、喜、财”在新的一年里滚滚而来，心想事成，万事如意。</p>
</body>
</html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>伸缩式导航菜单</title>
<script type="text/javascript" src="JS/jquery-1.6.1.min.js"></script>
<style type="text/css">
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
<div id="top"></div>
<dl>
	<dt>员工管理</dt>
	<dd>
        <div class="item">添加员工信息</div>
        <div class="item">管理员工信息</div>	
	</dd>
	<dt>招聘管理</dt>
	<dd>
        <div class="item">浏览应聘信息</div>
        <div class="item">添加应聘信息</div>
        <div class="item">浏览人才库</div>
	</dd>
	<dt>薪酬管理</dt>
	<dd>
        <div class="item">薪酬登记</div>
        <div class="item">薪酬调整</div>
        <div class="item">薪酬查询</div>
	</dd>
    <dt class="title"><a href="#">退出系统</a></dt>
</dl>
<div id="bottom">
</div>
</body>
</html>
</div>
</div>

<div class="div2">
<img src="01.jpg">
</img>
<img src="03.jpg">
</img>
</div>
</body>
</html>






