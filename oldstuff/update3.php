<?php

$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");

mysql_select_db("mark_1337");

$pagenumber = $_POST['pagenumber'];
echo $pagenumber;


$sql = "UPDATE pagechoices 
	SET story = '" . $_POST['data'] . "'	
	WHERE choice_id='$pagenumber'";

$results = mysql_query($sql)
or die(mysql_error());

				
?>

Database succesfully updated to <?php echo $_POST['data']; ?> on page <?php echo $_POST['pagenumber']; ?> 