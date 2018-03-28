<form enctype="multipart/form-data" action="UploadImage.php" method="POST">
    File to upload: <input name="myFile" type="file" />
    <input type="submit" value="Upload File" />
</form>
<?php
if (isset($_FILES['myFile'])) {
	$directory = 'Images/';
	$filepath = $directory . basename($_FILES['myFile']['name']);

	if (move_uploaded_file($_FILES['myFile']['tmp_name'], $filepath)) {
	  echo "File is valid, and was successfully uploaded.\n";
	} else {
	   echo "Upload failed";
	}
}

preg_match('/^Dragon\d+\.(gif|jpg|png)$/', subject)

?>