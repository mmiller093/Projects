<?php
$log = file_get_contents("Chat.txt");

$lines = explode("\n", $log);

$matchedLines = [];

foreach ($lines as $line) {
	if (preg_match("/^\d{2}:\d{2}:\d{2}[+-]/", $line)) {
		$matchedLines[] = $line;
	}
}
foreach ($matchedLines as $foundListing) {
	preg_match('/^(\d{2}:\d{2}:\d{2})(\+|-) ([a-zA-Z0-9_+-]+).*?(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3})/', $foundListing, $groups);
	/*
	^ - start at beginning of line
	(\d{2}:\d{2}:\d{2}) - group 3 sections of 2 digits each, separated by a colon
	(\+|-) - a group with a plus or minus
	([a-zA-Z0-9_+-]+) - a group with one or more matching A-Z, a-z, 0-9, and special _,+,- characters
	.*? - used to match the space between the username and IP
	(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}) - IP address, 4 groups of 1-3 digits separated by dots
	*/
	if ($groups[2] == "-") {
		echo "LOGOUT at ".$groups[1]." by ".$groups[3]." (IP: ".$groups[4].")\n";
	} else { 
		echo "LOGIN at ".$groups[1]." by ".$groups[3]." (IP: ".$groups[4].")\n";
	}
}
