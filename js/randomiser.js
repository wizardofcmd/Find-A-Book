	$(document).ready(function() {
			
			
			$( "#btn_ran_id" ).click(function() {
			var items;
			var title_arr; // where array of titles are going to be saved from data
			var auth_arr;
			var categ_arr;
			var img_link_arr;
			var info_link_arr;
			
			var random_string='';
			var character="abcdefghijklmnopqrstuvwxyz1234567890";
			for (var i,i=0;i<1;i++){
				random_string+=character.charAt(Math.floor(Math.random()*character.length))
			}
			book_data = random_string;
			
			//alert(book_data);//for testing Purposes
			console.log(book_data);
			
			// broken link, book_data value changed
			$.ajax({type: "POST",
				url: '../php/randhandler.php',
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
						img_link_arr +=JSON.stringify(data[i].imageLinks.thumbnail)+"||";
						info_link_arr += data[i].infoLink+"||"; 
						}
							var titles = title_arr.split('||');
							var titles_undef = titles[0]; // to remove 'undefined' as part of string
							titles_undef = titles_undef.substring(9); // removes 9 characters from the start: u n d e f i n e d
							titles[0] = titles_undef; // replaces first index
							console.log(title_arr);
							
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
					
					
					var select = document.getElementById('result'); // create javascript variable based on existing html tag
					$(select).html('');
						for (var i in data) { // move through data sent from bookhandler.php
						$(select).append('</br><img href='+info_links[i]+' src='+image_links[i]+'/>');		
						$(select).append('<option value=' + titles[i] + '>' + titles[i] + '</option>'); // for every index create HTML as follows and append to chosen html tag	
						$(select).append('<option value=' + data[i] + '>' + authors[i] + '</option>');
						
						
							}
				}}); 
						});
	});