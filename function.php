

<?php
function showdetails($std, $rollno)
{
include("dbcon.php");
$rollno=$_POST['rollno'];
$std=$_POST['std'];
$qyr="SELECT * FROM `student` WHERE `standered`='$std' AND `rollno`='$rollno'";
$run=mysqli_query($con,$qyr);

if(mysqli_num_rows($run)<1)
{
	echo "<tr><td colspan='5'>no records found</td> </tr>";
}
else
{	
	$data=mysqli_fetch_assoc($run);
?>
<table align="center" border="1">
<tr>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['rollno']; ?></td>
<td><?php echo $data['parentsmobile']; ?></td>
<td><?php echo $data['city'];?> </td>
</tr>
</table>

<?php 
}
}
?>