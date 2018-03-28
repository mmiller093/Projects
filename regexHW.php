
<?php

$ch = curl_init();
$problem = 'email';

// set url
curl_setopt($ch, CURLOPT_URL, "brandonwalker.net/web/CSCT237_T01/regex.php?problem=$problem");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);   

// echo $output;

$emails = preg_split("/;/", $output);

// var_dump($emails);

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Email</th>";
echo "<th>Valid</th>";
echo "<th>Reasoning</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($emails as $email) {
	$email = trim($email); 

	echo "<tr>";
	echo "<td>";
	echo $email;
	echo "</td>";
	echo "<td>";
	
	$numFailings = 0;
	// valid unless proven not to be

	if (!preg_match("/^[a-zA-Z]/", $email)) { // begins with a letter
		$numFailings++;
	}

	if (!preg_match("/[a-zA-Z]{2,}[@]/", $email)) { //Contains at least 2 characters before the @ symbol
		$numFailings++;
	}

	if (!preg_match("/.[a-zA-Z]$/", $email)) { //Contains nothing but letters in the domain (the part after the . at the end)
		$numFailings++;
	}

	if (!preg_match("/.[a-zA-Z]{2,4}/", $email)) { //Domain is at least 2 characters long.
		$numFailings++;
	}

	if (!preg_match("/[A-Z0-9._%+-]/", $email)) { //Only contains letters, numbers, and ._%+-
		$numFailings++;
	}



	if ($numFailings == 0) {
		echo "<span style=\"color: green;\">&#x2713</span>";
	} else {
		echo "<span style=\"color: red;\">&#x2718</span>";
	}

	echo "</td>";
	echo "<td>";

	if ($numFailings > 1) { // check if more than 1 failure occured
		echo "Multiple failures";
	} else {
		if (!preg_match("/^[a-zA-Z]/", $email)) { // begins with a letter
			echo "Does not begin with a letter";
		}
		if (!preg_match("/[a-zA-Z]{2,}[@]/", $email)) { //the yoyoyo! email I could not figure out but I guess technically it doesnt have 2 letters before the @ since "!" blocks them.
			echo "Does not contain atleast 2 letters before @";
		}
		if (!preg_match("/.[a-zA-Z]{2,4}/", $email)) { // domain needs to be 2 characters long
			echo "Domain needs to be atleast 2 characters long";
		}
		if (!preg_match("/.[a-zA-Z]$/", $email)) { //domain only contain letters
			echo "Has to contain only letters in the domain";

		}
		if (!preg_match("/[A-Z0-9._%+-]/", $email)) {
			echo "Can only contain letters, numbers and _.-%+";
		}

	}

	echo "</td>";
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";


?>