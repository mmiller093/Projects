Line 18: max = 1000, fibonacci = 1,1, currentFibonacciIndex=2
First iteration:
	max = 1000, fibonacci = 1,1, currentFibonacciIndex=2
	fibonacci[0] (1) + fibonacci[1] (1) == 2, is less than max (1000)
	therefore, fibonacci[2] = fibonacci[0] (1) + fibonacci[1] (1)
	currentFibonacciIndex now is 3

Second iteration:
	max = 1000, fibonacci = 1,1,2, currentFibonacciIndex=3
	fibonacci[1] (1) + fibonacci[2] (2) == 3, is less than max (1000)
	therefore, fibonacci[3] = fibonacci[1] (1) + fibonacci[2] (2)
	currentFibonacciIndex now is 4

nth iteration
	max = 1000, fibonacci = 1,1,2...610,987, currentFibonacciIndex=n
	fibonacci[n-2] (610) + fibonacci[n-1] (987) == 1,597, is greater than than max (1000)
	stop executing while() loop


<?php
$max=4000000;

// creat sum variable to put all evens in
$sum = 0;
// a stores the 2nd last number
$a = 0;
// b stores the last number
$b = 1;

//while under max, do the following
while ($a + $b < $max) {
	// if the next number is even, add it
	if (($a + $b)%2 == 0) {
		$sum += $a + $b;
	}
	// temporarily store a, as we are about to overwrite it
	$tmp = $a;
	// move b to a
	$a = $b;
	// set b to the sum of the last 2
	$b = $a + $tmp;
}
// return the sum
return $sum;