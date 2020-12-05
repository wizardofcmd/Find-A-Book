$(document).ready(function() {
	$( "#btn_ran_id" ).click(function() {
		var items;
		var title_arr; // where array of titles are going to be saved from data
		var auth_arr;
		var categ_arr;
		var img_link_arr;
		var info_link_arr;
		var sys = arbor.ParticleSystem(1000, 400,1);
		sys.parameters({gravity:true});
		sys.renderer = Renderer("#viewport1");
		
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
			url: './php/randhandler.php',
			data: {bookdata: book_data},  
			dataType: 'json',
			
			success: function(data){
				
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
				
				

				for (var i = 0; i < data.length; i++) {// for # of books retrieved, create long string of all titles/authors/categories/etc.
					title_arr += data[i].title+"||"; //gets data from json for every variable
					auth_arr += JSON.stringify(data[i].authors)+"||"; // have to stringify because its an object
					categ_arr += JSON.stringify(data[i].categories)+"||";
					img_link_arr += data[i].imageLinks+"||";
					info_link_arr += data[i].infoLink+"||";
					//isbn_arr += JSON.stringify(data[i].industryIdentifiers)+"||";
				}
				
				// list of arrays
				var titles = title_arr.split('||');var titles_undef = titles[0]; // to remove 'undefined' as part of string
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
				//var isbns = isbn_arr.split('||');
				//var isbns_undef = isbns
				
				var b_data={nodes:{},}; // Declare variables with nested childs, ready to be grafted
				var genre={
					genre:{
						label:book_data,
						color:'orange'
					}
				};
				// Populate a variable with the book items
				var nodes ={};
				for (var i = 0; i < data.length -1; i++) {
					nodes['book_item'+i]={};
					nodes['book_item'+i].label=titles[i];
					nodes['book_item'+i].author=authors[i];
					nodes['book_item'+i].category=categories[i];
					nodes['book_item'+i].image=image_links[i];
					nodes['book_item'+i].shape='dot';	
					//nodes['book_item'+i].color=;
				}
				Object.assign(b_data.nodes,genre);
				Object.assign(b_data.nodes,nodes);// Insert data from nodes into b_data.nodes
				
				sys.graft(b_data);// Draw b_data and its data into canvas
				sys.prune(b_data);
				console.log(b_data);// for testing
			}}); 
	});
});