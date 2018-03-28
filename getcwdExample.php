<?php

$Dir = getcwd();

$DirEntries = scandir(getcwd());
foreach ($DirEntries as $Entry) {
	if ((strcmp(Entry, '.') != 0) && (strcmp($Entry, '..') != 0) {
		echo $Entry. "<br />\n";
	}
}
/*
$DirEntries = array_slice(scandir($Dir), 2);
foreach ($DirEntries as $Entry) {
	echo $Entry. "<br />\n";
}

*/
?>