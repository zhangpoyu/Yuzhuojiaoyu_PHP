<!DOCTYPE html>
<html>
<head>
<style>
body{
text-align:center;
background:#ADD8E6;
}
</style>
<title></title>
</style>
</head>
<body>

<form name="reg_testdate" method="post" action="5.php">
姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:<input name="username" placeholder="请输入姓名....."><br>
课&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;程:<input name="course" placeholder="请输入课程....."><br>
实验名称:<input name="name"  placeholder="请输入实验名称....."/><br>
请确认时间:  
  <select name="YYYY" onchange="YYYYDD(this.value)">
    <option value="">请选择 年</option>
  </select>
  <select name="MM" onchange="MMDD(this.value)">
    <option value="">选择 月</option>
  </select>
  <select name="DD">
    <option value="">选择 日</option>
  </select>
  <script language="JavaScript"><!--   
   function YYYYMMDDstart()   
   {   
           MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];   
    
           //先给年下拉框赋内容   
           var y  = new Date().getFullYear();   
           for (var i = (y-30); i < (y+30); i++) //以今年为准，前30年，后30年   
                   document.reg_testdate.YYYY.options.add(new Option(" "+ i +" 年", i));   
    
           //赋月份的下拉框   
           for (var i = 1; i < 13; i++)   
                   document.reg_testdate.MM 

.options.add(new Option(" " + i + " 月", i));   
    
           document.reg_testdate.YYYY.value = y;   
           document.reg_testdate.MM 

.value = new Date().getMonth() + 1;   
           var n = MonHead[new Date().getMonth()];   
           if (new Date().getMonth() ==1 && IsPinYear(YYYYvalue)) n++;   
                writeDay(n); //赋日期下拉框Author:meizz   
           document.reg_testdate.DD.value = new Date().getDate();   
   }   
   if(document.attachEvent)   
       window.attachEvent("onload", YYYYMMDDstart);   
   else   
       window.addEventListener('load', YYYYMMDDstart, false);   
   function YYYYDD(str) //年发生变化时日期发生变化(主要是判断闰平年)   
   {   
           var MMvalue = document.reg_testdate.MM 

.options[document.reg_testdate.MM 

.selectedIndex].value;   
           if (MMvalue == ""){ var e = document.reg_testdate.DD; optionsClear(e); return;}   
           var n = MonHead[MMvalue - 1];   
           if (MMvalue ==2 && IsPinYear(str)) n++;   
                writeDay(n)   
   }   
   function MMDD(str)   //月发生变化时日期联动   
   {   
        var YYYYvalue = document.reg_testdate.YYYY.options[document.reg_testdate.YYYY.selectedIndex].value;   
        if (YYYYvalue == ""){ var e = document.reg_testdate.DD; optionsClear(e); return;}   
        var n = MonHead[str - 1];   
        if (str ==2 && IsPinYear(YYYYvalue)) n++;   
       writeDay(n)   
   }   
   function writeDay(n)   //据条件写日期的下拉框   
   {   
           var e = document.reg_testdate.DD; optionsClear(e);   
           for (var i=1; i<(n+1); i++)   
                e.options.add(new Option(" "+ i + " 日", i));   
   }   
   function IsPinYear(year)//判断是否闰平年   
   {     return(0 == year%4 && (year%100 !=0 || year%400 == 0));}   
   function optionsClear(e)   
   {   
        e.options.length = 1;   
   }   
   //--></script>
   <br>
<input type="submit" onclick="window.location.href='4.php'" value="确认">
<input name="reset" type="reset" value="重选"><br>
</form>
</body>
</html>  
     
     
     
     
     
     
     
     
     
     
     
     
     
     

