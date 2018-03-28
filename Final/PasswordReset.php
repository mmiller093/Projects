<?php

session_start();
$awaitingSecurityQuestion = false;
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

<title>PASSWORD RESET</title>

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
 /* label focus color */
 .input-field input[type=email]:focus + label {
   color: #1976d2;
 }
 /* label underline focus color */
 .input-field input[type=email]:focus {
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
<h1>Password Reset</h1>
<?php

if (isset($_POST["name"])) { // check if form submitted (username input exists)
	include "connect.php";
	/* select stuff
	check password
	if so update to inc counter
	redirect to index */
	$sql = "SELECT * FROM `login_info` WHERE `username` = '".$_POST["name"]."';";
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result) == 0) {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Username does not exist</p>";
	} else {
		$user = mysqli_fetch_assoc($result);
		if ($_POST["email"] != $user["email"]) {
			echo "<p><i class=\"material-icons tiny\">error_outline</i> Username and email do not match</p>";
		} else {
			$awaitingSecurityQuestion = true;
			// if the security answer submitted?
			if (isset($_POST["security_answer"])) {
				// check the answer is correct
				if ($_POST["security_answer"] != $user["security_answer"]) {
					echo "<p><i class=\"material-icons tiny\">error_outline</i> Incorrect security question answer</p>";
				} else {
					$password = base64_encode(bin2hex(openssl_random_pseudo_bytes(6)));
					$newHashedPWD = password_hash($password, PASSWORD_DEFAULT);

					$sql = "UPDATE `login_info` SET `hashed_password`='".$newHashedPWD."' WHERE `username` = '".$_POST["name"]."';";

					mysqli_query($con, $sql);

					echo "<p class= flow-text>Your new password is: ".$password.".  Please be sure you remember it.<br><a href=\"Login.php\">Login</a></p>";
					die();
				}
			}
		}
	}
}
?>
<form action="" method="post">
	<div class="input-field">
		<i class="material-icons prefix">account_box</i>
		<input id="name" name="name" type="text" <?php if ($awaitingSecurityQuestion == true) {echo "readonly=\"readonly\" ";} ?>value="<?php if (isset($_POST["name"])) { echo $_POST["name"]; } ?>">
		<label class="text-blue" for="name">Username</label>
	</div>
	<div class="input-field">
	    <i class="material-icons prefix">mail_outline</i>
	    <input id="email" name="email" type="email" <?php if ($awaitingSecurityQuestion) {echo "readonly=\"readonly\" ";} ?>value="<?php if (isset($_POST["email"])) { echo $_POST["email"]; } ?>">
        <label for="email">Email</label>
	</div><?php
		if ($awaitingSecurityQuestion) {
			echo "
	<div class=\"input-field\">
	    <i class=\"material-icons prefix\">lock_outline</i>
	    <input id=\"security_answer\" name=\"security_answer\" type=\"text\">
        <label for=\"security_answer\">".$user["security_question"]."</label>
	</div>";
		}
	?>
	<div class="divider"></div>
	<button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
    </button>

</form>
</div>
</body>
</html>