<?php
    $hostname = "localhost";
    $username = "root";
    $password = "123456";
    $database = "ungineering";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }

    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        	echo "Registration successful";
    } else {
        	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

