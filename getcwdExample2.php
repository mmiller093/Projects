<?php
// declare the directory where stuff is
$dir = "C:\\xampp\\htdocs";
// make sure that you have a folder, cant get a list of files if you're looking at a file
echo $dir;
echo "test";
if (is_dir($dir)) {
	// make a table so its pretty
	echo "<table border='1' width='100%>\n";
	echo "<tr><th>Filename</th><th>File Size</th><th>File Type</th></tr>\n";

	// array of stuff in the folder
	$dirEntries = scandir($dir);
	// for each thing in the folder
	foreach ($dirEntries as $Entry) {
		// get the full path of the file (/var/www/uploads/test.txt)
		$EntryFullName = $dir . "/" . $Entry;

		// escape html characters, so you cant have a file named <script>alert();</script> which would be bad
		echo "<tr><td>" . htmlentities($Entry) . 
		// get the size of the file
		"</td><td>" . filesize($EntryFullName) . 
		// get type of file
		"</td><td>" . filetype($EntryFullName) . "</td></tr>\n";
		
	}
	// close the table
	echo "</table>\n";
} else {
	//your folder either doesnt exist or is a file
	echo "<p>The directory " . htmlentities($dir) . " does not exist.</p>";
}

?>