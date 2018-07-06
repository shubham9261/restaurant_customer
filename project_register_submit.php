<!doctype html>
<html>
    <body>
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "123456";
    $database = "customer_restaurant";
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }

    $name=$_POST['name'];
    $address=$_POST['address']
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql = "INSERT INTO PERSON (name, address,login, password) VALUES ('$name','$address','$login','$pass')";
    if (mysqli_query($conn, $sql)) {
        	echo "Registration successful";
    }
    else {
        	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
     </body>
</html>
