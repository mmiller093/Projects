<?php
function displayMessage($FirstMessage) {
	echo "<p>$FirstMessage</p>";
}
function returnMessage() {
	return "<p>This is returned by a function</p>";
}
displayMessage("This is displayed from a function.");
$returnValue = returnMessage();
echo $returnValue;

function incrementByValue($CountVal) {
	++$CountVal;
	echo "<p>IncrementByValue() value is $CountVal.</p>";
};
function incrementByReference(&$CountRef) {
	++$CountRef;
	echo"<incrementByReference() value is $CountRef</p>";
};
$count = 1;
echo "<p>Main program starting value is $count.</p>";
IncrementByValue($count);


?>
