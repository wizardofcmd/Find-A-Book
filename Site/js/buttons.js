	
			$(document).ready(function(){
				$("#sl_books").hide(); 
				$("#viewport").hide();
				
				var captcha = document.getElementById("norobot").value;
				console.log("captcha");
				$("#reviewInput").hide();
				//$("#bookInput").hide();
				//$("#emailHelp").hide();
				
				var sys = arbor.ParticleSystem(1000, 400,1);
				sys.parameters({gravity:true});
				sys.renderer = Renderer("#viewport");
				
				
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
							
							
							console.log(data);
							
							var select = document.getElementById('opt_books'); // create javascript variable based on existing html tag
							$(select).html('');
							for (var i in data) { // move through data sent from bookhandler.php
								$(select).append('<option value=' + data[i] + '>' + data[i]['title'] + '</option>'); // for every index create HTML as follows and append to chosen html tag
								bk_desc[i] = data[i]['description'];
							}
							
						}});
						
				});
				
				$( "#btn_nonfic_id" ).click(function() {
					var book_data = "nonfiction";
					//alert(book_data + " button was clicked");
					console.log(book_data);
					
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
							var i;
							var book_item={};
							var b_data={
								nodes:[{}
								]
								
							}
							
							for(i=0;i <= data.length;i++){
								b_data.nodes.push({
									book_item:{
										'title': titles[i],
										'author': authors[i],
										'category': categories[i],
										'imageLinks': image_links[i],
										'infoLink': info_links[i],
										'label':titles[i],
										'shape':'dot',
										'colour':'red'
									}
								});
							}
							
							sys.graft(b_data);
							
							
							
							/*console.log(titles);
								console.log(authors);
								console.log(categories);
							console.log(image_links);*/
							console.log(b_data);
							
							
							document.getElementById("demo").innerHTML = titles;
							
						}});
				});
						
			});