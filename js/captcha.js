function error(){
  alert("Please fill in all fields");
}
$(document).ready(function(){
         	setInterval(function(){
         	grecaptcha.ready(function() {
         	    grecaptcha.execute('6LeyOgAaAAAAAHzYyg8vAl-YZpnisHKTzUBoXs5Y', {action: 'application_form'}).then(function(token) {
         	    	$('#token').val(token);
         	    	$('#action').val('application_form');
         	    });
         	});
         	}, 3000);
          $('#btn_save').click(function(){

            if(($('#bookInput').val() == "")||($('#reviewInput').val() == "")){
              setTimeout(error(),5000);
              console.log("Fields empty");


            }else{
              console.log("Submitting");
              var book = $('#bookInput').val();
              var comment = $('#reviewInput').val();
              var action = $('#action').val();
              var token = $('#token').val();
              $.ajax({
                type:"POST",
                url:"./php/captcha.php",
                dataType:"json",
                data:{
                  book:book,
                  comment:comment,
                  action:action,
                  token:token
                },
                success:function(data){
                  var result = data['success'];
                  if(result == 'true'){
                    savetodatabase();
                  }else{
                    console.log('User is a bot');
                    alert("Please Try Again");
                  }
                }
              });
            }


          })


          function savetodatabase(){
            var data = $('#user_form').serialize() + '&btn_save=btn_save';
            var bName = $('#bookInput').val();
            var uComment = $('#reviewInput').val();
            $.ajax({
              url: 'php/process.php',
              type: 'post',
              data: {bName:bName,uComment:uComment},
              success: function(response) {
                //$('#mesg').text(response);
                $('#bookInput').val('');
                $('#reviewInput').val('');
              }
            });
          }
         });
