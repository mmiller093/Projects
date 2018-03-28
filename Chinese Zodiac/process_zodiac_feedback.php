<?php

include "Includes/inc_connect.php";

$checkVal = "N";

if (isset($_POST["pubdisplay"])) {
	$checkVal = "Y";
}

if (mysqli_query($con,"INSERT INTO `zodiacfeedback` (`message_date`, `message_time`, `sender`, `message`, `public_message`) VALUES (CURRENT_DATE(), CURRENT_TIME(), '".$_POST["sender"]."', '".$_POST["comments"]."', '".$checkVal."');") === TRUE) {
	printf("Thank you for the input!\n");
	printf("Successfully Submitted.");
}

?>
