<?php

$thisRow = Array( 8,  2, 22, 97, 38, 15,  0, 40,  0, 75,  4,  5,  7, 78, 52, 12, 50, 77, 91,  8);

for ($col=0; $col < count($thisRow)-3; $col++) { 
	echo "(".$thisRow[$col].", ".$thisRow[$col+1].", ".$thisRow[$col+2].", ".$thisRow[$col+3].")\n";  //prints the first 4 (8,2,22,97)

}
/*
first iteration
$col = 0
echo "(".$thisRow[0].", ".$thisRow[1].", ".$thisRow[2].", ".$thisRow[3].")\n";  //prints the first 4 (8,2,22,97)


second iteration
$col = 1
echo "(".$thisRow[1].", ".$thisRow[2].", ".$thisRow[3].", ".$thisRow[4].")\n";  //prints the first 4 (8,2,22,97)


third iteration
$col = 2
echo "(".$thisRow[2].", ".$thisRow[3].", ".$thisRow[4].", ".$thisRow[5].")\n";  //prints the first 4 (8,2,22,97)

*/