<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="dashboard.css"/>
    </head>
    <body background="restaurant.jpg">
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "123456";
            $database = "restaurant";
    
    

            $conn = mysqli_connect($hostname, $username, $password, $database);
            if (!$conn) {
        	    die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT DISTINCT address,image FROM RESTAURANT";
            $result = mysqli_query($conn, $sql);


            if (!$result) {
                die(mysqli_error($conn));
            }

            $flag=0;
            while ($row=mysqli_fetch_array($result)) {
                ?>
                    <button type="button"style="border: solid 5px black"><?php echo $row["address"]?> </button> 
                    </br></br></br>
                <?php
            }    
        	

    mysqli_close($conn);
?>
    </body>
</html>

