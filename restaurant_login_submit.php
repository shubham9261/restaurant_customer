<?php
    $hostname = "localhost";
    $username = "root";
    $password = "123456";
    $database = "restaurant";
    
    

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }
    $email=$_POST['login'];
    $pass=$_POST['password'];
    $sql = "SELECT * FROM PERSON";
    $result = mysqli_query($conn, $sql);


    if (!$result) {
        die(mysqli_error($conn));
    }

    $flag=0;
    while ($row=mysqli_fetch_array($result)) {
        if($_POST['login']==$row['login'] && $_POST['password']==$row['password']) {
            $flag=1;
            break;
        }
    }
    
    if($flag==1){
        echo "login successful";
        echo '<a href="dashboard.php"> click here for choosing your nearest location </a>';
    }
    if($flag==0){
        echo "login failed";
        echo '<a href="restaurant_login_form.php"> click here back to our login page </a>';
    }
        	

    mysqli_close($conn);
?>


