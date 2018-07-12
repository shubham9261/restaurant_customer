<?php
    $hostname = "localhost";
    $username = "root";
    $password = "anikeet3";
    $database = "myprojects";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM persons";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    }

    while ($row=mysqli_fetch_array($result)) {
        if($email==$row['email'] && $password==$row['password']){
            echo "hello" . $row['name'];
            break;
        } else{
            echo "invalid user";
        }
    }      	

    mysqli_close($conn);
?>

 
   

 
  
  
  

    
