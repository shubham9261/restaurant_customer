<?php
    session_start(); 
    $hostname = "localhost";
    $username = "root";
    $password = "123456";
    $database = "restaurant";
    
    

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }

    $flag=0;
    while ($row=mysqli_fetch_array($result)) {
        if($_POST['email']==$row['email'] && $_POST['password']==$row['password']) {
            echo "<button type=button>".$_POST["address"]."<img src=\"$_POST[\"image\"]\"/></button>";
            flag=1;
        }
    }
    
   /* if($flag==1){
        echo "hi" . $row['name'];
        setcookie("id",$row['id']);
        /*$_SESSION['name']=$row['name'];
        echo '<a href="dashboard.php"> click here </a>';
    }*/
    if(flag==0){
        echo "login failed";
    }
        	

    mysqli_close($conn);
?>


