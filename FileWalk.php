<?php

#dirList = (fileath)

$highestDepth = 1;

function listFiles($folder, $depth) { // Function where you list the folder     
	global $maximumDepth;

	if ($depth > $maximumDepth) { // if we exceed the user specified highest depth, don't go any further
		return;
	}

	global $highestDepth; // tell it we want to use the one outside the function, not make a new one

	if ($depth > $highestDepth) { // set the highest depth counter to this depth if it is a new maximum
	   	$highestDepth = $depth;
	}

	$contents = scandir($folder); // get directory cnotents as an array
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
echo "Enter max recursion level: ";
$maximumDepth = readline();

if (!file_exists($folderToList)) {
	echo "Sorry, that doesn't exist!\n";
	die();
}

echo "Listing ".$folderToList."\n";

listFiles($folderToList, 1);   // Lists the files of chosen folder  

echo "Maximum depth: ".$highestDepth."\n";



