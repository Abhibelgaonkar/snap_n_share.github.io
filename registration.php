<?php
include_once('dbcon.php');
error_reporting(0);
/*$n=6; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
$otp1=getName($n);


if(isset($_POST['verify']))
{
	$o=$_POST['otp_o'];
	//php Mailer
	
	require 'PHPMailerAutoload.php';
	require 'credential.php';
	
	$mail = new PHPMailer;

	$mail = new PHPMailer;

	$mail->SMTPDebug = 4;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gamil.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = EMAIL;                 // SMTP username
	$mail->Password = PASS;                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom(EMAIL, 'Snap and Share');
	$mail->addAddress($_POST['email']);     // Add a recipient

	$mail->addReplyTo(EMAIL);
	

	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Snap and Share OTP';
	$mail->Body    = $otp1;
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
	
}*/

if(isset($_POST['submit']))
{
//$id=$_POST['full_name'];
$name=$_POST['full_name'];
$addres1=$_POST['address'];
$city1=$_POST['city'];
$phno1=$_POST['phno'];
//$date=$_POST['date'];
//$month=$_POST['month'];
//$year=$_POST['year'];
$gender1=$_POST['gender'];
$email1=$_POST['email'];
$password1=md5($_POST['password']);
$dob1=$_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['date'];


 

	$query=mysqli_query($conn,"insert into user(name,address,city,gender,email,password,dob,phone) values('$name','$addres1','$city1','$gender1','$email1','$password1','$dob1','$phno1')");
	if($query)
	{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	header('location:login.php');
	}



}

?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>User Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
windows.location="<a href="login.php>";
return true;
}
</script>
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"><h2>SNS | User Registration</h2></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
							<legend>
								Sign Up
							</legend>
							<p>
								Enter your personal details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" pattern="[a-zA-Z ]+" oninvalid="this.setCustomValidity('Character Only.!! ') "placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" name="phno" pattern="[6789][0-9]{9}" oninvalid="this.setCustomValidity('Number Only.!! ')" placeholder="Phone Number"  maxlength="10" minlenght="10" required>
							</div>
							
							<div class="form-group">
								<label class="block">
									Date of Birth
								
								</label>
								</div>
								<div class="form-group">
								<input type="text" class="form-control" name="date" pattern="[0-9]{2}" oninvalid="this.setCustomValidity('Number Only.!! From 01 to 31 ')" placeholder="Date" maxlength="2" min="1" max="31" required ><span>
								</div>
								<div class="form-group">
								<input type="text" class="form-control" name="month" name="date" pattern="[0-9]{2}" oninvalid="this.setCustomValidity('Number Only.!! From 01 to 12 ')" placeholder="Month" maxlength="2"  min="1" max="12"  required><span>
								</div>
								<div class="form-group">
								
								<input type="text" class="form-control" name="year" pattern="[0-9]{4}" oninvalid="this.setCustomValidity('Number Only.!! ')" placeholder="Year" maxlength="4" min="1900" max="2021" required>
								</div>
							
							<div class="form-group">
								<label class="block">
									Gender
								</label>
								
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" >
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male">
									<label for="rg-male">
										Male
									</label>
								</div>
							</div>
							<p>
								Enter your account details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control password" id="password" name="password" placeholder="Password" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							
							<span id='message'></span>
							<p>
							<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
							var check = function() {
								  if (document.getElementById('password').value ==
									document.getElementById('password_again').value) {
									document.getElementById('message').style.color = 'green';
									document.getElementById('message').innerHTML = 'matching';
								  } else {
									document.getElementById('message').style.color = 'red';
									document.getElementById('message').innerHTML = 'not matching';
								  }
								}
								</script>
							<!--<div class="form-group">
								
									<input type="text" class="form-control"  id="gg" name="otp_o" placeholder="OTP" required>
									
							</div>
							<button  class="btn btn-primary pull-right"  name="verify" formnovalidate>
									Verify Email <i class="fa fa-arrow-circle-right"></i>
									
								</button>-->
							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
									<label for="agree">
										I agree
									</label>
								</div>
							</div>
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="login.php">
										Log-in
									</a>
								</p>
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit" >
									Submit <i class="fa fa-arrow-circle-right"></i>
									
								</button>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> HMS</span>. <span>All rights reserved</span>
					</div>

				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
	<!-- end: BODY -->
</html>