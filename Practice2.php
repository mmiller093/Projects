<?php

#$HospitalDepts = array("Anesthesia", 
#					   "Molecular Biology",
#					   "Neurology");
					   
#$HospitalDepts[0] = "Anesthesiology";
#$HospitalDepts[1] = "Bio Funk";
#$HospitalDepts[2] = "Neurology Health";
#print_r($HospitalDepts);

$Value1 = "first text string";
$Value2 = "second text string";
$ReturnValue = ($Value1 == $Value2 ? "true" : "false");
echo '<p>$Value1 equal to $Value2: ', $ReturnValue, "<br/>";

$Value1 = "50";
$Value2 = "75";
$ReturnValue = ($Value1 == $Value2 ? "true" : "false");
echo '<p>$Value1 equal to $Value2: ', $ReturnValue, "<br/>";

$ReturnValue = ($Value1 != $Value2 ? "true" : "false");
echo '<p>$Value1 not equal to $Value2: ', $ReturnValue, "<br/>";

$ReturnValue = ($Value1 > $Value2 ? "true" : "false");
echo '<p>$Value1 greater than $Value2: ', $ReturnValue, "<br/>";

$ReturnValue = ($Value1 < $Value2 ? "true" : "false");
echo '<p>$Value1 greater than Value2: ', $ReturnValue, "<br/><br/>";

#$gender = "male";
#$age = 23;
#$RiskFactor = $gender == "male" && $age<=21;

$SpeedLimitMiles = "55 mph";
$SpeedLimitKilometers = ((is_int($SpeedLimitMiles)) ?
	$SpeedLimitMiles * 1.6:
	(int) $SpeedLimitMiles * 1.6);
	
echo "$SpeedLimitMiles is equal to $SpeedLimitKilometers kph";
?>