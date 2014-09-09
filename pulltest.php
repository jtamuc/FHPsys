<?php
$con=mysqli_connect("local address","usernam","password","fhp_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Temps
WHERE SensorName='OutletH2O'");

while($row = mysqli_fetch_array($result)) {
  echo $row['SensorName'] . " " . $row['Fahren'];
  echo "<br>";
}
?>
