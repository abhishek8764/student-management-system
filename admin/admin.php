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
<h1> welcome on admin dashboard </h1>
<a href="logout.php">logout</a>
<a href="add.php">insert </a>
<a href="update.php">update</a>
<a href="delete.php">delete</a>
</body>
</html>
