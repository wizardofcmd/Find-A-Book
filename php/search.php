<?Php
session_start();
error_reporting(0);// With this no error reporting will be there
require "../api/config/database.php";
$t1=$_GET['term'];

if(!preg_match('/^[a-z0-9\s.\- \_]+$/i', $t1)){
echo "Data Error ";
exit;
}
//sleep(2);
/////// for multiple key words ////
$kt=explode(" ",$t1);//Breaks  string into array
// Now let us generate the sql
while(list($key,$val)=each($kt)){
if($val<>" " and strlen($val) > 0){$q .= " NAME LIKE '%$val%' OR ";}
}// end of while
$q=substr($q,0,(strlen($q)-3)); // remove the last OR from the output
/////////



$q1="SELECT  book AS label,id AS value FROM usersreview WHERE  $q ";
//echo $q1;
/*
$str="[";
foreach ($dbo->query($q1) as $row) {
echo "$row[state]";
$str.="{label : \"$row[name]\",value : \"$row[id]\"},";
}
$str=substr($str,0,(strlen($str)-1));
$str.="]";
echo $str;
*/

$row=$dbo->prepare($q1);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result); // Output JSON formatted data

?>
