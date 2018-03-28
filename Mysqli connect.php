<?php
$connection = mysql_connect("localhost","alibaba","0P3n$3$@m3", ''); //database connection
if (!$connection)
{
	die('Could not connect : ' . mysqli_connect());
}
else{
	echo "Connected Successfully";
}

?>