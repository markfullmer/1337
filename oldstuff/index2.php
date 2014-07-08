<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<head>
<title>1337: a game novel</title>
<meta name="description" content="author John Cortland" />
<meta name="keywords" content="" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="type" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<link type="text/css" rel="stylesheet" href="style.css" />
</head>




<div id="container">
<?php

$datafile = "data.txt";
$data = fopen($datafile, 'r') or die("can't open file");
$brain = fgets($data);
$art = fgets($data);
$punk = fgets($data);
fclose($data);
?>


<b>Inventory</b>: Brainishness: <?php echo "$brain"; ?> Artistic Integrity: <?php echo "$art"; ?> Punk Passion: <?php echo "$punk"; ?> <hr />
		
It was a cold and gritty night, a Big Sleep kind of night, and I was twiddling my thumbs, unsure what to do with myself.

Choose an action:
	<form action="2.php" method="post"> 
<select name="act"> 
<option>contemplate a blank canvas</option>
<option>rock out</option>
<option>read Deleuze</option>
</select>
Choose dialogue:
	<form action="2.php" method="post"> 
<select name="say"> 
<option>Man, I hate these Santa Ana winds</option>
<option>I wish I had a frog right about now</option>
<option>Something smells rotten in Lollapalooza</option>
</select>
Name your new frog: <input name="frog" type="text" /> 
<input type="submit" />
</form>

	
	

	
	
	
	<?php require("footer.php"); ?>
</div>
