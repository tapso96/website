<?php 
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	
	if(!empty($username) || !empty($email) || !empty($mobile) || !empty($password))
	{
		$host="localhost";
		$dbUsername= "root";
		$dbPassword="";
		$dbname="tapas";
		//create connection
		$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
		if(mysqli_connect_error()){
			die('connect error('.mysqli_connect_error().')');
	}   else{
			$INSERT="INSERT into user (username,email,mobileno,password) values($username,$email,$mobile,$password)";
			//prepare statement
			$stmt=$conn->prepare($SELECT);
			$stmt->bind_param("$",$email);
		}
	
	else
	{
		echo "all field are required";
		//die();
	}
?>