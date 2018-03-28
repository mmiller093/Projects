<?php

if(isset($_POST['proverb'])){
  $say =  $_POST['proverb'];
  
  file_put_contents('proverbs.txt', $say.PHP_EOL , FILE_APPEND);

}
?>
<h1>Upload a Proverb</h1>
<form action="UploadProverb.php" method="post">
  <textarea name="proverb" row="2"></textarea><br><br>
  <button type="submit" value="show" name="show_sign">Add a Proverb</button>
</form>
