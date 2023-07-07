<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'fir');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if (isset($_POST['login-submit'])) {
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];

    // Sanitize user input (example using mysqli_real_escape_string)
    $firstname = mysqli_real_escape_string($conn, $firstname);
    $password = mysqli_real_escape_string($conn, $password);

    // Hash the password (example using password_hash)
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM registration WHERE firstname='$firstname'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $details = mysqli_fetch_assoc($result);
            $storedPasswordHash = $details['password'];

            // Verify the password (example using password_verify)
            if (password_verify($password, $storedPasswordHash)) {
                $_SESSION['firstname'] = $details['firstname'];
                $_SESSION['userid'] = $details['userid'];
                $_SESSION['lastname'] = $details['lastname'];
                $_SESSION['aadhar'] = $details['aadhar'];
                $_SESSION['number'] = $details['number'];
                echo "<script>alert('Login Successful');</script>";
                header('Location:dashboard.html');
                exit(); // Stop further execution
            } else {
                echo "<script>alert('Incorrect password');</script>";
            }
        } else {
            echo "<script>alert('User not found');</script>";
        }
    } else {
        echo "<script>alert('Database error');</script>";
    }
}
?>
