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
            var book = $('#bookInput').val();
            var comment = $('#reviewInput').val();
            var action = $('#action').val();
            var token = $('#token').val();
            $.ajax({
              type:"POST",
              url:"./php/captcha.php",
              data:{
                book:book,
                comment:comment,
                action:action,
                token:token
              },
              success:function(data){

                if(data == 'success')
              }
            });
          })
         });
