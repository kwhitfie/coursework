<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Aston Events</title>
      <style>
      		<?php
          	if(!defined('CSS_PATH')){
            define('CSS_PATH', dirname(__DIR__,3)."/resources/css/style.css");
            }
      			include(CSS_PATH);
      		?>
    	</style>
</head>

<body>
  <?php
  define('ROOT_PATH', dirname(__DIR__, 3)."/resources/views/");
    include_once(ROOT_PATH.'navbar.php');
   ?>


	 <?php
			 $forename = $surname = $email1 = $email2 = $password1 = $password2 = $accounttype= "";
			 $forenameErr = $surnameErr = $email1Err = $email2Err = $password1Err = $password2Err = "";

			 if ($_SERVER["REQUEST_METHOD"] == "POST") {

			 if (empty($_POST["forename"])) {
				 $forenameErr = "Forename is required";
			 }
			 else {
				 $forename = test_input($_POST["forename"]);
				 if (!preg_match("/^[a-zA-Z-' ]*$/",$forename)) {
					 $forenameErr = "Only letters and white space allowed";
				 }
			 }

			 if (empty($_POST["surname"])) {
				 $surnameErr = "Surname is required";
			 }
			 else {
				 $surname = test_input($_POST["surname"]);
				 if (!preg_match("/^[a-zA-Z-' ]*$/",$surname)) {
					 $surnameErr = "Only letters and white space allowed";
				 }
			 }

			 if (empty($_POST["email1"])) {
				 $email1Err = "Email is required";
			 }
			 else {
				 $email1 = test_input($_POST["email1"]);
			 }

			 if (empty($_POST["email2"])) {
				 $email2Err = "Verification email is required";
			 }
			 else {
				 $email2 = test_input($_POST["email2"]);
			 }

			 if (empty($_POST["password1"])) {
				 $password1Err = "Password is required";
			 }
			 else {
				 $password1 = test_input($_POST["password1"]);
			 }

			 if (empty($_POST["password2"])) {
				 $password2Err = "Verification password is required";
			 }
			 else {
				 $password2 = test_input($_POST["password2"]);
			 }
		 }


			 if($email1 != $email2) {
				 echo "<script>
					 function emailAlert()
					 {
					 alert('Emails do not match');
					 }
					 </script>";	}


			 if($password1 != $password2) {
				 echo "<script>
					 function passwordAlert()
					 {
					 alert('Passwords do not match');
					 }
					 </script>";	}


		 function test_input($data) {
			 $data = trim($data);
			 $data = stripslashes($data);
			 $data = htmlspecialchars($data);
			 return $data;
		 }
	 ?>

	<section id="sign-up-form">
		<h2>Sign up for free</h2>
		<form id="sign-up" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			@csrf
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div>
				<input type="forename" name="forename" value="<?php echo $forename;?>" placeholder="Forename" required  />
				<span class="error">* <?php echo $forenameErr;?></span>
				<br><br>
			</div>
			<div>
				<input type="surname" name="surname" value="<?php echo $surname;?>" placeholder="Surname" required  />
				<span class="error">* <?php echo $surnameErr;?></span>
				<br><br>
			</div>
		<div>
			<input type="email" name="email" value="<?php echo $email1;?>" pattern=".+(\.ac\.uk|\.edu)" placeholder="Email" title="Please enter a UK or US academic email address" required  />
			<span class="error">* <?php echo $email1Err;?></span>
			<br><br>
		</div>
		<div>
			<input type="email" name="email" value="<?php echo $email2;?>" placeholder=" Confirm Email" pattern=".+(\.ac\.uk|\.edu)" title="Please enter a UK or US academic email address" required />
			<span class="error">* <?php echo $email2Err;?></span>
			<br><br>
		</div>
		<div>
			<input type="password" name="password" id="password" value="<?php echo $password1;?>" placeholder="Password"required />
			<span class="error">* <?php echo $password1Err;?></span>
			<br><br>
		</div>
		<div>
			<input type="password" name="password2" id="passwordConfirm" value="<?php echo $password2;?>" placeholder="Confirm password" required />
			<span class="error">* <?php echo $password2Err;?></span>
			<br><br>
		</div>
		<div>
			<label for="account-type">Choose an account type: </label>
				<select name="account-type" id="account-type">
				  <option value="student">Student</option>
				  <option value="organiser">Event Organiser</option>
				</select>
		</div>
		<input type="submit" id="submitButton" value="Submit" />
	</form>
	</section>





</body>
</html>
