<?php

$ExampleVar = 5;
if ($ExampleVar == 5) {
	echo '<p>The variable is equal to $ExampleVar. </p>';
echo "<p>This text is generated after the if statement.</p>";
}
if ($ExampleVar == 4) {
	echo '<p>The variable is not equal to $ExampleVar. </p>';
}

echo '<br/><br/>';
$ExampleVar = 5;
if ($ExampleVar == 5) {
	echo '<p>The condidtion evaluates to true.</p>';
	echo '<p>$ExampleVar is equal to ', "$ExampleVar.</p>";
	echo '<p>Each of these lines will be displayed</p>';
}
echo "<p>This statement always executes after the 'if' statement.";
echo"<br/><br/>";


?>