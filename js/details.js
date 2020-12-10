$(document).ready(function() {
  jsarray = JSON.parse(sessionStorage.getItem("jsarray"))
  console.log(jsarray);

  document.getElementById("h_label").innerHTML = jsarray[0];
  document.getElementById("h_desc").innerHTML = jsarray[3];
  document.getElementById("h_author").innerHTML = jsarray[1];
  document.getElementById("h_genre").innerHTML = jsarray[2];
  document.getElementById("h_category").innerHTML = jsarray[2];

  var imagelink = jsarray[4].slice(1);

  $("#h_image").attr("src",imagelink);

});
