<?php $pagenumber = 2; ?>
This is Page 2, where I'm housing a bunch of FB code<br />

   <div class="fbinfobox" style="width: 500px;">
            You've unlocked a new <a href="artifacts.php">artifact</a>!
        </div>

<?php




// Greet the currently logged-in user!
echo "<p>Hello, <fb:name uid=\"$user_id\" useyou=\"false\" firstnameonly=\"true\" />!</p>";

echo "<p>Hello, <fb:pronoun uid=\"$user_id\" useyou=\"true\" />!</p>";

// Print out at most 25 of the logged-in user's friends,
// using the friends.get API method
echo "<p>Friends:";
foreach ($friends as $friend) {
  echo "<br>$friend";
  echo "<fb:name uid=\"$friend\" useyou=\"false\" firstnameonly=\"true\" />";
}
echo "</p>";
?>
</div>
<hr />
<fb:comments xid="comments_1" canpost="true" candelete="true" callback="page1.php"> <fb:title>Comments</fb:title> </fb:comments>

Friend Selector: 
<fb:friend-selector uid="[User ID which is $user]" name="uid" idname="friend_sel" />
<br />


<form action="page3.php" method="post"> 
<select name="user_page1"> 
<option value="" selected>Select a choice...</option>

<?php 
foreach ($people as $people_id => $people_fullname) {
?>
option value="<?php echo $people_id; ?>" ><?php
echo $people_fullname; ?></option>
<?php
}
?>
</select>

<input type="submit" />
</form>