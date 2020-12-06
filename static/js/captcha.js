


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
    'url' : './php/verify.php',
    'type' : 'POST',
    'data' : {
        'response' : response
    },
    'success' : function(data) {
        alert('Data: '+data);
        resolve();
		document.getElementById("action").disabled = true;
    },
    'error' : function(request,error)
    {
        alert("Request: "+JSON.stringify(request));
        reject();
    }
    });
    grecaptcha.reset();

  }); //end promise
}
