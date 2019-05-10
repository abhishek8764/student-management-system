<?php
/*$url = parse_url("mysql://b00bf342d76dba:bdc5cd4c@us-cdbr-iron-east-02.cleardb.net/heroku_3d1ebec4e7e55e3?reconnect=true");

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
*/
$con = mysqli_connect("localhost","root", "", "simple");
if($con == true) {
	echo "connected successfully";
} else {
	echo "not connected successfully";
}
?>
