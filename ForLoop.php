<!Doctype html>
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Loop Example</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
//for i in range(0,10,1):
//	  print(i)

for ($i = 0; $i <= 10; $i++ ) {
	echo $i;
	echo "<br/>";
}
//for i in ['A','B','C','D']
//for i in xArray:
//	  print(i)

$xArray = array('A','B','C','D');

//DICE ROLL 20 ROLLS OF 6 SIDED
foreach($xArray as $i) {
	echo $i;
}
echo"<br/><br/>";

for ($i = 0; $i < 20; $i++) {
	$rolls[]=rand(1,6);
}

foreach ($rolls as $roll){
	echo $roll;
	echo "<br/>";
}

include('Concerts.php');
?>

<?php

for ($i = 0; $i <= 10; $i++ ); {
	echo $i;
	echo "<br/>";
}