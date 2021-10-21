<?php
$servername="localhost";
$username="root";
$password="";
$database="php";
$con=mysqli_connect($servername,$username,$password,$database);

if(!$con){
	die("Connection Failled:".mysqli_connect_error());
}




      
	  if(isset($_POST['name']) && isset($_POST['email'])){
		$name =  $_POST['name'];
		$email =  $_POST['email'];
		
		if(!empty($name) && !empty($email)){
			$sql="SELECT id FROM register WHERE name='$name' AND email='$email'";
			$sql_query=mysqli_query($con,$sql);
			$mysqli_num_rows=mysqli_num_rows($sql_query);
			
			if($mysqli_num_rows){
				
				header('location:login.php');
				
			}else{
				echo 'registation not successfull';
			}
			
		}else{
			echo 'fill up all fields';
		}
	  }

?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="loginregister.css">
</head>
<body>
<div>
<br/>
<br/>
<h1>Registation Form</h1>
<form action="register.php" method="POST">
<label>Name </label><br>
<input type="text" name="name"><br/><br/>
<label>Email </label><br>
<input type="text" name="email"><br/><br/>
<input type="submit" value="Register">
</div>
</form>
</body>
</html>



