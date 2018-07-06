<?php
    session_start();
?>
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

            $sql = "SELECT distinct location FROM RESTAURANT";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die(mysqli_error($conn));
            }
            
          $flag=0;
           while ($row=mysqli_fetch_array($result)) {
               // if($_POST["email"]==$row['email'] && $_POST["password"]==$row['password']) {
                 //   $flag=1;
                   // echo "RESTAURANT NAME: ".$row['name']."RESTAURANT ADDRESS: ".$row['address'];
                    echo "<a href="restaurant.php"><button>".$row['address']."</button></a></br>""
                    $_SESSION['name']=$row['name'];
                    setcookie("name",$row['name']);
                    break;
                } else {
                    $flag=0;
                }
            }

            mysqli_close($conn);
                
        ?>
        <a href="dashboard.php"><button>click</button></a>
    </body>
</html>
