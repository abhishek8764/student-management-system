<?php
ob_start();
session_Start();
		if(isset($_SESSION['id']))
		{
			echo "";
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
<form method="post" action=update.php >
<table style="width:50%" align="center" border="1"   >
<tr>
<td align="center" colspan="2">admin login </td>
</tr>


<tr>
<td> name  </td>
<td> <input type="text" name="name" ></td>
</tr>

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

<td colspan="2" align="center"> <input type="submit" name="submit" value="submit" ></td>
</tr>
</table>

</form>
<table align="center" width="70%" border="1">
<tr>
<th>no</th>
<th>image</th>
<th>name</th>
<th>rollno</th>
<th>edit</th>
</tr>
<?php
if(isset($_POST['submit']))
{
include("../dbcon.php");
$name=$_POST['name'];
$std=$_POST['std'];
$qyr="SELECT * FROM `student` WHERE `standered`='$std' AND `name` LIKE '%$name%'";
$run=mysqli_query($con,$qyr);
}
if(mysqli_num_rows($run)<1)
{
	echo "<tr><td colspan='5'>no records found</td> </tr>";
}
else
{	$count=0;
	while($data=mysqli_fetch_assoc($run))
	{
		$count++;
		?>
		<tr>
<td><?php echo "$count" ?></td>
<td>img src="../images/<?php echo $data['image']; ?>"</td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['rollno']; ?></td>
<td><a href="upadateform.php?sid=<?php echo $data['id']; ?>" >edit</a></td>
</tr>
		<?php

	}
}
?>
</table>
</body>
</html>
