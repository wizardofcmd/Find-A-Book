$(document).ready(function() {
  jsarray = JSON.parse(sessionStorage.getItem("jsarray"))
  console.log(jsarray);

  document.getElementById("h_label").innerHTML = jsarray[0];
  document.getElementById("h_desc").innerHTML = jsarray[1];
  document.getElementById("h_author").innerHTML = jsarray[2];
  document.getElementById("h_genre").innerHTML = jsarray[3];
  document.getElementById("h_isbn").innerHTML = jsarray[6];

  var imagelink = jsarray[4].slice(1);
  var infolink = jsarray[5].slice(0);
  infolink[0] += JSON.stringify(infolink);


  $("#h_image").attr("src",imagelink);
  $("#h_image").attr("href",infolink);

});
