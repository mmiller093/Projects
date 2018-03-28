<!Doctype html>
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>SwitchExample</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$x = rand(1,6);

switch($x){
	case 1:
		echo "One";
		break;
	case 2:
		echo "Two";
		break;
	case 3:
		echo "Three";
		break;
	case 4:
		echo "Four";
		break;
	case 5:
		echo "Five";
		break;
	case 6:
		echo"Six";
		break;
}

echo"<br/><br/>";

$snack = "cookie";
    
switch ($snack) {
	case "apple":
		echo "No thanks";
		break;
    case "cookie":
        echo "Yes Please";
        break;
    case "tomato":
        echo "No snack then";
        break;
}
?>
