<?php
$con=mysqli_connect("IP or server website","usernam","password","my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"UPDATE Temps SET Fahr = 50)
WHERE Sensor='Inlet'");

mysqli_close($con);
?>
