function ajax($this) {
	var book_data = $this.attr('name');
	console.log(book_data);
	var sys = arbor.ParticleSystem(1000, 400,1);
	sys.parameters({gravity:true});
	sys.renderer = Renderer("#viewport");

	var items;
	var title_arr; // where array of titles are going to be saved from data
	var auth_arr;
	var categ_arr;
	var img_link_arr;
	var info_link_arr;
	var isbn_arr;

	$.ajax({
        type: "POST",
        url: 'static/php/bookhandler.php',
        dataType: 'json',
        data: {bookdata: book_data},
        success: function (data) {
		sys.width += 0;

			for (var i = 0; i < data.length; i++) {// for # of books retrieved, create long string of all titles/authors/categories/etc.
				title_arr += data[i].title+"||"; //gets data from json for every variable
				auth_arr += JSON.stringify(data[i].authors)+"||"; // have to stringify because its an object
				categ_arr += JSON.stringify(data[i].categories)+"||";
				img_link_arr += data[i].imageLinks+"||";
				info_link_arr += data[i].infoLink+"||";
				isbn_arr += JSON.stringify(data[i].industryIdentifiers)+"||";
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

		},
		fail: function(xhr, textStatus, errorThrown){
			alert('request failed');
		}
	});
}

$(document).ready(function(){
	$("#ficInitialButtons").hide();
	$("#nonficInitialButtons").hide();
	$("#ficFinalButtons").hide();
	$("#nonficFinalButtons").hide();
	$("#submit-review").hide();

	var whichgenre;
	$("#mainFiction").click(function() {
		console.log("here");
		$("#nonficInitialButtons").hide();
		$("#nonficShowMore").hide();
		$("#nonficFinalButtons").hide();
		$("#ficInitialButtons").show();
		$("#ficShowMore").show();

	});
	$("#mainNonFiction").click(function() {
		console.log("here");
		$("#ficInitialButtons").hide();
		$("#ficShowMore").hide();
		$("#ficFinalButtons").hide();
		$("#nonficInitialButtons").show();
		$("#nonficShowMore").show();

	});
	$("#showMore1").click(function() {
		console.log("here");
		$("#ficShowMore").hide();
		$("#ficFinalButtons").show();
		$("#ficShowLess").show();


	});
	$("#showMore2").click(function() {
		console.log("here");
		$("#nonficShowMore").hide();
		$("#nonficFinalButtons").show();

	});
	$("#showLess1").click(function(){
		$("#ficShowMore").show();
		$("#ficFinalButtons").hide();
		$("#ficShowLess").hide();
	});
	$("#showLess2").click(function(){
		$("#nonficShowMore").show();
		$("#nonficFinalButtons").hide();
		$("#nonficShowLess").hide();
	});



});
