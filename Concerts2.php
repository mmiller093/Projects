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
$Concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor");

$Concerts[] = "Bob Dylan";
$Concerts[] = "Ryan Cabrera";


echo "<p>The following ", count($Concerts), " concerts are scheduled:</p><p>";
echo "$Concerts[0]<br/>";
echo "$Concerts[1]<br/>";
echo "$Concerts[2]<br/>";
echo "$Concerts[3]<br/>";
echo "$Concerts[4]<br/>";
echo "$Concerts[5]<br/>";
echo "$Concerts[6]</p>";

?>