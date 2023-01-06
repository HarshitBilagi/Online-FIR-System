<?php 
    $conn = mysqli_connect('localhost','root','','fir');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
    if(isset($_POST['login-submit'])){
        $firstname = $_POST['firstname'];
        $password = $_POST['password'];
        $sql = "SELECT * from registration WHERE firstname='$firstname'";
        $result = mysqli_query($conn, $sql);
    if($result) {
        $row = mysqli_num_rows($result);
        if($row > 0) {
            $details = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['firstname'] = $details['firstname'];
            $_SESSION['userid'] = $details['userid'];
            $_SESSION['lastname'] = $details['lastname'];
            $_SESSION['aadhar'] = $details['aadhar'];
            $_SESSION['number'] = $details['number'];
            echo "<script>alert('Login Successfull');</script>";
            header('Location:dashboard.html');
        }
    }
    }
?>