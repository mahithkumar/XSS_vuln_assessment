
<!DOCTYPE html>
<html>
<body>

<?php

 $con = mysqli_connect("localhost","root","","haccounts");


$sql = "SELECT email,pass FROM user";
 $result = mysqli_query($con,$sql) or die('<pre>' . mysqli_error() . '</pre>' );

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> username: ". $row["email"]. " - pass: ". $row["pass"]. "<br>";
    }
} else {
    echo "0 results";
}

$con->close();
?>
</body>
</html>
