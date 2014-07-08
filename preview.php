<?php 
if (empty($user_email)) {
echo "Enter your email to know when the next installment arrives.<br />
<form method=\"post\" action=\"emailconf.php\">  <input type=\"text\" name=\"email\" value=\"you@mail.com\" /><br />
<span class=\"notify\">We won't blackmail you.</span><br />
<input type=\"submit\" value=\"Submit\" />  <button class=\"cancel\">No, thanks.</button>  </form>"; 
}
else {
echo "You'll get an email when the next installment arrives.";
}
?>