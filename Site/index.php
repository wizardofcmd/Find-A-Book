<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>FindABook Home</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<!-- Arbor.js  -->
		<script src="./scripts/jquery-1.6.1.min.js"></script>
		<script src="./scripts/arbor.js"></script>
		<script src="./scripts/graphics.js"></script>
		<script src="./scripts/renderer.js"></script>
		<script> 
			
			$(document).ready(function(){
				$("#sl_books").hide(); 
				$("#viewport").hide();
				
				$( "#btn_fic_id" ).click(function() { //if button clicked, do something
					var book_data = "fantasy"; //creates a new variable and saves it as a hardcoded string
					alert(book_data + " button was clicked"); // for testing purposes
					console.log(book_data);					  // for testing purposes
					
					$.ajax({type: "POST",		
						url: './php/bookhandler.php',
						data: {bookdata: book_data},
						dataType: 'json',
						
						success: function(data){
							$("#sl_books").show();
							$("#viewport").show();
							console.log(data);
							
							var select = document.getElementById('opt_books'); // create javascript variable based on existing html tag
							$(select).html('');
							for (var i in data) { // move through data sent from bookhandler.php
								$(select).append('<option value=' + data[i] + '>' + data[i]['volumeInfo'] + '</option>'); // for every index create HTML as follows and append to chosen html tag							
							}
							
						}});
						
				});
				/*$( "#btn_ran_id" ).click(function() {
					
					
					
					var book_data = "romance"; // Needs a randomizer that saves 'book_data' as a random string 
					
					
					
					alert(book_data);
					console.log(book_data);
					
					
					$.ajax({type: "POST",
						url: './php/bookhandler.php',
						data: {ran_data: book_data},  
						dataType: 'json',
						
						success: function(data){
						console.log(data);
						
					}}); 
				});*/
				$( "#btn_nonfic_id" ).click(function() {
					var book_data = "nonfiction";
					alert(book_data + " button was clicked");
					console.log(book_data);
					
					$.ajax({type: "POST",
						url: './php/bookhandler.php',
						data: {bookdata: book_data},
						dataType: 'json',
						
						success: function(data){
							$("#sl_books").show();
							$("#viewport").show();
							console.log(data);
							
							var select = document.getElementById('opt_books'); // create javascript variable based on existing html tag
							$(select).html('');
							for (var i in data) { // move through data sent from bookhandler.php
								$(select).append('<option value=' + data[i] + '>' + data[i]['title'] + '</option>'); // for every index create HTML as follows and append to chosen html tag							
							}
						}});
				});
				
				/*
					TO BE OPTIMIZED
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
						<a href="FeelingLucky/FeelingLucky.html">
							<button value ="btn_ran_val " class="btn btn-info-dark" id="btn_ran_id"><img src="Images/Feeling Lucky.png" class="img-responsive" alt="Feeling Lucky">Feeling Lucky</button>
						</a>
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
				<optgroup id="opt_books" label="test_book_titles"></optgroup>
			</select>
			<!-- Arbor.js -->
				<canvas id="viewport" width="800" height="600"></canvas>
				<script language="javascript" type="text/javascript">
					var sys = arbor.ParticleSystem(1000, 400,1);
					sys.parameters({gravity:true});
					sys.renderer = Renderer("#viewport");
					
					var data = {
						nodes:{
							animals:{'color':'red','shape':'dot','label':'This'},
							dog:{'color':'green','shape':'dot','label':'is'},
							cat:{'color':'blue','shape':'dot','label':'for'},
							toy:{'color':'pink','shape':'dot','label':'testing'}
						},
						edges:{
							animals:{ dog:{'color':'green'}, cat:{},toy:{}},
							dog:{ cat:{}}
						}
					};
					sys.graft(data);
					
					setTimeout(function(){
						var postLoadData = {
							nodes:{
								joe:{'color':'orange','shape':'dot','label':'purposes'},
								fido:{'color':'green','shape':'dot','label':'only'},
								fluffy:{'color':'blue','shape':'dot','label':':D'}
							},
							edges:{
								dog:{ fido:{} },
								cat:{ fluffy:{} },
								joe:{ fluffy:{},fido:{} }
							}
						};
					sys.graft(postLoadData);});
				</script>
		</body>
	</html>																		