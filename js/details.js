$(document).ready(function() {
  if((sessionStorage.getItem("ID"))=='1'){

  var jsarray = JSON.parse(sessionStorage.getItem("jsarray"))
  console.log(jsarray);

  document.getElementById("h_label").innerHTML = jsarray[0];
  document.getElementById("h_desc").innerHTML = jsarray[1];
  document.getElementById("h_author").innerHTML = jsarray[2];
  document.getElementById("h_genre").innerHTML = jsarray[3];
  document.getElementById("h_isbn").innerHTML = jsarray[6];
  document.getElementById("h_rating").innerHTML = jsarray[7];


  var imagelink = jsarray[4].slice(1);
  var infolink = jsarray[5].slice(0);
  console.log(imagelink);
  console.log(infolink);



  $("#h_image").attr("src",imagelink);
  a = document.getElementById("h_image_href");
  a.setAttribute("href",infolink);
  //$("#h_image").attr("href",infolink+'"');
}else{


  var jsarray1 = JSON.parse(sessionStorage.getItem("jsarray1"))
  console.log(JSON.stringify(jsarray1));

  document.getElementById("h_label").innerHTML = jsarray1[0];
  document.getElementById("h_desc").innerHTML = jsarray1[1];
  document.getElementById("h_author").innerHTML = jsarray1[2];
  document.getElementById("h_genre").innerHTML = jsarray1[3];
  document.getElementById("h_isbn").innerHTML = jsarray1[6];
  document.getElementById("h_rating").innerHTML = jsarray1[7];


  var imagelink = jsarray1[4].slice(1);
  var infolink = jsarray1[5].slice(0);
  infolink[0] += JSON.stringify(infolink);


  $("#h_image").attr("src",imagelink);
  $("#h_image").attr("href",infolink);
}
});
