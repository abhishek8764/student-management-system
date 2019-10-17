
<?php
ob_start();
session_Start();
if(isset($_SESSION['id']))
{
header("location:admin/admin.php");
ob_end_flush();
die;
}
?>
<html>
<head>
<tittle>sms</tittle>
</head>
<body>
<h1 align="center"> Welcome S.M.S login page </h1>
<h3 align="right"><a href="admin/logout.php" >logout</a></h3>
<form action="login.php" method="post">
<table style="width:50%" align="center" border="1"   >
<tr>
<td align="center" colspan="2">Admin signin </td>
</tr>



<tr>
<td> username </td>
<td> <input type="text" name="username" ></td>
</tr>
<tr>
<td> password </td>
<td> <input type="password" name="password" ></td>
</tr>
<tr>

<td colspan="2" align="center"> <input type="submit" name="submit" value="submit" ></td>
</tr>
</table>
</form>
</body>
</html>
<?php

include("dbcon.php");
if(isset($_POST["submit"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	$qry="SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
	$resut=mysqli_query($con,$qry);
	$row = mysqli_num_rows($resut);
	echo "$row";
	if($row > 0)
	{
		$data=mysqli_fetch_assoc($resut);
		$id=$data['id'];
		echo $id;
		session_Start();
		$_SESSION['id']=$id;
		header("location:admin/admin.php");
		ob_end_flush();
	}
	else
	{
	echo "relogin";
	}
}

?>
