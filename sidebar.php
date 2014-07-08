<tr><td width="175" valign="top">
<div style='clear:both;font-weight:bold;background:#F7F7F7;border:1px solid 
#CCCCCC;margin:10px;text-align:center;padding:5px;'>
		<span>Actions</span><br/>
		<a href="restart.php">Reset</a>
</div>
<div style='clear:both;font-weight:bold;background:#F7F7F7;border:1px solid #CCCCCC;margin:10px;text-align:left;padding:5px;'>
		<span>Stats for <fb:name uid="<?php echo $user_id; ?>" useyou="false" firstnameonly="false" linked="false" /></span><br/>
		<div class="some_div">  
		<table cellspacing="0"><tbody>   
		<tr class="even_colomn">  <td class="action_text">Repute</td>  <td><?php echo $user_repute; ?></td> </tr>  
		<tr>  <td class="action_text">Level</td>  <td><?php echo $user_level; ?></td> </tr>  
		<tr class="even_colomn">  <td class="action_text"><a href="artifacts.php">Artifacts</a></td>  <td><?php echo $user_artifacts; ?></td> </tr> 
		<tr>  <td >Lustiness</td>  <td class="action_text">
		<?php 
		if ($user_health <= 20) {
		echo "<span class=\"red\">"; 
		}
		echo $user_health; 
		if ($user_health <= 20)  {
		echo "</span>";
		}
		?> (<a href="refresh.php">refresh</a>)</td> </tr>  
		<tr class="even_colomn">  <td class="action_text">Ca$h</td>  <td
		<?php 
		if ($_SESSION['c'] == 1) { echo "class=\"green\""; }
		if ($_SESSION['c'] == -1) { echo "class=\"red\""; }
		?>
		>
		<?php
		echo "$";
		echo $user_cash;
		$_SESSION['c'] = 0;
		?>
		</td> </tr>  
		
		<tr>  
		<td class="action_text">Whimsy</td><td
		<?php 
		if ($_SESSION['w'] == 1) { echo "class=\"green\""; }
		if ($_SESSION['w'] == -1) { echo "class=\"red\""; }
		?>
		>
		<?php
		echo $user_whimsy;
		$_SESSION['w'] = 0;
		?>
		</td> 
		</tr> 
		
		<tr class="even_colomn">  
		<td class="action_text">Ennui</td><td
		<?php 
		if ($_SESSION['e'] == 1) { echo "class=\"green\""; }
		if ($_SESSION['e'] == -1) { echo "class=\"red\""; }
		?>
		>
		<?php
		echo $user_ennui;
		$_SESSION['e'] = 0;
		?>
		</td> 
		</tr> 
		
		<tr>  
		<td class="action_text">Mania/Depression</td><td
		<?php 
		if ($_SESSION['m'] == 1) { echo "class=\"green\""; }
		if ($_SESSION['m'] == -1) { echo "class=\"red\""; }
		?>
		>
		<?php
		echo $user_mania;
		echo "/";
		echo 100-$user_mania;
		$_SESSION['m'] = 0;
		?>
		</td> 
		</tr> 
		
		<tr class="even_colomn">  
		<td class="action_text">Intro/Extroversion</td><td
		<?php 
		if ($_SESSION['i'] == 1) { echo "class=\"green\""; }
		if ($_SESSION['i'] == -1) { echo "class=\"red\""; }
		?>
		>
		<?php
		echo $user_introversion;
		echo "/";
		echo 100-$user_introversion;
		$_SESSION['i'] = 0;
		?>
		</td> 
		</tr> 
		
		<tr>   
		<td class="action_text">Opti/Pessimism</td><td
		<?php 
		if ($_SESSION['o'] == 1) { echo "class=\"green\""; }
		if ($_SESSION['o'] == -1) { echo "class=\"red\""; }
		?>
		>
		<?php
		echo $user_optimism;
		echo "/";
		echo 100-$user_optimism;
		$_SESSION['o'] = 0;
		?>
		</td> 
		</tr> 
		
		
		</tbody></table>  </div>
		
		
</div>	

<div style='clear:both;font-weight:bold;background:#F7F7F7;border:1px solid #CCCCCC;margin:10px;text-align:left;padding:5px;'>
<?php
// offers email subscription if not subscribed
if (empty($user_email)) {
echo "Get emailed new pages<br />";
echo "<form method=\"post\" action=\"emailconf.php\">  <input type=\"text\" name=\"email\" value=\"you@mail.com\" /></form><br />";
echo "<span class=\"notify\">We won't blackmail you</span><br />";
}
?>
<br />
<a href="invite.php">Invite friends to read 1337</a><br />
<fb:bookmark />
</div>
</td>
<td width="20">
<td width="425" valign="top">

