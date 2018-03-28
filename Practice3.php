<?php

$dog = "Aussie";

switch($dog) {
	case "German Shepherd":
		echo "No";
		break;
	case "Aussie":
		echo "Thats my Dog";
		break;
	case "Dalmation";
		echo "Definately no";
		break;
	default:
		echo "Possibly";
		break;
		
}
echo '<br/><br/>';
$race = "Caucasian";

switch ($race) {
	case "African";
		echo "Wrong race.";
		break;
	case "Hispanic";
		echo "Wrong race.";
		break;
	case "Native American";
		echo "Wrong race";
		break;
	default:
		echo "Correct";
		break;
		
}
echo '<br/><br/>';
$Time = "2:00";
switch ($Time) {
	case "1:00";
		echo "Park closed";
		break;
	case "2:00";
		echo "Park opened";
		break;
	case "5:00";
		echo "Park closed";
		break;
}
echo '<br/><br/>';
$TvShows = array("Family Guy", "American Dad", "Futurama",
				  "Walking Dead", "Ultimate Fighter", "Impractical Jokers");
				  
echo "<p> The following ",count($TvShows), " Shows are scheduled: </p><p>";
echo "$TvShows[0]: 8:30PM  Adult Swim</br>";
echo "$TvShows[1]: 10:00PM Adult Swim</br>";
echo "$TvShows[2]: 11:00PM Adult Swim</br>";
echo "$TvShows[3]: 10:00PM AMC</br>";
echo "$TvShows[4]: 10:00PM Fox Sports 1</br>";
echo "$TvShows[5]: 7:30PM  TRU TV</br>";
?>