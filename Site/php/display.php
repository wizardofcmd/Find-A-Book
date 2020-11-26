
<?php
//dont forget to change the credentials below for the actual online database
$mysqli = new mysqli('localhost', 'root', '', 'reviews');




$q = "SELECT * FROM `usersreviews`";
$query= $mysqli->query($q);

if(mysqli_num_rows($query)	>0	){
	while( $result = mysqli_fetch_array($query)	){
		?>
		<tr>
			<td> <?php echo $result['bookName']	?> </td>
			<td> <?php echo $result['userComment']	?>	 </td>
		
	

		</tr>



<?php 	
}
}

?>

