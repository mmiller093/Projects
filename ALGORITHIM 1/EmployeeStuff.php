<?php
// I Ran in Powershell 
echo "Enter the filename of the Employee List: ";
$in = trim(readline());

while (!file_exists($in)) {
	echo "\nFile not found.\n\n";
	echo "Enter the filename of the Employee List: ";
	$in = trim(readline());
}

$handle = fopen($in, "r");
$data = [];
while(($row = fgetcsv($handle)) !== false) {
	$data[] = $row;
	// expect 8 columns
	if (count($row) !== 8) {
		die("Your file was not a valid csv for processing\n");
	}
	// ID is a number
	if (!is_numeric($row[0])) {
		die("Your file was not a valid csv for processing\n");
	}
	// rank is between 1 and 5
	if ($row[6] > 5 || $row[6] < 1) {
		die("Your file was not a valid csv for processing\n");
	}
	// salary is numeric
	if (!is_numeric($row[0])) {
		die("Your file was not a valid csv for processing\n");
	}
}

if (!feof($handle)) {
	die("Your file was not a valid csv for processing\n");
}


for ($i=0; $i < count($data)-1; $i++) { 
	$minimumIndex = $i;
	for ($j=$i+1; $j < count($data); $j++) { 
		
		if ($data[$j][0] < $data[$minimumIndex][0]) {
			$minimumIndex = $j;
		}
	}
	$tmp = $data[$i];
	$data[$i] = $data[$minimumIndex];
	$data[$minimumIndex] = $tmp;
}

do {
	echo "Enter an ID number to search for (-1 to quit): ";
	$in = readline();

	if (!is_numeric($in)) {
		echo "\nNot a valid ID number\n\n";
		continue; // try again
	}
	
	$low = 0;
	$high = count($data)-1;
	while ($low <= $high) { 
		
		$index = (int)(($high + $low)/2);
		
		if ($data[$index][0] == $in) {
			break;
		} else if ($data[$index][0] < $in) { 
			$low = $index + 1;
		} else { 
			$high = $index - 1;
		}
	}
	if ($data[$index][0] == $in) {
		$person = $data[$index];
		echo "ID:			 ".$person[0]."\n";
		echo "Name:			 ".$person[1]." ".$person[2]."\n";
		echo "Phone:			".$person[3]."\n";
		echo "SSN:			 ".$person[4]."\n";
		echo "Address:		 ".$person[5]."\n";
		
		$ranks = ["","Intern","New Full-time hire","Associate","Assistant Manager","Manager"];
		echo "Rank:			 ".$ranks[$person[6]]."\n";
		echo "Salary:			$".number_format($person[7])."\n";
		$total = 0;
		$num = 0;
		foreach ($data as $row) {
			if ($row[6] == $person[6]) { // if same as found user
				$total += $row[7];
				$num++;
			}
		}
		$average = $total/$num;
		echo "Average Rank Salary:	$".number_format($average, 2)."\n\n";
	} elseif ($in == -1) {
		
	} else {
		echo "\nID not found\n\n";
	}
} while ($in != -1);

// Enter csv extension for excel file
echo "Enter the filename of the output file for the sorted csv: ";
$outFilename = readline();

$file = fopen($outFilename, 'w');

if ($file === false) {
	die("Outfile is unwritable");
}

foreach ($data as $row) {
	fputcsv($file, $row);
}
fclose($file);
