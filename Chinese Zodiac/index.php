<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chinese Zodiac</title>
<link rel="stylesheet" type="text/css" href="ChineseZodiac.css" /> 
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<div class="header"><?php include("Includes/inc_header.php");?></div>
<div class="nav_text"><?php include("Includes/inc_text_links.php");?></div>
<div class="midblock">  
<div class="nav_buttons"><?php include("Includes/inc_button_nav.php");?></div>
<div class="dynamic_content">
<?php  
if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case 'site_layout':
			include('Includes/inc_site_layout.php');
			break;

		case 'control_structures':
			include('Includes/inc_control_structures.php');
			break;

		case 'string_functions':
			include('Includes/inc_string_functions.php');
			break;

		case 'web_forms':
			include('Includes/inc_web_forms.php');
			break;

		case 'midterm_assessment':
			include("Includes/inc_midterm_assessment.php");
			break;

		case 'state_information':
			include("Includes/inc_state_information.php");
			break;

		case 'user_templates':
			include("Includes/inc_user_templates.php");
			break;

		case 'final_project':
			include("Includes/inc_final_project.php");
			break;

		case 'home_page':

		default:
			include("Includes/inc_home_page.php");
	}
}
else 
	include("Includes/inc_home_page.php");
?></div></div>
<div class="footer"><?php include("Includes/inc_footer.php")?></div>
