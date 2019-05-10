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
			ob_end_flush();
		}
?>
<?php
include("../header.php");
?>
<?php

	$sid=$_GET['sid'];
    echo $sid;
	include("../dbcon.php");
	$qyr1="SELECT * FROM `student` WHERE `id`='$sid'";
	$run=mysqli_query($con,$qyr1);
	$data=mysqli_fetch_assoc($run);


?>
<h1 align="center"> insert student details  </h1>
<h3 align="right"><a href="logout.php" >logout</a></h3>
<form method="post" action="upadateform.php?sid=<?php echo "$sid";?>">
<table style="width:50%" align="center" border="1"   >
<tr>
<td align="center" colspan="2">admin login </td>
</tr>

<tr>
<td> rollno  </td>
<td> <input type="text" name="rollno" value="<?php echo $data['rollno']; ?>"> </td>
</tr>

<tr>
<td> name  </td>
<td> <input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
</tr>
<tr>
<td> state board  </td>
<td> <input type="text" name="city" value="<?php echo $data['city']; ?>"></td>
</tr>
<tr>
<td> parentmobile </td>
<td> <input type="text" name="mobile" value="<?php echo $data['parentsmobile']; ?>"></td>
</tr>
<tr>
<td colspan="2" align="center">
<select name="std" value="<?php echo $data['standered']; ?>">
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
<td> <input type="file" name="simg" value="<?php echo $data['image']; ?>"></td>
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

	$qyr="UPDATE `student` SET `rollno`='$rollno',`name`='$name',`city`='$city',`parentsmobile`='$pcon',`standered`='$standered' WHERE id=$sid";
	$run=mysqli_query($con,$qyr);
	if($run==true)
	{
		echo "ok data updated succesfully";
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
