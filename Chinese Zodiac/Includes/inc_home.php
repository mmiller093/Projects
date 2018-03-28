<?php 
<a href="index.php?page=home_page&section=php">PHP</a>
<a href="index.php?page=home_page&section=zodiac">Chinese Zodiac</a>

if (isset($_GET['section'])) {
	switch ($_GET['section']) {
		case 'zodiac':
			include('Includes/inc_chinese_zodiac.php');
			break;
		case 'php':

		default:
			include('Includes/inc_php_info.php');
			break;
	}
}
else
	include('Includes/inc_php_info');
	break;
?>