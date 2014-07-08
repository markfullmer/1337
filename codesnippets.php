<?php
echo date('H');
echo date('T');
echo "<br />It was a cool ";
echo date('F l');
echo " in the ";
$hour = date('H');
if ( 6 <= $hour && $hour < 10) {
echo "morning";
}
if ( 10 <= $hour && $hour < 12) {
echo "late morning";
}

if ($hour = 12) {
echo "noontime";
}

if ( $hour >=13 && $hour < 16) {
echo "early afternoon";
}

if ( 16 <= $hour && $hour < 18) {
echo "late afternoon";
}

if ( 18 <= $hour && $hour < 21) {
echo "evening";
}

if ($hour >= 21 ) {
echo "night";
}

if ($hour < 6 ) {
echo "night";
}

echo "<br />";
?>

date until user's birthday?<hr />

<?php
function heystupid() {
echo "hey stupid!";
}

function welcome(){

if(date("H") < 12){

echo "good morning";

}elseif(date("H") > 11 && date("H") < 18){

echo "good afternoon";

}elseif(date("H") > 17){

echo "good evening";

}

}
echo date("H");
welcome();
heystupid();
?>