<?php
$birthYear = "1997";
var_dump(ctype_digit($birthYear));

if ($birthYear % 12 == 4) {
	echo "<img src=\"Images/Rat.gif\" />";
} else if ($birthYear % 12 == 5) {
	echo "<img src=\"Images/Ox.gif\" />";
} else if ($birthYear % 12 == 6) {
	echo "<img src=\"Images/Tiger.gif\" />";
} else if ($birthYear % 12 == 7) {
	echo "<img src=\"Images/Rabbit.gif\" />";
} else if ($birthYear % 12 == 8) {
	echo "<img src=\"Images/Dragon.gif\" />";
} else if ($birthYear % 12 == 9) {
	echo "<img src=\"Images/Snake.gif\" />";
} else if ($birthYear % 12 == 10) {
	echo "<img src=\"Images/Horse.gif\" />";
} else if ($birthYear % 12 == 11) {
	echo "<img src=\"Images/Goat.gif\" />";
} else if ($birthYear % 12 == 0) {
	echo "<img src=\"Images/Monkey.gif\" />";
} else if ($birthYear % 12 == 1) {
	echo "<img src=\"Images/Rooster.gif\" />";
} else if ($birthYear % 12 == 2) {
	echo "<img src=\"Images/Dog.gif\" />";
} else if ($birthYear % 12 == 3) {
	echo "<img src=\"Images/Pig.gif\" />";
}

?>