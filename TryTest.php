<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<?php
		$userName = "";
		$password = ""; // $password declared
		$count = 0;
		$passed = false;
		
		if(isset($_POST['submit'])) { // if submitted, fill in $username and $password
										// note, $password is used here, and down below $pass is used...problem?
			
			$userName = $_POST['userName'];
			$pass = $_POST['password']; // $pass is used instead?  it will only exist inside the if{} block
			
		}
	?>
		
			<!-- will ALWAYS print form...if he moved the lower PHP block up , and used die(), it wouldn't -->

			<form  method = 'post'>
			User Name: <input name = 'userName' type = 'text' value = "<?php echo $userName; ?>"/> <br/><br/>
			Password: <input name = 'password' type = 'password' value = "<?php echo $password; ?>"/> <br/><br/>	<!-- insecure for reasons i told you -->
			<input name = 'submit' type = 'submit'/><br/><br/>
			</form>
			
	<?php
		if(isset($_POST['submit'])) { 
			if(isset($_POST['userName'])){ // if the form was submtted
				// check each regex
				//.   if matches, add 1 to count
				if(preg_match('/\d+/',$password)){
					echo "Must have at least one number: Pass &#10004;<br/>";
					$count += 1;
				}else{echo "Must have at least one number: Fail &#10008;<br/>";}
				if(preg_match('/[a-z]+/', $password)){
					echo 'Must have at least one lowercase letter: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must have at least one lowercase letter: Fail &#10008;<br/>';}
				if(preg_match('/[A-Z]+/',$password)){
					echo 'Must have at least one uppercase letter: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must have at least one uppercase letter: Fail &#10008;<br/>';}
				if(!preg_match('/\s+/',$password)){
					echo 'Must contain no spaces: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must contain no spaces: Fail &#10008;<br/>';}
				if(preg_match('/.{8,16}/',$password)){
					echo 'Must be 8 - 16 characters long: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must be 8 - 16 characters long: Fail &#10008;<br/>';}
				if(preg_match('/\W+/',$password)){
					echo 'Must have at least one special character: Pass &#10004;<br/>';
					$count += 1;
				}else{echo 'Must have at least one special character: Fail &#10008;<br/>';}
			}else{
				echo '*Please Enter your User Name*';
			}

			// if all passed, output hash
			
			if($count == 6){
				$passed = true;
				$phash = password_hash($Password, PASSWORD_DEFAULT);
				echo '<br/><br/>'.$phash;
			}
			
		}
		
		
	?>

</body>
</html>