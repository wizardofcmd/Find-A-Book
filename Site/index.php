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
				
				var items;
				var title_arr; // where array of titles are going to be saved from data
				var auth_arr;
				var categ_arr;
				var img_link_arr;
				var info_link_arr;
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
							//console.log(data);
							
							
							
							// for # of books retrieved, create long string of all titles/authors/categories/etc.
							for (var i = 0; i < data.length - 1 ; i++) {
								title_arr += data[i].title+"||"; //gets data from json for every variable
								auth_arr += JSON.stringify(data[i].authors)+"||"; // have to stringify because its an object
								categ_arr += JSON.stringify(data[i].categories)+"||";
								img_link_arr += data[i].imageLinks.thumbnail+"||";
								info_link_arr += data[i].infoLink+"||"; 
							}
							
							var select = document.getElementById('opt_books'); // create javascript variable based on existing html tag
							$(select).html('');
							for (var i in data) { // move through data sent from bookhandler.php
								
								$(select).append('<option value=' + data[i] + '>' + data[i]['title'] + '</option>'); // for every index create HTML as follows and append to chosen html tag							
								
								
							}
							
							// list of arrays
							var titles = title_arr.split('||');
							var titles_undef = titles[0]; // to remove 'undefined' as part of string
							titles_undef = titles_undef.substring(9); // removes 9 characters from the start: u n d e f i n e d
							titles[0] = titles_undef; // replaces first index
							
							var authors = auth_arr.split('||'); // split long string into array elements
							var authors_undef = authors[0];
							authors_undef = authors_undef.substring(9);
							authors[0] = authors_undef;
							
							var categories = categ_arr.split('||');
							var categories_undef = categories[0];
							categories_undef = categories_undef.substring(9);
							categories[0] = categories_undef;
							
							var image_links = img_link_arr.split('||');
							var image_links_undef = image_links[0];
							image_links_undef = image_links_undef.substring(9);
							image_links[0] = image_links_undef;
							
							var info_links = info_link_arr.split('||');
							var info_links_undef = info_links[0];
							info_links_undef = info_links_undef.substring(9);
							info_links[0] = info_links_undef;
							
							// creates book objects aka maps using title as the 'primary key'
							
							
							items = titles.map((title, i) => {
								return {
									title: title,
									author: authors[i],
									category: categories[i],
									imageLinks: image_links[i],
									infoLink: info_links[i]
									
								}
							});
							
							
							/*console.log(titles);
								console.log(authors);
								console.log(categories);
								console.log(image_links);
							console.log(data);*/
							
							console.log(items);
							document.getElementById("demo").innerHTML = titles;
						}});
				});
				
				
				
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
							
							
							// list of arrays
							var titles = title_arr.split('||');
							var titles_undef = titles[0]; // to remove 'undefined' as part of string
							titles_undef = titles_undef.substring(9); // removes 9 characters from the start: u n d e f i n e d
							titles[0] = titles_undef; // replaces first index
							
							var authors = auth_arr.split('||'); // split long string into array elements
							var authors_undef = authors[0];
							authors_undef = authors_undef.substring(9);
							authors[0] = authors_undef;
							
							var categories = categ_arr.split('||');
							var categories_undef = categories[0];
							categories_undef = categories_undef.substring(9);
							categories[0] = categories_undef;
							
							var image_links = img_link_arr.split('||');
							var image_links_undef = image_links[0];
							image_links_undef = image_links_undef.substring(9);
							image_links[0] = image_links_undef;
							
							var info_links = info_link_arr.split('||');
							var info_links_undef = info_links[0];
							info_links_undef = info_links_undef.substring(9);
							info_links[0] = info_links_undef;
							
							// creates book objects aka maps using title as the 'primary key'
							items = titles.map((title, i) => {
								return {
									title: title,
									author: authors[i],
									category: categories[i],
									imageLinks: image_links[i],
									infoLink: info_links[i]
								}
							});
							
							
							/*console.log(titles);
								console.log(authors);
								console.log(categories);
								console.log(image_links);
							console.log(data);*/
							
							console.log(items);
							document.getElementById("demo").innerHTML = titles;
							
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
				
				var sys = arbor.ParticleSystem(1000, 400,1);
				sys.parameters({gravity:true});
				sys.renderer = Renderer("#viewport");
				
				
				var data = {
					
					
					nodes:{
						/*for (var i = 0; i < items.length - 1 ; i++) {
							items[i]['title']:{'color':'red','shape':'dot'}
							
						}*/
						
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
							testic:{ fido:{} },
							cat:{ fluffy:{} },
							joe:{ fluffy:{},fido:{}}
						}
					};
					sys.graft(postLoadData);
				});
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
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
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
			
			
			
			<p id="demo"></p>
			
			<!-- Arbor.js -->
			<canvas id="viewport" width="800" height="600"></canvas>
			
		</body>
	</html>																																							
	
	
