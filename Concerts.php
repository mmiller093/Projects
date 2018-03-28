<!Doctype html;>
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Central Valley Civic Center</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Central Valley Civic Center</h1>
<h2>Summer Concert Season</h2>
<?php
#$Concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
#$Concerts[] = "Bob Dylan";
#$Concerts[] = "Ryan Cabrera";

#$Concerts[2] = "ACDC";
#$Concerts[3] = "Metalica";

#echo "<p> The following ",count($Concerts), " concerts are scheduled: </p><p>";
#echo "$Concerts[0]<br/>";
#echo "$Concerts[1]<br/>";
#echo "$Concerts[2]<br/>";
#echo "$Concerts[3]<br/>";
#echo "$Concerts[4]<br/>";
#echo "$Concerts[5]<br/>";
#echo "$Concerts[6]<br/><br/>";


#(count($Concerts) >= 7)? print "We are booked full" : print "More room availible";

#$Dogs = array("Aussie", "Goldie", "Kelpie");
#echo "<p>The following dogs are for sale.</br>";
#echo "$Dogs[0]</br>";
#echo "$Dogs[1]</br>";
#echo "$Dogs[2]</br>";

$friends = array("Ryan", "Kent", "Josh", "Clark", "Jacob", "Zac", "Paul");
$friends[] = "Brittany";
$friends[3] = "Joseph Clark";
#echo '<p>These are my friends</br>';
#echo "$friends[0]</br>";
#echo "$friends[1]</br>";
#echo "$friends[2]</br>";
#echo "$friends[3]</br>";
#echo "$friends[4]</br>";
#echo "$friends[5]</br>";
#echo "$friends[6]</br>";
#echo "$friends[7]</br>";

echo "<pre>";
print_r ($friends);
echo "</pre>";


?>

</body>
</html>