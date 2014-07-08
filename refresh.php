<?php 
require("head.php"); 
require("sidebar.php");
$user_id=$_SESSION['uident'];
//updates the user's choice into the appropriate page column & increases the level
$sql = "UPDATE userdata SET 
	user_health = '100'
	WHERE user_id=$user_id";
		
$results = mysql_query($sql)
or die(mysql_error());

?>

You just refreshed your lustiness!
<?php
require("foot.php");
?>

