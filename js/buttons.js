function ajax($this) {
  var book_data = $this.attr('name');
  console.log(book_data);
  var sys = arbor.ParticleSystem(10, 400, 1);
  sys.parameters({
    gravity: true
  });
  sys.renderer = Renderer("#viewport");

  var items;
  var title_arr; // where array of titles are going to be saved from data
  var auth_arr;
  var categ_arr;
  var img_link_arr;
  var img_link_arr1;
  var info_link_arr;
  var isbn_arr;

  $.ajax({
    type: "POST",
    url: './php/bookhandler.php',
    dataType: 'json',
    data: {
      bookdata: book_data
    },
    success: function(data) {
      var b_data = {
        nodes: {},
        edges:{}
      }; // Declare variables with nested childs, ready to be grafted

      for (var i = 0; i <= 10; i++) {
        //console.log("testtt");
        sys.prune(function(node, from, to) {
          return true;
        });

      }
      //console.log("aaaa");
      for (var i = 0; i < data.length; i++) { // for # of books retrieved, create long string of all titles/authors/categories/etc.
        if (data[i].title != null) {
          title_arr += data[i].title + "||";
        }
        //gets data from json for every variable

        if (data[i].authors != null) {
          // have to stringify because its an object
          auth_arr += JSON.stringify(data[i].authors) + "||";
        }

        if (data[i].categories != null) {
          categ_arr += JSON.stringify(data[i].categories) + "||";
        }

        if (data[i].imageLinks != null) {
          img_link_arr += JSON.stringify(data[i].imageLinks.thumbnail) + "||";
          img_link_arr1 += JSON.stringify(data[i].imageLinks.smallThumbnail) + "||";
        }


        if (data[i].infoLink != null) {
          info_link_arr += data[i].infoLink + "||";
        }

        if (data[i].industryIdentifiers != null) {
          isbn_arr += JSON.stringify(data[i].industryIdentifiers) + "||";
        }

      }

      // list of arrays
      var titles = title_arr.split('||');var titles_undef = titles[0]; /* to remove 'undefined' as part of string*/titles_undef = titles_undef.substring(9); /* removes 9 characters from the start: u n d e f i n e d*/titles[0] = titles_undef; /* replaces first index*/
      var authors = auth_arr.split('||'); /* split long string into array elements*/var authors_undef = authors[0];authors_undef = authors_undef.substring(9);authors[0] = authors_undef;
      var categories = categ_arr.split('||');var categories_undef = categories[0];categories_undef = categories_undef.substring(9);categories[0] = categories_undef;
      var image_links = img_link_arr.split('||');var image_links_undef = image_links[0];image_links_undef = image_links_undef.substring(9);image_links[0] = image_links_undef;
      var image_links1 = img_link_arr1.split('||');var image_links_undef1 = image_links1[0];image_links_undef1 = image_links_undef1.substring(9);image_links1[0] = image_links_undef1;
      var info_links = info_link_arr.split('||');var info_links_undef = info_links[0];info_links_undef = info_links_undef.substring(9);info_links[0] = info_links_undef;
      var isbns = isbn_arr.split('||');var isbns_undef = isbns[0];isbns_undef = isbns_undef.substring(9);isbns[0] = isbns_undef;



      var arrColour = [];
      // Populate a variable with the book items
      var nodes = {};
      var randomColor;

      // Script to geneterate random colours
      for (var i=0; i<= data.length-1; i++){
        randomColor = (Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0');
        arrColour.push(randomColor);
      }
      //console.log(arrColour);
      var genre = {
        genre: {
          label: book_data,
          color: 'orange'
        }
      };

      var edgeGenre = {
        edgeGenre : {
          label: book_data,
          color: 'orange'
        }
      }
      var edges = {
        edges : {

        }
      };

      Object.assign(edges.edges, genre);
      console.log(edges);
      for (var i = 0; i < data.length - 1; i++) {

        nodes['book_item' + i] = {};
        nodes['book_item' + i].label = titles[i];
        nodes['book_item' + i].author = authors[i];
        nodes['book_item' + i].category = categories[i];
        nodes['book_item' + i].imageL = image_links[i];
        nodes['book_item' + i].imageS = image_links1[i];
        nodes['book_item' + i].shape = 'dot';
        nodes['book_item' + i].isbn = isbns[i];
        nodes['book_item' + i].color = '#FA'+arrColour[i]; //add 2 hex digits to determine opacity of colour


      }
      Object.assign(b_data.nodes, genre);
      Object.assign(b_data.nodes, nodes);
       // Insert data from nodes into b_data.nodes

      sys.graft(b_data); // Draw b_data and its data into canvas
      //sys.addNode("home", {shape:'dot',label:"请输入30位追溯码", alpha:'1', color: colors[0], expanded: true});
      console.log(b_data); // for testing

    },
    fail: function(xhr, textStatus, errorThrown) {
      alert('Request Failed');
    }


  });
}
// Have a function that creates element instead to refresh canvas
function loadcanvas(id) {
  var canvas = document.createElement('canvas');
  var div = document.getElementById(id)
  canvas.id = "viewport";
  canvas.width = "1108";
  canvas.height = "688";
  canvas.class = "row";
  div.appendChild(canvas);
}
// Still don't know how to refresh so instead, delete the canvas
function absolutelyDestroyCanvas(id) {
  var elem = document.getElementById(id);
  elem.parentNode.removeChild(elem);
}
$(document).ready(function() {

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
  $("#showLess1").click(function() {
    $("#ficShowMore").show();
    $("#ficFinalButtons").hide();
    $("#ficShowLess").hide();
  });
  $("#showLess2").click(function() {
    $("#nonficShowMore").show();
    $("#nonficFinalButtons").hide();
    $("#nonficShowLess").hide();
  });




});
