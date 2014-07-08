<?php
$query = "SELECT uid FROM user"; //(see above examples) 
$result = $facebook->api_client->fql_query($query); 

$attribute = $result[0]['attribute'];

echo $attribute;

?>