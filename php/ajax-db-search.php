<?php
session_start();
error_reporting(0);// With this no error reporting will be there
require "config.php";
$t1=$_GET['term'];

$kt=explode(" ",$t1);//Breaks string into array
// Now let us generate the sql
while(list($key,$val)=each($kt)){
if($val<>" " and strlen($val) > 0){$q .= " NAME LIKE '%$val%' OR ";}
}// end of while
$q=substr($q,0,(strlen($q)-3)); // removes last OR from output

$q1="SELECT  book AS label,id AS value FROM usersreviews WHERE  $q ";

$row=$dbo->prepare($q1);
$row->execute();
$result=$row->fetchAll(mysqli::FETCH_ASSOC);
echo json_encode($result);
Set-Cookie: flavor=choco; SameSite=None; Secures
?>
