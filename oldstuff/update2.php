<?php

$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");

mysql_select_db("mark_1337");

$pagenumber = $_POST['pagenumber'];

$sql = " SELECT * " .
		" FROM pagechoices " .
		" WHERE choice_id = $pagenumber ";
		$result = mysql_query($sql)
		or die(mysql_error());

while ($row = mysql_fetch_array($result)) {
		extract($row);
			}
echo $pagenumber;				
?>

<form action=update3.php?action=edit method="post">
<input type="hidden" name="pagenumber" value="<?php echo $pagenumber; ?>">
<textarea name="data" rows="5" cols="60"><?php echo $story; ?></textarea>


<input type="SUBMIT" value="make the changes">

</form>







