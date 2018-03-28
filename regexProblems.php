<?php
//create curl resources
$ch = curl_init();


$problem = 'files';

//set url
curl_setopt($ch, CURLOPT_URL, "brandonwalker.net/web/CSCT237_T01/regex.php?problem=$problem");

//return transfer as string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//get output
$output = curl_exec($ch);

//close connection
curl_close($ch);

echo $output."<br/><br/>";

$output = preg_replace("/<h\d>/","<div style='color:red'>",$output);
$#output = preg_replace("/<\/h/d>/","</div>",$output);

#dates problem
preg_match_all('/\d{2}[-\/]\d{2}[-\/]\d{4}/',$output, $matches);
foreach($matches as $match) {
	foreach ($match as $m) {
		echo $m."<br/>";	
	}
}

//file problem find files that are executable. (end in exe, bat.) Parse out the files and tell what are executable using regex.

//echo $output;
?>