<?php
session_start();
session_unset();

?>
<!DOCTYPE html>
<html>
    <head>
        <!-- jQuery 3.2.0 -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js">
        </script>
        <!-- Compiled and minified CSS -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css" rel="stylesheet"/>
        <!-- material icon set -->
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <!-- Compiled and minified JavaScript -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js">
        </script>
        <title>
            LOGOUT PAGE
        </title>
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
</html>
<body>
    <div class="container">
        <h2>
            Logout
        </h2>
        <p class="flow-text">
            You have been logged out.
        </p>
        <a href="Login.php" class="btn blue darken-2">
            Login
        </a>
    </div>
</body>
