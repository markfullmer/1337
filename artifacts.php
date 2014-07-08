<?php
require("head.php"); 
require("sidebar.php");

if ($user_artifacts == 0) {
echo "You don't have any artifacts yet. Keep reading.";
}


$count = 1;
while ($count <= $user_artifacts) {
echo "<div class=\"captio\"><a href=\"artifact.php?number=";
echo $count; 
echo "\">";
echo "<img src=\"http://markfullmer.com/1337/img/1337_artifact_";
echo $count;
echo "b.gif\">";
echo "</a><div class=\"capt\"><a href=\"artifact.php?number=";
echo $count; 
echo "\">Artifact ";
echo $count;
echo "</a></div></div>";
$count = ++$count;
}
?>

Artifacts: Video trailer for 1337; Snipppets from scholarly journals; link to 1337 website; link to author John Cortland? link to your internal Facebook profile. discussion forum screenshot

<?php require("foot.php"); ?>

