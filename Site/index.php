<!DOCTYPE html>
<html>
	<head>
		<title>FindABook Home</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<script src="js/apiscript.js"></script>
		<script> 
			
			$(document).ready(function() {
				$("#sl_books").hide(); 
				
				
				$( "#btn_fic_id" ).click(function() {
					var book_data = "fiction";
					alert(book_data);
					console.log(book_data);
					
					
					$.ajax({type: "POST",		
						url: './php/bookhandler.php',
						data: {bookdata: book_data},
						dataType: 'json',
						
						success: function(data){
							$("#sl_books").show();
							console.log(data);
							var select = document.getElementById('sl_books'); // new var select
							$(select).html('');
							for (var i in data) { // move through array of data which you can get from test.php
								$(select).append('<option value=' + data[i] + '>' + data[i]['title'] + '</option>'); // for every index create HTML as follows and append to #routes							
							}
							
						}});
				});
				$( "#btn_ran_id" ).click(function() {
					
					var book_data = "please read index.php line 34"; // Needs a randomizer that saves 'book_data' as a random string 
					alert(book_data);
					console.log(book_data);
					
					
					/*$.ajax({type: "POST",
						url: './php/bookhandler.php',
						data: {bookdata: book_data},  
						dataType: 'json',
						
						success: function(data){
						console.log(data);
						
					}}); */
				});
				$( "#btn_nonfic_id" ).click(function() {
					var book_data = "Nonfiction";
					alert(book_data);
					console.log(book_data);
					
					
					$.ajax({type: "POST",
						url: './php/bookhandler.php',
						data: {bookdata: book_data},
						dataType: 'json',
						
						success: function(data){
							$("#sl_books").show();
							console.log(data);
							var select = document.getElementById('sl_books'); // new var select
							$(select).html('');
							for (var i in data) { // move through array of data which you can get from test.php
								$(select).append('<option value=' + data[i] + '>' + data[i]['title'] + '</option>'); // for every index create HTML as follows and append to #routes							
							}
						}});
				});
				
				/*
					
					Need to be optimised
					Switch statement?
					
					if(document.getElementById('btn_fic_id').clicked == true)
					{
					var book_data = "fiction";
					alert(" fiction button was clicked");
					} else if (document.getElementById('btn_ran_id').clicked == true)
					{
					var book_data = "please read index.php line 34";
					alert("button was clicked");
					} else if(document.getElementById('btn_nonfic_id').clicked == true)
					{
					var book_data = "Nonfiction";
					alert(" nonfic button was clicked");
				}*/ 
				
				
				
				});
				</script>
		</head>
		<body>
			<nav class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">FindABook</a>
					</div>
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse"> 
						Menu
					</button>
					<div class="collapse navbar-collapse navHeaderCollapse">
						<ul class ="nav navbar-nav navbar-right">
							<li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
							<li><a href="About/About.html"><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
							<li><a href="Review/review.html"><span class="glyphicon glyphicon-envelope"></span>Reviews</a></li>
						</ul>
					</div>
				</nav>
				<div class="container ">
					
					<div class="row btn-group btn-group-justified">
						<div class="col-md-4">
							<div class="container">		
								<button value ="btn_fic_val" class="btn btn-info-dark" id="btn_fic_id"><img src="Images/Fiction.jpg" class="img-responsive" alt="Fiction">Fiction</button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="container">	
								<button value ="btn_ran_val " class="btn btn-info-dark" id="btn_ran_id"><img src="Images/Feeling Lucky.png" class="img-responsive" alt="Feeling Lucky">Feeling Lucky</button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="container">
								<button value="btn_nonfic_val"  class="btn btn-info-dark " id="btn_nonfic_id" ><img src="Images/Non-Fiction.jpg" class="img-responsive" alt="Non-Fiction">Non-Fiction</button>
							</div>
						</div>
					</div>
					
				</div>
				<select id="sl_books" name="sl_books"> 
					<optgroup id="opt_books" label="opt_books">
						
					</optgroup>
				</select>
			</body>
		</html>																