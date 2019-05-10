<?php
ob_start();
session_Start();
		if(isset($_SESSION['id']))
		{
			echo "jk";
		}
		else
		{
			header("location:../login.php");
			ob_end_flush(0);
		}
?>
<?php
include("../header.php");
?>
<h1 align="center"> insert student details  </h1>
<h3 align="right"><a href="admin/logout.php" >logout</a></h3>
<form method="post">
<table style="width:50%" align="center" border="1"   >
<tr>
<td align="center" colspan="2">admin login </td>
</tr>

<tr>
<td> rollno  </td>
<td> <input type="text" name="rollno" ></td>
</tr>

<tr>
<td> name  </td>
<td> <input type="text" name="name" ></td>
</tr>
<tr>
<td> state board  </td>
<td> <input type="text" name="city" ></td>
</tr>
<tr>
<td> parentmobile </td>
<td> <input type="text" name="mobile" ></td>
</tr>
<tr>
<td colspan="2" align="center">
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
<td> insert image </td>
<td> <input type="file" name="simg" </td>
</tr>
<tr>

<td colspan="2" align="center"> <input type="submit" name="submit" value="submit" ></td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	include("../dbcon.php");
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$city=$_POST['city'];
	$pcon= $_POST['mobile'];
	$standered=$_POST['std'];
	$qyr="INSERT INTO `student` (`id`, `rollno`, `name`, `city`, `parentsmobile`, `standered`) VALUES (NULL, '$rollno', '$name', '$city', '$pcon', '$standered')";
	$run=mysqli_query($con,$qyr);
	if($run==true)
	{
		echo "ok data inserted";
		header("location:admin.php");
		ob_end_flush();
		die;
	}
	else
	{
		echo "sorry";
	}
}

?>
