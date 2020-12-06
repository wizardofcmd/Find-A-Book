//Generate Random letter 
	document.getElementById('btn_ran_id').innerHTML=random(1);
	  function random(string_length){
		var random_string='';
		var character="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		for (var i,i=0;i<string_length;i++){
			random_string+=character.charAt(Math.floor(Math.random()*character.length))
		}
		return random_string;
	  }
//insert Random letter into search
	function findString({
	var sys = arbor.ParticleSystem(1000, 400,1);
	sys.parameters({gravity:true});
	sys.renderer = Renderer("#viewport1");
	var items;
	var title_arr; // where array of titles are going to be saved from response
	var auth_arr;
	var categ_arr;
	var img_link_arr;
	var info_link_arr;
	var isbn_arr;
   	  random(13);
	  var url = "";
   	  var img = "";
      var title = "";
      var author = "";  
		$.get("https://www.googleapis.com/books/v1/volumes?q=" + random(),function(response){
           for (var i = 0; i < response.length; i++) {// for # of books retrieved, create long string of all titles/authors/categories/etc.
				title_arr += response[i].title+"||"; //gets response from json for every variable
				auth_arr += JSON.stringify(response[i].authors)+"||"; // have to stringify because its an object
				categ_arr += JSON.stringify(response[i].categories)+"||";
				img_link_arr += response[i].imageLinks+"||";
				info_link_arr += response[i].infoLink+"||";
				isbn_arr += JSON.stringify(response[i].industryIdentifiers)+"||";
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
			// Populate a variable with the book items
			var nodes ={};
			for (var i = 0; i < response.length -1; i++) {
				nodes['book_item'+i]={};
				nodes['book_item'+i].label=titles[i];
				nodes['book_item'+i].author=authors[i];
				nodes['book_item'+i].category=categories[i];
				nodes['book_item'+i].image=image_links[i];
				nodes['book_item'+i].shape='dot';	
				//nodes['book_item'+i].color=;
			}
			Object.assign(b_data.nodes,nodes);// Insert response from nodes into b_data.nodes
			
			sys.graft(b_data);// Draw b_data and its response into canvas
			sys.prune(b_data);
			console.log(b_data);// for testing
			
   	  }); 
   });       

