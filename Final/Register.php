<?php

session_start();

if (isset($_SESSION["username"])) {
	header("Location: index.php");
	die();
}
?><!DOCTYPE html>
<html>
<head>

<!-- jQuery 3.2.0 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

<!-- material icon set -->
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<title>REGISTER PAGE</title>

<style>


.dropdown-content li > a, .dropdown-content li > span {
  color: #1976d2;
}

/* label color */
 .input-field label {
   color: #1976d2;
 }
 /* label focus color */
 .input-field input[type=text]:focus + label {
   color: #1976d2;
 }
 /* label underline focus color */
 .input-field input[type=text]:focus {
   border-bottom: 1px solid #1976d2;
   box-shadow: 0 1px 0 0 #1976d2;
 }
 /* label focus color */
 .input-field input[type=password]:focus + label {
   color: #1976d2;
 }
 /* label underline focus color */
 .input-field input[type=password]:focus {
   border-bottom: 1px solid #1976d2;
   box-shadow: 0 1px 0 0 #1976d2;
 }
 /* icon prefix focus color */
 .input-field .prefix.active {
   color: #1976d2;
 }
</style>
</head>
<body>
<div class="container">

<?php

if (isset($_POST["name"])) { // check if form submitted (username input exists)
	$isvalid=true;
	// form was submitted
	if (!preg_match("/./", $_POST["name"])) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Username field empty</p>"; // middle finger (Just thought it was funny to find that 																				   unicode)
		$isvalid=false;
	}

	if (!preg_match("/[0-9]{1,}/", $_POST["password"])) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain atleast one number</p>";
		$isvalid=false;
	}

	if (!preg_match("/[a-z]{1,}/", $_POST["password"])) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain atleast one lowercase letter</p>";
		$isvalid=false;	
	}

	if (!preg_match("/[A-Z]{1,}/", $_POST["password"])) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain atleast one uppercase letter</p>";
		$isvalid=false;
	}

	if (!preg_match("/^\S+$/", $_POST["password"])) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain no spaces</p>";
		$isvalid=false;
	}

	if (!preg_match("/^.{8,16}$/", $_POST["password"])) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must 8 - 16 characters long</p>";
		$isvalid=false;
	}

	if (!preg_match("/[^a-zA-Z\d]/", $_POST["password"])) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain a non letter and/or number</p>";
		$isvalid=false;
	}

	if ($_POST["password"] != $_POST["confirmpass"]) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Password and confirm password fields are not identical</p>";
		$isvalid=false;
	}

	if ($isvalid) {
		include 'connect.php';
		$security_value = "";
		if ($_POST["security"] == 1) {
			$security_value = "What is your Grandfather\'s name?";
		} else if ($_POST["security"] == 2) {
			$security_value = "What is the name of the high school you attended?";
		} else {
			$security_value = "What state were you born in?";
		}
		$sql = "INSERT INTO `login_info` (
		  `username`, 
		  `name`, 
		  `email`, 
		  `hashed_password`, 
		  `last_visit`, 
		  `times_visited`,
		  `security_question`,
		  `security_answer`) 
		  VALUES (
		  '".$_POST["username"]."', 
		  '".$_POST["name"]."', 
		  '".$_POST["email"]."', 
		  '".password_hash($_POST["password"], PASSWORD_DEFAULT)."', 
		  NOW(), 
		  0,
		  '".$security_value."',
		  '".$_POST["security_answer"]."'  );";

		 $sql2 = "INSERT INTO `login_info` (
		  `username`, 
		  `name`, 
		  `email`, 
		  `hashed_password`, 
		  `last_visit`, 
		  `times_visited`,
		  `security_question`,
		  `security_answer`) 
		  VALUES (
		  '".$_POST["username"]."', 
		  '".$_POST["name"]."', 
		  '".$_POST["email"]."', 
		  '".password_hash($_POST["password"], PASSWORD_DEFAULT)."', 
		  NOW(), 
		  0,
		  '".$security_value."',
		  '".$_POST["security_answer"]."'  );";
		  
		if (mysqli_query($con, $sql) === TRUE) {
			echo "<p class=\"flow-text\">Welcome new user, ".$_POST["username"].".</p><a class=\"btn blue darken-2\" href=\"Logout.php\">Logout</a></div></body></html>";
			$_SESSION["username"] = $_POST["username"];
			die();
		}
	}

}

?>

<h1>Register</h1>

<form action="" method="post">
	<div class="input-field">
		<i class="material-icons prefix">mode_edit</i>
		<input id="name" name="name" type="text" value="<?php if (isset($_POST["name"])) { echo $_POST["name"]; } ?>">
		<label for="name" for="name">Name</label>
	</div>
	<div class="input-field">
		<i class="material-icons prefix">mode_edit</i>
		<input id="username" name="username" type="text" value="<?php if (isset($_POST["username"])) { echo $_POST["username"]; } ?>">
		<label for="username">Username</label>
	</div>
	<div class="input-field">
		<i class="material-icons prefix">mode_edit</i>
		<input id="password" name="password" type="password">
		<label for="password">Password</label>
	</div>
	<div class="input-field">
		<i class="material-icons prefix">mode_edit</i>
		<input id="confirmpass" name="confirmpass" type="password">
		<label for="confirmpass">Confirm Password</label>
	</div>
	<div class="input-field">
		<i class="material-icons prefix">mode_edit</i>
		<input id="email" name="email" type="text" value="<?php if (isset($_POST["email"])) { echo $_POST["email"]; } ?>">
		<label for="email">Email</label>
	</div>
	<div class="input-field">
        <i class="material-icons prefix">mode_edit</i>
	    <select name="security">
	        <option value="" disabled selected>Choose your option</option>
	        <option value="1">What is your Grandfather's name?</option>
	        <option value="2">What is the name of the high school you attended?</option>
	        <option value="3">What state were you born in?</option>
	    </select>
	    <label>Security Question</label>
    </div>
	<div class="input-field">
		<i class="material-icons prefix">mode_edit</i>
		<input id="security_answer" name="security_answer" type="text" value="<?php if (isset($_POST["security_answer"])) { echo $_POST["security_answer"]; } ?>">
		<label for="security_answer" for="security_answer">Security Answer</label>
	</div>
	<div class="divider"></div>
	<button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
    </button>
	
</form>
</div>
</body>
<script type="text/javascript"> $(document).ready(function() { $('select').material_select(); }); </script>
</html>