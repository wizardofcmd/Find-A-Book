$(document).ready(function(){	

		
  $("#myform").submit(function(){
   	  var search = randomLetter;	
   	  var url = "";
   	  var img = "";
      var title = "";
      var author = "";
		$.get("https://www.googleapis.com/books/v1/volumes?q=" + search,function(response){
		
   	  
          for(i=0;i<response.items.length;i++)
          {
           title=$('<h5 class="center-align white-text">' + response.items[i].volumeInfo.title + '</h5>');  
           author=$('<h5 class="center-align white-text"> By:' + response.items[i].volumeInfo.authors + '</h5>');
           img = $('<img class="aligning card z-depth-5" id="dynamic"><br><a href=' + response.items[i].volumeInfo.infoLink + '><button id="imagebutton" class="btn red aligning">Read More</button></a>'); 	
           url= response.items[i].volumeInfo.imageLinks.thumbnail;
           img.attr('src', url);
           title.appendTo('#result');
           author.appendTo('#result');
           img.appendTo('#result');
          }
   	  });
 
    });

 
//have random letter be inputed into searchbar 
			function randomLetter() {
				const alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"
				return alphabet[Math.floor(Math.random() * alphabet.length)]
			}
		});