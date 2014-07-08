<div class="poll_results"> 
<form action="commit.php?action=edit&type=choice" method="post">

	<?php 
		$sql = "SELECT * " .
		" FROM pagechoices " .
		" WHERE page_id=$user_level";
		$result = mysql_query($sql)
		or die(mysql_error());
		
		while ($row = mysql_fetch_array($result)) {
		extract($row);
		}
	?>
	
<h2>Make your decision:</h2> 
<div class="poll_answers"> 
<table><tbody> 
<tr><td class="label"><input type="radio" name="choicemake" value="<?php echo $choice_option1; ?>" checked><b><div class="fbtab"><?php echo $choice_option1; ?></div></b></td></tr> 
<tr><td class="label"><input type="radio" name="choicemake" value="<?php echo $choice_option2; ?>"><b><div class="fbtab"><?php echo $choice_option2; ?></div></b></td></tr> 
<tr><td class="label"><input type="radio" name="choicemake" value="<?php echo $choice_option3; ?>"><b><div class="fbtab"><?php echo $choice_option3; ?></div></b></td></tr></tbody></table> 
...or complete the statement yourself!
<textarea name="custom" rows="2" cols="80"></textarea><br />
<input type="submit" name="make choice" value="Submit" />
 </div>
</form>

</div>