
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
<!Doctype Html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>	
<body>




 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <?php echo $row["bookName"];? </td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    
  </tbody>
</table>
</body>
</html>
