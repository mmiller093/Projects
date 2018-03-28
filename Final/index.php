<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<!-- jQuery 3.2.0 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

<!-- material icon set -->
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<title>WELCOME PAGE</title>

<style>


/* label color */
 .input-field label {
   color: #1976d2;
 }
 /* label focus color */
 .input-field input[type=text]:focus + label {
   color: #1976d2;
 }
 /* label underline focus color */
 .input-field input[type=text]:focus {
   border-bottom: 1px solid #1976d2;
   box-shadow: 0 1px 0 0 #1976d2;
 }
 /* label focus color */
 .input-field input[type=password]:focus + label {
   color: #1976d2;
 }
 /* label underline focus color */
 .input-field input[type=password]:focus {
   border-bottom: 1px solid #1976d2;
   box-shadow: 0 1px 0 0 #1976d2;
 }
 /* icon prefix focus color */
 .input-field .prefix.active {
   color: #1976d2;
 }
</style>
</head>
<body>
<div class="container">
<h1>Welcome</h1>
<?php
if (isset($_SESSION["username"])) {
   include "connect.php";
   $sql = "SELECT * FROM `login_info` WHERE `username` = '".$_SESSION["username"]."';";
   $result = mysqli_query($con, $sql);
   $user = mysqli_fetch_assoc($result);
   echo "<p class=\"flow-text\">Welcome back, ".$_SESSION["username"].". Your last login was ".$user["last_visit"].". You have visited us ".$user["times_visited"]." times.</p><p class=\"flow-text\"><a href=\"Logout.php\">Logout</a></p>";
} else {
   echo "<p class=\"flow-text\">Please <a href=\"Login.php\">Login</a> or <a href=\"Register.php\">Register</a></p>";
}
?>
</div>
</body>
</html>