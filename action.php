<?php 
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobileno=$_POST['mobile'];
	$password=$_POST['password'];

	
	if(!empty($username) || !empty($email) || !empty($mobileno) || !empty($password))
	{
		$host="localhost";
		$dbUsername= "";
		$dbPassword="";
		$dbname="tapas";
		//create connection
		$conn=new mysqli('127.0.0.1','tapso@1997','tapso@1996','tapas');
		if(mysqli_connect_error()){
			die('connect error('.mysqli_connect_error().')');
		}  
		else{
			$INSERT="INSERT into user (username,email,mobileno,password) values($username,$email,$mobileno,$password)";
	
			//prepare statement
			//$stmt=$conn->prepare($SELECT);
			//$stmt->bind_param("$",$email);
		}
	}
	else
	{
		echo "all field are required";
		//die();
	}
?>