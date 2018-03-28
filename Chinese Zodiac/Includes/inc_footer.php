<?php
echo"<br><br>";
/*echo file('proverbs.txt')[rand(0, count(file('proverbs.txt'))-1)];
echo"<br><br>"; */
include "Includes/inc_connect.php";

$SQL1 = "SELECT `proverb_number`, `proverb`, `display_count` FROM `randomproverb`";

// query $SQL1, iterate resultrs, pick a random one
$result = mysqli_query($con, $SQL1);

$proverbs = mysqli_fetch_all($result);

$proverb = $proverbs[rand(0,count($proverbs)-1)];

echo $proverb[1]."<br>"; // 2nd column is actual proverb

// update random one

$SQL2 = "UPDATE `randomproverb` SET `display_count` = display_count + 1 WHERE `proverb_number` = ".$proverb[0]; // first column is id

mysqli_query($con, $SQL2);

$folder = scandir('Images/');
echo "<br>";

function checkImageIsDragon($image) {
	return preg_match('/^Dragon\d+\.(gif|jpg|png)$/', $image);
}

$folder = array_filter($folder, "checkImageIsDragon");
echo "<img src=\"Images/".$folder[array_rand($folder)]."\">";
echo"<br><br>";
echo "&#9400 2017";

