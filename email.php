<?php 
require("head.php"); 
require("sidebar.php");
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="fbinfobox" style="width: 425px;">
Enter an email address, below, to receive notification when the next installment arrives.<br />
<form method="post" action="emailconf.php">  <input type="text" name="email" value="you@mail.com" /><br />
<span class="notify">This address will stay private & won't be used to blackmail you.</span><br />
<input type="submit" value="Submit" />  <button class="cancel">No, thanks.</button>  </form>

</div>
<?php
require("foot.php");
?>