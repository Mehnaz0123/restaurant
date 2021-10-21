<?php
$servername="localhost";
$username="root";
$password="";
$database="php";
$con=mysqli_connect($servername,$username,$password,$database);

if(!$con){
	die("Connection Failled:".mysqli_connect_error());
}




      
	  if(isset($_POST['username']) && isset($_POST['password'])){
		$username =  $_POST['username'];
		$password =  $_POST['password'];
		
		if(!empty($username) && !empty($password)){
			$sql="SELECT id FROM users WHERE username='$username' AND password='$password'";
			$sql_query=mysqli_query($con,$sql);
			$mysqli_num_rows=mysqli_num_rows($sql_query);
			
			if($mysqli_num_rows){
				
				header('location:homepage.html');
				
			}else{
				echo 'invalid username or password';
			}
			
		}else{
			echo 'fill up all fields';
		}
	  }

?>
<!DOCTYPE html>
<html>
<head>
<title>Login </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="loginregister.css">
</head>
<body>
<div>
<br/>
<br/>
<h1>Login Form</h1>
<form action="login.php" method="POST">
<label>Username </label><br>
<input type="text" name="username"><br/><br/>
<label>Password </label><br>
<input type="password" name="password"><br/><br/>
<input type="submit" value="Login">
</div>
</form>
</body>
</html>
