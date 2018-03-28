<?php
/*function complicated_phrase() {
	$phrase = "This is the phrase \"¯\_(ツ)_/¯";
	return $phrase;
}
echo complicated_phrase();
echo "\n\n";

function another_phrase() {
	$phrase2 = "This is the other phrase ¯\_(ツ)_/¯ \\n";
	#return "\\n";
	return $phrase2;
}
echo another_phrase(); 

function average_of_numbers($a,$b,$c) {

	$average = ($a+$b+$c) /3;
	return $average;
}
echo average_of_numbers(10,10,10);
echo "\n";

function product_of_numbers($a,$b,$c) {
	$product = $a*$b*$c;
	return $product;
}
echo product_of_numbers(5,10,5);
echo "\n";

function array_numbers($a,$b,$c) {
	$numbers = array();
	$numbers["sum"] = $a+$b+$c;
	$numbers["difference"] = $a-$b-$c;
	$numbers["product"] = $a*$b*$c;
	return $numbers;

}
var_dump(array_numbers(10,10,10)); */

function far_to_cel($F) {
	#$F = 80;
	$C = ($F - 32)*5/9;
	return $C;
}
echo far_to_cel(80) . " ºbC";
echo "\n";

function cel_to_far($C) {
	#$C = 35;
	$F = ($C *9/5)+32;
	return $F;
}
echo cel_to_far(35) . " ºF";
echo "\n";
function getPermissions($permissions) {
	$worldPermission = $permissions % 10;
	$groupPermission = (($permissions % 100) - ($permissions % 10))/10;
	$userPermission = (($permissions % 1000) - ($permissions % 100))/100;
	$permission = array();
	$permission["user"] = array();
	if ($userPermission/4 >= 1) { // if 4 is in user's permission number
		// user can read
		$userPermission -= 4;
		$permission["user"]["read"] = true; // user can read
	} else {
		$permission["user"]["read"] = false; // user can not read
	}

	if ($userPermission/2 >= 1) {
		//user can write
		$userPermission -= 2;
		$permission["user"]["write"] = true; 
	} else {
		$permission["user"]["write"] = false;
	}

	if ($userPermission/1 >= 1) {
		// user can execute
		$userPermission -= 1;
		$permission["user"]["execute"] = true;
	} else {
		$permission["user"]["execute"] = false;
	}

	$permission["group"] = array();
	if ($groupPermission/4 >= 1) { // if 4 is in group's permission number
		// group can read
		$groupPermission -= 4;
		$permission["group"]["read"] = true; // group can read
	} else {
		$permission["group"]["read"] = false; // group can not read
	}

	if ($groupPermission/2 >= 1) {
		//group can write
		$groupPermission -= 2;
		$permission["group"]["write"] = true; 
	} else {
		$permission["group"]["write"] = false;
	}

	if ($groupPermission/1 >= 1) {
		// group can execute
		$groupPermission -= 1;
		$permission["group"]["execute"] = true;
	} else {
		$permission["group"]["execute"] = false;
	}

	$permission["world"] = array();
	if ($worldPermission/4 >= 1) { // if 4 is in world's permission number
		// world can read
		$worldPermission -= 4;
		$permission["world"]["read"] = true; // world can read
	} else {
		$permission["world"]["read"] = false; // world can not read
	}

	if ($worldPermission/2 >= 1) {
		//world can write
		$worldPermission -= 2;
		$permission["world"]["write"] = true; 
	} else {
		$permission["world"]["write"] = false;
	}

	if ($worldPermission/1 >= 1) {
		// world can execute
		$worldPermission -= 1;
		$permission["world"]["execute"] = true;
	} else {
		$permission["world"]["execute"] = false;
	}


	return $permission;
}

var_export(getPermissions(753));
// returns array of permissions according to UNIX specification
// array (
//   "user" => Array(
//                      "read" => true,
//                      "write" => true,
//                      "execute" => false
//                    ),
// etc..
// )

?>