<?php 
session_start(); 
include_once $_SERVER['DOCUMENT_ROOT'] . '/web/FrontTheme/securimage/securimage.php';
$securimage = new Securimage();

include_once("../php/reg.php");
$regObj = new reg();

?>

<head>

<link rel="stylesheet" href="securimage/securimage.css" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-css-->
  <link rel="stylesheet" href="intl-tel-input-master/build/css/intlTelInput.css">
  <link rel="stylesheet" href="intl-tel-input-master/build/css/demo.css">

</head>

<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
  <div class="panel-heading">Member Registeration</div>
  <div class="panel-body">
<form method="post" action="" id="form">
	
	<div class="form-group">
			<label for="name">Member Code</label>
			<input type="hidden" name="uCode" id="uCode">
			<input type="hidden" name="activationCode" id="activationCode">
			
			<input type="text" id="userCode" name="userCode" class="form-control" disabled="" >
			</div>


		<div class="form-group">
			<label for="name">Full Name</label>
			<input type="text" name="name" id="name" class="form-control" minlength="3" placeholder="Full Name" required="">
			</div>

		

		<div class="form-group">
			<label for="email">Email Address</label>
			<input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required="">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" minlength="8" class="form-control" placeholder="Password" required="">
		</div>

		<div class="form-group">
			<label for="confirmPassword">Confirm Password</label>
			<input type="password" name="confirmPassword" id="confirmPassword" minlength="8" class="form-control" placeholder="Confirm Password" required="">
		</div>

<div class="form-group">
			<label for="phone" style="display: block;">Phone #</label>
			<!-- <input type="number" name="phone" class="form-control" placeholder="Phone#" required=""> -->
			 <input type="hidden" id="phone2" name="phone"/>
			<input id="phone" name="phoneNo" type="number"  class="form-control" required="">
		</div>
		

<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />


<br>
<a href="#" onclick="if (typeof window.captcha_image_audioObj !== 'undefined') captcha_image_audioObj.refresh(); document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">
<img height="32" width="32" src="securimage/images/refresh.png" alt="Refresh Image" onclick="this.blur()" style="border: 0px; vertical-align: bottom">
</a>
<div id="captcha_image_audio_div">
<audio id="captcha_image_audio" preload="none" style="display: none">
<source id="captcha_image_source_wav" src="securimage/securimage_play.php?id=5d2cb1b3f1ed3" type="audio/wav">
<br></audio>
</div>
<div id="captcha_image_audio_controls">
<a tabindex="-1" class="captcha_play_button" href="securimage/securimage_play.php?id=5d2cb1b3f1ee9" onclick="return false">
<img class="captcha_play_image" height="32" width="32" src="securimage/images/audio_icon.png" alt="Play CAPTCHA Audio" style="border: 0px; margin-top: -30px;margin-left: 60px;">
<img class="captcha_loading_image rotating" height="32" width="32" src="securimage/images/loading.png" alt="Loading audio" style="display: none;margin-top: -30px;margin-left: 60px;">
</a>
<noscript>Enable Javascript for audio controls</noscript>
</div>
<script type="text/javascript" src="securimage/securimage.js"></script>
<script type="text/javascript">captcha_image_audioObj = new SecurimageAudio({ audioElement: 'captcha_image_audio', controlsElement: 'captcha_image_audio_controls' });</script>

<input type="text" id="capCha" name="captcha_code" size="10" maxlength="6" placeholder="Type Image Text" required="" />
<br></br>

<!-- Default unchecked -->
<div class="custom-control custom-checkbox">
    <input type="checkbox" name="accept" class="custom-control-input" id="accept" style="width: 21px;">
    <label class="custom-control-label" for="defaultUnchecked">Accept <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy Policy</a></label>
</div>
<h4 id="FormMsg" class="alert alert-danger"></h4>
<br></br>
	

	
			<div class="form-group">
				<input type="submit" id="submit" name="submit" class="btn btn-primary btn-block"  value="Submit">
			</div>

			<div class="form-group">
				<a href="home.php">already have an account?</a>
			</div>

</form>
  </div>
</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	function generate(n) {
        var add = 1, max = 12 - add;   // 12 is the min safe number Math.random() can generate without it starting to pad the end with zeros.   

        if ( n > max ) {
                return generate(max) + generate(n - max);
        }

        max        = Math.pow(10, n+add);
        var min    = max/10; // Math.pow(10, n) basically
        var number = Math.floor( Math.random() * (max - min + 1) ) + min;

        return ("" + number).substring(add); 
}
	var random = generate(6);
	var userCode = "ABC-"+random;
	document.getElementById('userCode').value = userCode;	
	document.getElementById('uCode').value = userCode;
	var activationCode = generate(40);
	document.getElementById('activationCode').value = activationCode;
</script>

<script src="js/bootstrap.js"></script>
<script src="intl-tel-input-master/build/js/intlTelInput.js"></script>
 



  <script>



    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
       autoHideDialCode: false,
       autoPlaceholder: "polite",

       //autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
