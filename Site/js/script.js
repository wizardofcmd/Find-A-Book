function bookSearch(){
	var search =document.getElementById('search').value
	document.getElementById('results').innerHTML=""
	console.log(search)
	
	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+search,
		dataType: "json",
		
		success:function(data){
			for(i=0;i<data.items.length;i++){
				results.innerHTML +="<h2>"+ data.items[i].volumeInfo.title+ "<h2>"
				results.innerHTML +="<h2>"+ data.items[i].volumeInfo.author+ "<h2>"
				img = $('<img class="aligning card z-depth-5" id="dynamic"><br><a href=' + response.items[i].volumeInfo.infoLink + '><button id="imagebutton" class="btn red aligning">Read More</button></a>'); 	
				url= response.items[i].volumeInfo.imageLinks.thumbnail;
			}
		},
		type:'GET'
	});
}
document.getElementById('button').addEventListener('click',bookSearch, false)