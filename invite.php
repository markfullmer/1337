<?php
session_start(); 
require("head.php"); 
require("sidebar.php");

$content = <<<FBML
<fb:name uid="$user_id" firstnameonly="true" useyou="false" shownetwork="false"/> invites you to read an new interactive novel on Facebook.
<fb:req-choice url="{$facebook->get_add_url()}" label="Add 1337 to your profile"/>
FBML;
echo $content;
?>


<fb:request-form action="http://apps.facebook.com/leetnovel/" method="POST" invite="true" type="1337" content="<?php echo htmlentities($content);?>">
	<fb:multi-friend-selector max="20" actiontext="Invite your friends to read 1337: A Videogame Novel" showborder="true" cols="3" exclude_ids="<?php echo $friends;?>"></fb:request-form>
<?php
require("foot.php");
?>