//       initialCountry:"auto",
// geoIpLookup:function(success,failure){
// $.get("https://ipinfo.io",function(){},"jsonp").always(function(resp){
// var countryCode = (resp && resp.country) ? resp.country : "";
// success(countryCode);
// });
// },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
       separateDialCode: true,
      utilsScript: "intl-tel-input-master/build/js/utils.js",
    });
	
  </script>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


<script type="text/javascript">

	function isEmptyOrSpaces(str){
    return str === null || str.match(/^ *$/) !== null;
}
	// $('#submit').on("click",function() {
   
 //    if ($(this).find('input[name="accept"]')[0].checked === false) {
 //    //e.preventDefault();    
 //    alert("Please accept the terms and conditions!");     
 //   return false;
 //   }else{
 //   	$('#form').submit();
 //   }
 //    });
 $(document).ready(function(){
 
    $('input[id="submit"]').attr('disabled',true);
    document.getElementById('FormMsg').style.display = "none";
   
    	
	
 });
 

 $("#accept").change(function() {  
    if(this.checked) {
        $('input[id="submit"]').attr('disabled',false);
    }else{
    $('input[id="submit"]').attr('disabled',true);	
    }
});


$('#form').submit(function(e){
	
	//error shows

	
var input = $("#phone").val();
  // var title = $(".iti__selected-flag").attr( "title" );
   var dCd = $(".iti__active").attr("data-dial-code");
   //var dCode =  input.intlTelInput('getSelectedCountryData').dialCode;
 	$("#phone2").val("+"+dCd+" "+input);
 	//alert($("#phone2").val());
	
	var name = $("#name").val();
	var email = $("#email").val();
	var password = $("#password").val();
	var cPassword = $("#confirmPassword").val();
	var phone = $("#phone2").val();
	var capCha = $("#capCha").val();

 	if(isEmptyOrSpaces(name) || isEmptyOrSpaces(email) || isEmptyOrSpaces(password) || isEmptyOrSpaces(cPassword) || isEmptyOrSpaces(phone) || isEmptyOrSpaces(capCha)){
 		//error
	//alert('error on some fields');

	        $("#FormMsg").text("Error submitting  Form");
	           $("#FormMsg").fadeIn('slow', function(){    		
               $("#FormMsg").delay(5000).fadeOut(); 
            });
	e.preventDefault();

 	}else{
  		//fields are cleared no error  			
		if(password != cPassword){
 			alert('Password Not Matched!');
 			$("#FormMsg").text("Password Not Matched!");
			$("#FormMsg").fadeIn('slow', function(){    		
               $("#FormMsg").delay(5000).fadeOut(); 
            });
            e.preventDefault();
 		}
 	}

 });
</script>



<?php


if(isset($_POST['submit'])){

$uCode = $_POST['uCode'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$activationCode = $_POST['activationCode'];
if($securimage->check($_POST['captcha_code']) == false) {
  echo "<script type='text/javascript'>
  	alert('Capcha code Not Matched');
  </script>";
}else{
	
		$qry = $regObj->register($name,$email,$password,$uCode,$phone,$activationCode);
		if($qry){
	echo "<script type='text/javascript'>
  			alert('User Registered Successfully');
  			</script>";
}else{
		echo "<script type='text/javascript'>
  		alert('Error Registering User this email already Registered!');
  		</script>";
}
}

}

// function getUserIpAddr(){
//     if(!empty($_SERVER['HTTP_CLIENT_IP'])){
//         //ip from share internet
//         $ip = $_SERVER['HTTP_CLIENT_IP'];
//     }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
//         //ip pass from proxy
//         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
//     }else{
//         $ip = $_SERVER['REMOTE_ADDR'];
//     }
//     return $ip;
// }

// echo 'User Real IP - '.getUserIpAddr();

// You can use a more sophisticated method to retrieve the content of a webpage with php using a library or something
// We will retrieve quickly with the file_get_contents

//$dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=111.92.128.215"));

//echo "Hello visitor from: ".$dataArray["geoplugin_countryName"];


// outputs something like (obviously with the data of your IP) :

// geoplugin_countryCode => "DE",
// geoplugin_countryName => "Germany"
// geoplugin_continentCode => "EU"



     // if(isset($_POST['g-recaptcha-response'])){
     //      $captcha=$_POST['g-recaptcha-response'];
     //    }
     //    if(!$captcha){
     //      echo '<h2>Please check the the captcha form.</h2>';
     //      exit;
     //    }
     //    $secretKey = "6LcvG60UAAAAAI3afAj26F3F8BCbRzb14cFO9uu4";
     //    $ip = $_SERVER['REMOTE_ADDR'];
     //    // post request to server
     //    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
     //    $response = file_get_contents($url);
     //    $responseKeys = json_decode($response,true);
     //    // should return JSON with success as true
     //    if($responseKeys["success"]) {
     //            echo '<h2>Thanks for joining us</h2>';
     //    } else {
     //            echo '<h2>You are spammer ! Get the @$%K out</h2>';
     //    }
?>


