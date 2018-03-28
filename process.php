<?php
function validateInput($data) {
	$NoError = True;
	if (empty($data)) {
		echo "Must enter something.";
		$NoError = False;
	}
	if (strlen($data) != 9) {
		echo "Wrong amount of digits.";
		$NoError = False;
	}
	return $NoError;
}
if (isset($_POST['test'])) {
	$data = $_POST['test'];
	if (validateInput($data)) {echo "<br/>Your SSN of $data is valid."; }
	else {echo "<br/>Data was invalid. Try Again";}
	
}
else {$data = "";}
?>
</br>Enter an SSN:
<form action="process.php" method="post">
<input type="text" name="test" value="<?php echo $data;?>">

</form>