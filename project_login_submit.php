<!doctype html>
<html>
    <body>
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "123456";
            $database = "customer_restaurant";
            $conn=mysqli_connect($hostname,$username,$password,$database);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die(mysqli_error($conn));
            }
            
            $flag=0;
            while ($row=mysqli_fetch_array($result)) {
                if($_POST["email"]==$row['email'] && $_POST["password"]==$row['password']) {
                    $flag=1;
                    echo "hello"."  ".$row['name'];
                    <a href="fetching_restaurant_from_particular_location.php"><button>click</button></a>
                    //$_SESSION['name']=$row['name'];
                   // setcookie("name",$row['name']);
                    break;
                } else {
                    $flag=0;
                }
            }
	
            if($flag==0){
                echo  "Invalid user";
                <a href="/ugineering/project_login_form.php"><button>click here to enter again </button></a>
            }

            mysqli_close($conn);
                
        ?>
        
    </body>
</html>
