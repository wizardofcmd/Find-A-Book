function ajax($this) {
  var book_data = $this.attr('name');
  console.log(book_data);
  var sys = arbor.ParticleSystem(10, 400, 1);
  sys.parameters({
    gravity: false,
    repulsion: 150
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
  var desc_arr;

  $.ajax({
    type: "POST",
    url: './php/bookhandler.php',
    dataType: 'json',
    data: {
      bookdata: book_data
    },
    success: function(data) {
      // Declare variables with nested childs, ready to be grafted
      var data = data;


      //console.log("aaaa");
      for (var i = 0; i < data.length; i++) { // for # of books retrieved, create long string of all titles/authors/categories/etc.
        if (data[i].title) {
          title_arr += data[i].title + "||";
        } else {
          title_arr += "No Title Given" + "||";
        }
        //gets data from json for every variable

        if (data[i].authors) {
          // have to stringify because its an object
          auth_arr += JSON.stringify(data[i].authors) + "||";
        } else {
          auth_arr += "No Author Given" + "||";
        }


        if (data[i].categories) {
          categ_arr += JSON.stringify(data[i].categories) + "||";
        } else {
          categ_arr += "Undefined Category"
        }



//large
        if (data[i].imageLinks) {
          if (data[i].imageLinks['thumbnail']) {
            img_link_arr += JSON.stringify(data[i].imageLinks.thumbnail) + "||";
          } else {
            img_link_arr += "../assets/img/icon.png" + "||";
          }
        } else {
          img_link_arr += "../assets/img/icon.png" + "||";
        }
//small
        if (data[i].imageLinks) {
          if (data[i].imageLinks['smallThumbnail']) {
            img_link_arr1 += JSON.stringify(data[i].imageLinks.smallThumbnail) + "||";
          } else {
            img_link_arr1 += "♥./assets/img/icon.png" + "||";
          }
        } else {
          img_link_arr1 += "♥./assets/img/icon.png" + "||";
        }



        if (data[i].infoLink) {
          info_link_arr += data[i].infoLink + "||";
        }

        if (data[i].industryIdentifiers) {
          if(data[i].industryIdentifiers[0]['identifier']){
          isbn_arr += JSON.stringify(data[i].industryIdentifiers[0]['identifier']) + "||";
        } else {
          isbn_arr += "No ISBNaaa" + "||";
        }
      } else{
        isbn_arr += "No ISBN" + "||";
      }

        if (data[i].description) {
          desc_arr += JSON.stringify(data[i].description) + "||";
        } else {
          desc_arr += "No description" + "||";
        }

      }

      // list of arrays                                                                                                                                          Pretty terrible way of solving
      var titles = title_arr.split('||');
      var titles_undef = titles[0]; /* to remove 'undefined' as part of string*/
      titles_undef = titles_undef.substring(9); /* removes 9 characters from the start: u n d e f i n e d*/
      titles[0] = titles_undef; /* replaces first index*/
      var authors = auth_arr.split('||'); /* split long string into array elements*/
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
      var image_links1 = img_link_arr1.split('||');
      var image_links_undef1 = image_links1[0];
      image_links_undef1 = image_links_undef1.substring(9);
      image_links1[0] = image_links_undef1;
      var info_links = info_link_arr.split('||');
      var info_links_undef = info_links[0];
      info_links_undef = info_links_undef.substring(9);
      info_links[0] = info_links_undef;
      var isbns = isbn_arr.split('||');
      var isbns_undef = isbns[0];
      isbns_undef = isbns_undef.substring(9);
      isbns[0] = isbns_undef;
      var descriptions = desc_arr.split('||');
      var descriptions_undef = descriptions[0];
      descriptions_undef = descriptions_undef.substring(9);
      descriptions[0] = descriptions_undef;

      var y = image_links1.map(s => s.slice(1));
      console.log(y);
      console.log(image_links);

      var arrColour = [];
      // Populate a variable with the book items
      var nodes = {};
      var randomColor;

      // Script to geneterate random colours
      for (var i = 0; i <= data.length - 1; i++) {
        randomColor = (Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0');
        arrColour.push(randomColor);
      }
      //console.log(arrColour);

      var b_data = {
        nodes: {},
        edges: {
          genre: {}
        }
      };
      var genre = {
        genre: {
          label: book_data,
          color: 'orange'
        }
      };
      var edges = {
        genre: {}
      };

      console.log(edges);
      for (var i = 0; i < data.length - 1; i++) {

        nodes['book_item' + i] = {};
        nodes['book_item' + i].label = titles[i];
        nodes['book_item' + i].author = authors[i];
        nodes['book_item' + i].category = categories[i];
        nodes['book_item' + i].imageL = image_links[i];
        nodes['book_item' + i].imageS = y[i];
        nodes['book_item' + i].shape = 'dot';
        nodes['book_item' + i].isbn = isbns[i];
        nodes['book_item' + i].color = '#' + arrColour[i]; //add 2 hex digits to determine opacity of colour
        nodes['book_item' + i].desc = descriptions[i];
        nodes['book_item' + i].info = info_links[i];
        edges['genre']['book_item' + i] = {};
        edges['genre']['book_item' + i].length = 1;

      }

      Object.assign(b_data.nodes, nodes);
      Object.assign(b_data.edges, edges);
      Object.assign(b_data.nodes, genre); // assign genre last so its on top of all the nodes

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
  canvas.class = "model-content"
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
