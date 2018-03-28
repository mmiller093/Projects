<?php

$zodiacSigns = array( "rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "goat", "monkey", "rooster", "dog", "pig");

$connection = mysqli_connect('localhost', 'root', '', "chinese_zodiac");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `zodiacyears`(`Year`, `Sign`) VALUES (1900,sign)"

for ( $zoSign = 0; $zoSign < count($zodiacSigns); ++$zoSign) {
  echo '<img src="Images/'.$zodiacSigns[$zoSign].'.gif">';
}
?>