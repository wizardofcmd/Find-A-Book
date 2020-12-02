
$(document).ready(function(){
	$("#sl_books").hide(); 
	$("#viewport").hide();
	$("#initialButtons").hide();
	$("#finalButtons").hide();
	var captcha = document.getElementById("norobot").value;
	console.log("captcha");
	$("#submit-review").hide();
	
	
	
	
	var sys = arbor.ParticleSystem(1000, 400,1);
	sys.parameters({gravity:true});
	sys.renderer = Renderer("#viewport");
	
	
	var items;
	var title_arr; // where array of titles are going to be saved from data
	var auth_arr;
	var categ_arr;
	var img_link_arr;
	var info_link_arr;
	
	
	/*$( "#btn_fic_id" ).click(function() { //if button clicked, do something
		
		
		var book_data = "fantasy"; //creates a new variable and saves it as a hardcoded string
		alert(book_data + " button was clicked"); // for testing purposes
		console.log(book_data);					  // for testing purposes
		
		$.ajax({type: "POST",		
		url: '../php/bookhandler.php',
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
		
		
		// Declare variables with nested childs, ready to be grafted
		
		var b_data={
		nodes:{},
		edges:{}
		
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
		
		
		}
		
		// Insert data from nodes into b_data.nodes
		Object.assign(b_data.nodes,nodes);
		
		
		// Draw b_data and its data into canvas
		sys.graft(b_data);
		
		
		
		/*
		console.log(titles);
		console.log(authors);
		console.log(categories);
		console.log(image_links);
		
		console.log(b_data);
		
		}});
		
		});
	*/
	$( "#btn_nonfic_id" ).click(function() {
		var book_data = "nonfiction";
		//alert(book_data + " button was clicked");
		console.log(book_data);
		
		$.ajax({type: "POST",
			url: '../php/bookhandler.php',
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
				
				
				// Declare variables with nested childs, ready to be grafted
				
				var b_data={
					nodes:{},
					
					
				};
				var genre={
					genre:{
						label:'Non-Fiction',
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
					//nodes['book_item'+i].shape='dot';
					
					
				}
				
				// Insert data from nodes into b_data.nodes
				Object.assign(b_data.nodes,genre);
				Object.assign(b_data.nodes,nodes);
				
				
				
				// Draw b_data and its data into canvas
				sys.graft(b_data);
				
				
				
				/*
					console.log(titles);
					console.log(authors);
					console.log(categories);
					console.log(image_links);
				*/
				console.log(b_data);
				
			}});
	});
	$("#mainFiction").click(function() {
		console.log("here");
		$("#initialButtons").show();
		
	});
	$("#mainNonFiction").click(function() {
		console.log("here");
		$("#initialButtons").show();
		
	});
	$("#showMore1").click(function() {
		console.log("here");
		$("#showMore").hide();
		$("#finalButtons").show();
		
	});
	function enableBtn(){
		document.getElementById("submit").disabled = false;
	}

});