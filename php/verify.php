<?php
//Sending POST Request
if(isset($_POST['submit']))
{
	$title=$_POST['bName']
	$review=$_POST['uComment'];
	
	  $secretKey = "6LeEYOcZAAAAAEkkR7L1pcm_Mx5LEsvFvZsIRM3G";
       $responseKey = $_POST['g-recaptcha-response'];
       $userIP = $_SERVER['REMOTE_ADDR']; //optional    
       $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
       $response = file_get_contents($url);
       $response = json_decode($response);
		echo$response;
    if ($response->success) {
        //If the user has checked the Captcha box
        echo 'success';
		
	
    } else {
        // If the CAPTCHA box wasn't checked
       echo 'error';
    }
	
}
 
?>
