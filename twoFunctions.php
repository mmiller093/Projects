<!Doctype html>
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>PlaceHolder</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
/*
function displayMessage($FirstMessage){
	echo"<p>$FirstMessage</p>";
}
function returnMessage(){
	return "<p>This message was returned from a function</p>";
}

displayMessage("This message was returned from a function");
$ReturnValue = returnMessage();
echo $ReturnValue;
*/

function IncrementByValue($CountByValue){
	++$CountByValue;
	echo "</p>IncrementByValue() value is $CountByValue. </p>";
}
function IncrementByReference(&$CountByReference){
	++$CountByReference;
	echo "<p>IncrementByReference() value is $CountByReference. </p>";
}
$Count = 1;
echo "<p>Main program starting value is $Count.</p>";
IncrementByValue($Count);
echo "<p>Main program between value is $Count.</p>";
IncrementByReference($Count);
echo "<p>Main program ending value is $Count.</p>";
?>
</body>
</html>