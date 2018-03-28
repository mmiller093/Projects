<?php
//array_unique(array) used with array_values

$students = array("Greg" => "2nd year", "Dave" => "2nd year", "Sammy" => "1st year", "Jared" => "2nd year", "Dusten" => "2nd year");
/*foreach ($students as $name => $year) {
	echo "Name: ".$name;
	echo " Is in their ".$year."<br/><br/>"
	
}

$names = array("Greg", "Dave", "Sammy", "Dusten");
echo(in_array("1st year", $students));
*/
$names = array("Greg", "Dave", "Sammy", "Dusten");
$slice = array_slice($names, 1,2);
var_dump($slice);
?>