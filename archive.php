<?php
require("head.php"); 
require("sidebar.php");

$count = 1;

while ($count <= $user_level) {
echo "<div class=\"captio\"><a href=\"index.php?pagelevel=";
echo $count; 
echo "\">";
echo "<img src=\"http://markfullmer.com/1337/img/1337_novel_";
echo $count;
echo "b.gif\">";
echo "</a><div class=\"capt\"><a href=\"index.php?pagelevel=";
echo $count; 
echo "\">Page ";
echo $count;
echo "</a></div></div>";
$count = ++$count;
}

require("foot.php");
?>