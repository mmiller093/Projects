<html>
<head>
<title>10/10 login form</title>
</head>
<body>
<?php
if (isset($_POST["name"])) { // check if form submitted (username input exists)
	$isvalid=true;
	// form was submitted
	// check #1: username !empty
	if (preg_match("/./", $_POST["name"])) {
		echo "<p style=\"color: green;\">✓: username field nonempty</p>";
	} else {
		echo "<p style=\"color: red;\">✘: username field empty</p>";
		$isvalid=false;

	if (preg_match("/[0-9]{1,}/", $_POST["name"])) {
		echo "<p style=\"color: green;\">✓: Contains atleast one number</p>";
	} else {
		echo "<p style=\"color: red;\">✘: Does not contain a number</p>";
		$isvalid=false;

	if (preg_match("/./", $_POST["name"])) {
		echo "<p style=\"color: green;\">✓: Contains atleast one lowercase letter</p>";
	} else {
		echo "<p style=\"color: red;\">✘: Does not contain atleast one lowercase letter</p>";
		$isvalid=false;

	if (preg_match("/./", $_POST["name"])) {
		echo "<p style=\"color: green;\">✓: Contains atleast one uppercase letter</p>";
	} else {
		echo "<p style=\"color: red;\">✘: Does not contain an uppercase letter</p>";
		$isvalid=false;

	if (preg_match("/./", $_POST["name"])) {
		echo "<p style=\"color: green;\">✓: Contains no spaces</p>";
	} else {
		echo "<p style=\"color: red;\">✘: Must contain no spaces</p>";
		$isvalid=false;

	if (preg_match("/./", $_POST["name"])) {
		echo "<p style=\"color: green;\">✓: Must be 8 - 16 characters long</p>";
	} else {
		echo "<p style=\"color: red;\">✘: Is not 8 - 16 characters long</p>";
		$isvalid=false;

	if (preg_match("/./", $_POST["name"])) {
		echo "<p style=\"color: green;\">✓: username field nonempty</p>";
	} else {
		echo "<p style=\"color: red;\">✘: username field empty</p>";
		$isvalid=false;

	}   

	if ($isvalid) {
		// print success message, password hash, etc
		echo "</body></html>";
		die(); // dont output anything else
	}
}
?>
<form action="" method="post">
	<input name="name" type="text" placeholder="Username" value="<?= $_POST["name"] ?>">
	<input name="pass" type="password" placeholder="Password" value="<?= $_POST["pass"]">
	<input type="submit">
</form>
</body>
</html>