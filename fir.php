<?php
	// Database connection
	$conn = mysqli_connect('localhost','root','','fir');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	
    if(isset($_POST['signup'])){
		$firstName = $_POST['firstname'];
		$gender = $_POST['gender'];
        $day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$time = $_POST['time'];
		$type = $_POST['type'];
		$description = $_POST['description'];
		$snap = $_POST['snap'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$query = "INSERT INTO application(firstname,gender,day,month,year,time,type,description,snap,city,pincode,state,country)VALUES('$firstName', '$gender', '$day', '$month', '$year', '$time', '$type', '$description', '$snap', '$city', '$pincode', '$state', '$country')";
		$result = mysqli_query($conn,$query);
		if($result){ 
			echo "<script>window.alert('Registration Successfull');</script>";
            header("location:index.html");
		}
	}
?>