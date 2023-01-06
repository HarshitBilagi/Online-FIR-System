<?php
	// Database connection
	$conn = mysqli_connect('localhost','root','','fir');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	
    if(isset($_POST['signup'])){
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
        $password = $_POST['password'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$aadhar = $_POST['aadhar'];
		$query = "INSERT INTO registration(firstname,lastname,password,email,number,aadhar)VALUES('$firstName', '$lastName', '$password', '$email', '$number', '$aadhar')";
		$result = mysqli_query($conn,$query);
		if($result){ 
			echo "<script>alert('Registration Successfull');</script>";
            header("location:login.html");
		}
	}
?>