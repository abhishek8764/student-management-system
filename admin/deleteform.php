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
	$qyr1="DELETE FROM `student` WHERE `id`='$sid'";
	$run=mysqli_query($con,$qyr1);
	if(isset($qyr1))
	{
		header("location:admin.php");
		ob_end_flush();
	}



?>
