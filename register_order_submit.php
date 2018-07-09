<?php
    $hostname = "localhost";
    $username = "root";
    $password = "123456";
    $database = "restaurant";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }

    $name=$_POST['name'];
    $add=$_POST['address'];
    $email=$_POST['login'];
    $pass=$_POST['password'];
    
    $sql = "INSERT INTO PERSON (name, address, login, password) VALUES ('$name', '$add', '$email','$pass')";

    if (mysqli_query($conn, $sql)) {
        	echo "Registration successful";
            echo '<a href="login_register.php">clickhere</a>';
    } else {
        	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

