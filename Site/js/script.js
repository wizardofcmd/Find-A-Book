//Generate Random letter 
	document.getElementById('randomiser').innerHTML=random(1)
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
   	  random();
	  var url = "";
   	  var img = "";
      var title = "";
      var author = "";  
		$.get("https://www.googleapis.com/books/v1/volumes?q=" + random(),function(response){
           title=$('<h5 class="center-align white-text">' + response.items[i].volumeInfo.title + '</h5>');  
           author=$('<h5 class="center-align white-text"> By:' + response.items[i].volumeInfo.authors + '</h5>');
           img = $('<img class="aligning card z-depth-5" id="dynamic"><br><a href=' + response.items[i].volumeInfo.infoLink + '><button id="imagebutton" class="btn red aligning">Read More</button></a>'); 	
           url= response.items[i].volumeInfo.imageLinks.thumbnail;
           img.attr('src', url);
           title.appendTo('#result');
           author.appendTo('#result');
           img.appendTo('#result');
   	  }); 
   });       

