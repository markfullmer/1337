<?php

$connect = mysql_connect("localhost", "", "") or
die ("Hey loser, check your server connection.");

mysql_select_db("mark_1337");

$sql = "SELECT choice_id, story, choice_option1 " .
		" FROM pagechoices " ;
		$result = mysql_query($sql)
		or die(mysql_error());
		
		
?>


<form action=update2.php?action=edit method="post">
<select name="pagenumber">
	<option value="" selected>Select a page</option>
	<?php 
		while ($row = mysql_fetch_array($result)) {
		extract($row);
		?>
	<option value="<?php echo $choice_id; ?>"><?php echo $choice_id; ?></option>
	<?php
	}
	?>



<input type="SUBMIT" value="edit">


	
</form>


// $insert = "INSERT INTO pagechoices (choice_id, choice_option1, choice_option2, choice_option3) " .
//	"VALUES (1, 'Wander around the forest', 'Struggle with the ties that bind', 'Believe in oneself stubbornly'), " .
//	"(2, 'Do the right thing', 'Marry oneself to the goal', 'Read a fortune cookie'), " .
//	"(3, 'Contemplate aphorisms', 'Mix metaphors masterfully', 'Westward ho')";

// $insert = "UPDATE userdata (user_level) " .
//	"VALUES (1), " .
//	"(2), " .
//	"(0)";

// $results = mysql_query($insert)
//	or die(mysql_error());
	
// echo "Data inserted successfully!";
// ?>