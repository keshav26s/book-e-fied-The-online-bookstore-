<?php
	$connect = new mysqli('localhost','root','4s5j6nBCEIsNrUiF', 'www_project');
	
	if($connect->connect_error){
		die('Connection Failed');
		
	}else
	echo 'Invaid Login Credentials';    //connection successful
	
	$username= $_POST['username'];
	$password= $_POST['password'];
	
	$sql="SELECT name from login WHERE username='$username' AND password='$password'";
	
	$result = $connect->query($sql);
	
	if($result-> num_rows> 0){
	
		while($row=$result->fetch_assoc()){
			echo "<br>Admin name is: " . $row["name"];
			header("Location: http://localhost/bookefied/"); /* Redirect browser */
			exit();
			
		}
	}else
		echo "<br>Username and Password do not match";
?>