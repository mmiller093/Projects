<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<?php
		$userName = "";
		$password = "";
		$count = 0;
		$passed = false;
		
		if(isset($_POST['submit'])) {
			
			$userName = $_POST['userName'];
			$pass = $_POST['password'];
			
		}
	?>
		


			<form action = 'login.php' method = 'post'>
			User Name: <input name = 'userName' type = 'text' value = "<?php echo $userName; ?>"/> <br/><br/>
			Password: <input name = 'password' type = 'password' value = "<?php echo $password; ?>"/> <br/><br/>	
			<input name = 'submit' type = 'submit'/><br/><br/>
			</form>
			
	<?php
		if(isset($_POST['submit'])) {
			if(isset($_POST['userName'])){
				if(preg_match('/\d+/',$pass)){
					echo "Must have at least one number: Pass &#10004;<br/>";
					$count += 1;
				}else{echo "Must have at least one number: Fail &#10008;<br/>";}
				if(preg_match('/[a-z]+/', $pass)){
					echo 'Must have at least one lowercase letter: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must have at least one lowercase letter: Fail &#10008;<br/>';}
				if(preg_match('/[A-Z]+/',$pass)){
					echo 'Must have at least one uppercase letter: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must have at least one uppercase letter: Fail &#10008;<br/>';}
				if(!preg_match('/\s+/',$pass)){
					echo 'Must contain no spaces: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must contain no spaces: Fail &#10008;<br/>';}
				if(preg_match('/.{8,16}/',$pass)){
					echo 'Must be 8 - 16 characters long: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must be 8 - 16 characters long: Fail &#10008;<br/>';}
				if(preg_match('/\W+/',$pass)){
					echo 'Must have at least one special character: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must have at least one special character: Fail &#10008;<br/>';}
			}else{
				echo '*Please Enter your User Name*';
			}
			
			if($count == 6){
				$passed = true;
				$phash = password_hash($pass, PASSWORD_DEFAULT);
				echo '<br/><br/>'.$phash;
			}
			
		}
		
		
	?>

</body>
</html>
