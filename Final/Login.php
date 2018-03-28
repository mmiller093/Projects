<?php

session_start();

if (isset($_SESSION["username"])) {
	header("Location: index.php");
	die();
}
?><html>
<head>



<!-- jQuery 3.2.0 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

<!-- material icon set -->
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<title>LOGIN PAGE</title>

<style>


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
<h1>Login</h1>
<?php
function has_no_rows($result) : bool {
	return mysqli_num_rows($result) == 0;
} 
if (isset($_POST["name"])) { // check if form submitted (username input exists)
	include "connect.php";
	/* select stuff
	check password
	if so update to inc counter
	redirect to index */
	$sql = "SELECT * FROM `login_info` WHERE `username` = '".$_POST["name"]."';";
	$result = mysqli_query($con, $sql);

	if(has_no_rows($result)) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Username does not exist</p>";
	} else {
		$user = mysqli_fetch_assoc($result);
		if (!password_verify($_POST["pass"], $user["hashed_password"])) {
			echo "<p><i class=\"material-icons tiny\">error_outline</i> Invalid Password</p>";
		} else {
			//login successful
			$_SESSION["username"] = $_POST["name"];

			$sql = "UPDATE `login_info` SET `last_visit`=NOW(),`times_visited`=`times_visited`+1 WHERE `username` = '".$_POST["name"]."';";

			mysqli_query($con, $sql);

			echo "Redirecting...<script>window.location=\"index.php\";</script>";
		}
	}
}
?>
<form action="" method="post">
	<div class="input-field">
		<i class="material-icons prefix">account_box</i>
		<input id="name" name="name" type="text" value="<?php if (isset($_POST["name"])) { echo $_POST["name"]; } ?>">
		<label class="text-blue" for="name">Username</label>
	</div>
	<div class="input-field">
	    <i class="material-icons prefix">lock_outline</i>
	    <input id="pass" name="pass" type="password">
        <label for="pass">Password</label>
	</div>
	<a href="PasswordReset.php">Reset Password</a>
	<div class="divider"></div>
	<button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
    </button>
</form>
</div>
</body>
</html>