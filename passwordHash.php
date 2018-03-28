<?php

$password = "Awesome-0";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

echo "The password was: ".$password."</br>";
echo "The hash is: ".$passwordHash."</br>";

if (password_verify($password, $passwordHash)) {
	echo "Valid";
}
else {
	echo "Invalid";
}
?>