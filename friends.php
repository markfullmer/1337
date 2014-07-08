<?php
session_start(); 
require("head.php"); 
require("sidebar.php");



     if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
     {
        $rip = getenv("HTTP_CLIENT_IP");
     }
     else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
     {
        $rip = getenv("HTTP_X_FORWARDED_FOR");
     }
     else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
     {
        $rip = getenv("REMOTE_ADDR");
     }
     else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
     {
        $rip = $_SERVER['REMOTE_ADDR'];
     }
     else
     {
        $rip = "unknown";
     } 
	 
	 $ip=$rip;


function locateIp($ip){
	$d = file_get_contents("http://www.ipinfodb.com/ip_query.php?ip=$ip&output=xml");
 
	//Use backup server if cannot make a connection
	if (!$d){
		$backup = file_get_contents("http://backup.ipinfodb.com/ip_query.php?ip=$ip&output=xml");
		$answer = new SimpleXMLElement($backup);
		if (!$backup) return false; // Failed to open connection
	}else{
		$answer = new SimpleXMLElement($d);
	}
 
	$country_code = $answer->CountryCode;
	$country_name = $answer->CountryName;
	$region_name = $answer->RegionName;
	$city = $answer->City;
	$zippostalcode = $answer->ZipPostalCode;
	$latitude = $answer->Latitude;
	$longitude = $answer->Longitude;
	$timezone = $answer->Timezone;
	$gmtoffset = $answer->Gmtoffset;
	$dstoffset = $answer->Dstoffset;
 
	//Return the data as an array
	return array('ip' => $ip, 'country_code' => $country_code, 'country_name' => $country_name, 'region_name' => $region_name, 'city' => $city, 'zippostalcode' => $zippostalcode, 'latitude' => $latitude, 'longitude' => $longitude, 'timezone' => $timezone, 'gmtoffset' => $gmtoffset, 'dstoffset' => $dstoffset);
}
 
//Usage example

$ip_data = locateIp($ip);
 
echo "IP : " . $ip_data['ip'] . "\n";
echo "Country code : " . $ip_data['country_code'] . "\n";
echo "Country name : " . $ip_data['country_name'] . "\n";
echo "Region name : " . $ip_data['region_name'] . "\n";
echo "City : " . $ip_data['city'] . "\n";
echo "Zip/postal code : " . $ip_data['zippostalcode'] . "\n";
echo "Latitude : " . $ip_data['latitude'] . "\n";
echo "Longitude : " . $ip_data['longitude'] . "\n";
echo "Timezone : " . $ip_data['timezone'] . "\n";
echo "GmtOffset : " . $ip_data['gmtoffset'] . "\n";
echo "DstOffset : " . $ip_data['dstoffset'] . "\n";
?>




I first met
<?php 
$query = "SELECT uid FROM user WHERE sex='female' AND uid<$user_id AND uid IN (SELECT uid2 FROM friend WHERE uid1 = $user_id ORDER BY uid2 DESC)";
$female = $facebook->api_client->fql_query($query);
$a = $female[0]['uid'];
$e = $female[1]['uid'];

$query = "SELECT uid FROM user WHERE sex='male' AND uid<$user_id AND uid IN (SELECT uid2 FROM friend WHERE uid1 = $user_id ORDER BY uid2 DESC)";
$male = $facebook->api_client->fql_query($query);
$b = $male[0]['uid'];
$c = $male[1]['uid'];
$d = $male[2]['uid'];

if ($user_ana == $a) {
echo "<form action=\"friendprocess.php\" id=\"testForm\" class=\"friendselect\" method=\"post\"> <fb:friend-selector uid=\"";
echo $user_id;
echo "\" name=\"uid\" class=\"friendselect\" idname=\"grab_me_please\" prefill_id=\"";
echo $user_ana;
echo "\" exclude_ids=\"";
echo $friends;
echo "\"/> <INPUT type=\"submit\" class=\"friendselect\" value=\"save\"> </form>";
$friendone="true";
}
else {
echo $ana;
}
?> in Megatokyo Cafe. <?php echo $ana?> was a red-faced, pop-tart popping...<hr />


<fb:comments xid="chapter1" canpost="true" candelete="false" returnurl="http://apps.facebook.com/leetnovel/"> <fb:title>Add your own last sentence to the chapter</fb:title> </fb:comments>

<?php
require("foot.php");
?>