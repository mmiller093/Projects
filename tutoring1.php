<?php

// you can use ctrl+b to test
$sum = 0;

for ($i=3; $i < 1000; $i=$i+3) {  //increase i until it is as close to
								  //1000 as can be (3)
	# code...
	$sum = $sum + $i;
}
for ($i=5; $i < 1000; $i=$i+5) {  //(5)
	
	if ($i % 3 != 0) { // if evenly divisible will return 0
		$sum = $sum + $i;
	}
}

echo "The sum is ". $sum;

