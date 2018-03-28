<?php

$emailToTest = "ss@aol.com";


echo "Testing: ".$emailToTest."<br>\n";

$regex = "/^[a-zA-Z]{2,}\+[@][a-zA-Z]{2,}+[a-zA-Z.]{2,4}$/";

echo "Testing regex ".$regex.": ".preg_match($regex, $emailToTest)."<br>\n";


$regex = "/[a-zA-Z]/";

echo "Testing regex ".$regex.": ".preg_match($regex, $emailToTest)."<br>\n";


$regex = "/^[a-zA-Z-z0-2_\-]{2,}+[@][A-z0-9_\-]+([.][A-z\-]+)+[A-z.]{2,4}$/";

echo "Testing regex ".$regex.": ".preg_match($regex, $emailToTest)."<br>\n";


$regex = "/*/";

echo "Testing regex ".$regex.": ".preg_match($regex, $emailToTest)."<br>\n";


$regex = "/*/";

echo "Testing regex ".$regex.": ".preg_match($regex, $emailToTest)."<br>\n";