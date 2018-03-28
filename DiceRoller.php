<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
$FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

function CheckForDoubles($Die1, $Die2) {
	global $FaceNamesSingular;
	global $FaceNamesPlural;
	
	if ($Die1 == $Die2) //DOUBLES
		echo "The roll was double ", $FaceNamesPlural[$Die1-1], ".<br/>";
			
	if (Die1 != Die2) //NOT DOUBLES
		echo "The roll was a ", $FaceNamesSingular[$Die1-1], "and a ", $FaceNamesSingular[$Die2-1],"<br/>";

}
function DisplayScoreText($score) {
	if (score == 2)
		echo '<p>You rolled snake eyes.</p>';
	if (score == 3) 
		echo '<p>You rolled a 3.</p>';
	if (score == 5) 
		echo '<p>You rolled a 4.</p>';
	if (score == 7)
		echo '<p>You rolled a 7.</p>';
	if (score == 9) 
		echo '<p>You rolled a 9.</p>';
	if (score == 11)
		echo '<p>You rolled an 11.</p>';
	if (score == 12)
		echo '<p>You rolled a 12.</p>';	
}
$Dice = array();
$Dice[0] = rand(1,6);
$Dice[1] = rand(1,6);
$score = $Dice[0] + $Dice[1];
echo "<p>";
echo "The total score for the roll was $score.<br/>";

CheckForDoubles($Dice[0], $Dice[1]);
DisplayScoreText($score);
echo"</p>";

?>
</body>