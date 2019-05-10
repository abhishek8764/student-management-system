<html>
<head>
<tittle>sms</tittle>
</head>
<body>
<h1 align="center"> welcome S.M.S </h1>
<h3 align="right"><a style="color:red" href="login.php" >login</a></h3>
<form action="index.php" method="post">
<table style="width:50%" align="center" border="1"   >
<tr>
<td align="center" colspan="2">student information </td>
</tr>
<tr>
<td align=""> choose standered</td>
<td>
<select name="std">
<option value="1">1st </option>
<option value="2">2nd </option>
<option value="3">3rd </option>
<option value="4">4th </option>
<option value="5">5th </option>
<option value="6">6th </option>
</select>
</td>
</tr>
<tr>
<td> enter roll no </td>
<td> <input type="text" name="rollno" ></td>
</tr>
<tr>

<td colspan="2" align="center"> <input type="submit" name="submit" value="submit"> </td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$std=$_POST['std'];
$rollno=$_POST['rollno'];
include("dbcon.php");
include("function.php");
showdetails($std,$rollno);
}


?>