<head>
<link type="text/css" rel="stylesheet" href="http://markfullmer.com/1337/style.css" />
</head>
<?php

$connect = mysql_connect("localhost", "", "")
or die ("Hey loser, check your server connection");
mysql_select_db("mark_1337");



$query = "SELECT * " .
		"FROM userdata ".
		"WHERE user_id=1 ";
$results = mysql_query($query)
	or die(mysql_error());
	while ($row = mysql_fetch_array($results)) {
extract($row);
}

$page = 1;
$userpage ="user_page" . $page;


?>

<?php 
$sql = "SELECT * " .
" FROM pagechoices " .
" WHERE page_id=$page";
$result = mysql_query($sql)
or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
extract($row);
}

echo $choice_option1;
echo $choice_option2;
echo $choice_option3;
echo "<br />";


$query = "SELECT $userpage " .
		"FROM userdata ";

$resultant = mysql_query($query)
	or die(mysql_error());
	while ($row = mysql_fetch_array($resultant)) {
extract($row);
echo $$userpage;
echo "<br />";
if ($$userpage == $choice_option1) {
$choiceresponse1 = ++$choiceresponse1; 
}
if ($$userpage == $choice_option2) {
$choiceresponse2 = ++$choiceresponse2; 
}
if ($$userpage == $choice_option3) {
$choiceresponse3 = ++$choiceresponse3; 
}
}


$sum = $choiceresponse1 + $choiceresponse2 + $choiceresponse3;
$one = $choiceresponse1 / $sum * 100;
$two = $choiceresponse2 / $sum * 100;
$three = $choiceresponse3 / $sum * 100;

$query = "SELECT $userpage " .
		"FROM userdata ".
		"WHERE user_id=1 ";
$results = mysql_query($query)
	or die(mysql_error());
	while ($row = mysql_fetch_array($results)) {
extract($row);
}

?>
<div class="poll_results"> 
<h2>Who chose what</h2> <div class="poll_answers"> 
<table><tbody> 
<tr>
<td class="label"><?php echo $choice_option1; ?>
<?php
if ($$userpage == $choice_option1)
{
echo "<b>(Your choice)</b>";
}
?>
</td> 
<td class="bar"><div class="bar" style="width:<?php echo $one * 2; ?>px;"><?php echo $one; ?>%</div></td> </tr> 
<tr>
<td class="label"><?php echo $choice_option2 ?>
<?php
if ($$userpage == $choice_option2)
{
echo "<b>(Your choice)</b>";
}
?>
</td> 
<td class="bar"><div class="bar" style="width:<?php echo $two * 2; ?>px;"><?php echo $two; ?>%</div></td> 
</tr> <tr>
<td class="label"><?php echo $choice_option3 ?>
<?php
if ($$userpage == $choice_option3)
{
echo "<b>(Your choice)</b>";
}
?>
</td> 
<td class="bar"><div class="bar active" style="width:<?php echo $three * 2; ?>px;"><?php echo $three; ?>%</div></td> </tr> </tbody></table> </div> </div>



