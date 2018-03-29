<?php

#dirList = (fileath)

function listFiles($folder, $depth) { // Function where you list the folder     
	$contents = scandir($folder); // some php function
	foreach ($contents as $item) {
		if ($item == "." || $item == "..") {
			continue; // skip these, they aren't real
		}
		echo str_repeat("| ", $depth).$item."\n";
		if (is_dir($folder.DIRECTORY_SEPARATOR.$item)) {
			listFiles($folder.DIRECTORY_SEPARATOR.$item, $depth + 1);
		}
	}
}

echo "Please enter a folder to list: ";
$folderToList = readline();

if (!file_exists($folderToList)) {
	echo "Sorry, that doesn't exist!\n";
	die();
}

echo "Listing ".$folderToList."\n";

listFiles($folderToList, 1);   // Lists the files of chosen folder  

