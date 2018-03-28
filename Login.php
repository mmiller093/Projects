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
if (isset($_POST["name"])) { // check if form submitted (username input exists)
	$isvalid=true;
	// form was submitted
	if (preg_match("/./", $_POST["name"])) {
		echo "<p><i class=\"material-icons tiny\">check_circle</i> Passed! Username field nonempty</p>";
	} else {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Username field empty</p>"; // middle finger (Just thought it was funny to find that 																				   unicode)
		$isvalid=false;
	}

	if (preg_match("/[0-9]{1,}/", $_POST["pass"])) {
		echo "<p><i class=\"material-icons tiny\">check_circle</i> Passed! Contains atleast one number</p>";
	} else {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain atleast one number</p>";
		$isvalid=false;
	}

	if (preg_match("/[a-z]{1,}/", $_POST["pass"])) {
		echo "<p><i class=\"material-icons tiny\">check_circle</i> Passed! Contains atleast one lowercase letter</p>";
	} else {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain atleast one lowercase letter</p>";
		$isvalid=false;	
	}

	if (preg_match("/[A-Z]{1,}/", $_POST["pass"])) {
		echo "<p><i class=\"material-icons tiny\">check_circle</i> Passed! Contains atleast one uppercase letter</p>";
	} else {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain atleast one uppercase letter</p>";
		$isvalid=false;
	}

	if (preg_match("/^\S+$/", $_POST["pass"])) {
		echo "<p><i class=\"material-icons tiny\">check_circle</i> Passed! Contains no spaces</p>";
	} else {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain no spaces</p>";
		$isvalid=false;
	}

	if (preg_match("/^.{8,16}$/", $_POST["pass"])) {
		echo "<p><i class=\"material-icons tiny\">check_circle</i> Passed! Must be 8 - 16 characters long</p>";
	} else {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must 8 - 16 characters long</p>";
		$isvalid=false;
	}

	if (preg_match("/[^a-zA-Z\d]/", $_POST["pass"])) {
		echo "<p><i class=\"material-icons tiny\">check_circle</i> Passed! Contains a non letter and/or number</p>";
	} else {
		echo "<p><i class=\"material-icons tiny\">error_outline</i> Failed! Must contain a non letter and/or number</p>";
		$isvalid=false;
	}  

	if ($isvalid) {
		echo "Password Hash: ", password_hash($_POST["pass"], PASSWORD_DEFAULT);// print success message, password hash
		echo "</body></html>";
		die(); // dont output anything else
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
	<div class="divider"></div>
	<button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
    </button>
    <div class="divider"></div>
    <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action2">Register
    <i class="material-icons right">send</i>
    </button>
</form>
</div>
</body>
</html>