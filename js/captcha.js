


function callback(){
	document.getElementById("action").disabled = false;
  return new Promise(function(resolve, reject) {  

    if (grecaptcha === undefined) {
        alert('Recaptcha undefined'); 
        //return;
        reject();
    }

    var response = grecaptcha.getResponse();
    console.log(response);

    if (!response) {
        alert('Coud not get recaptcha response'); 
        //return;
        reject();
    }

    $.ajax({
    'url' : 'php/verify.php',
    'type' : 'POST',
    'data' : {
        'response' : response   
    },
    'success' : function(data) {              
        console.log("success "+'Data: '+data);
        resolve();
				
    },
    'error' : function(request,error)
    {
        alert("error"+"Request: "+JSON.stringify(request));
        reject();   
    }
    });
    grecaptcha.reset();

  }); //end promise

function enableBtn(){
	if (!response==='success'){
		document.getElementById("action").disabled = true;
	}
	
}
}