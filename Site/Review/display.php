
<?php
//dont forget to change the credentials below for the actual online database
$mysqli = new mysqli('localhost', 'root', '', 'reviews');




$sql = "SELECT * FROM `usersreviews`";
$result= $mysqli->query($sql);

if($result->num_rows>0){
	
	echo "<table><tr><th>book name </th><th>comment</th></tr> ";
	while($row = $result->fetch_assoc()){
		echo "<tr><td>" .$row["bookName"].
		"</td><td>" .$row["userComment"].
		"</td></tr>";
		
	}
}else{
	echo "0 results";
}
?>

