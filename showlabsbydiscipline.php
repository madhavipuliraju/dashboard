<?php
$q = $_REQUEST["q"];

$con = mysqli_connect('localhost','root','root','vlabs_database');
if (!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}
if($q!=0)
{
   mysqli_select_db($con,"vlabs_database");
   $sql="SELECT * FROM labs a, disciplines b  WHERE a.discipline_id='$q' AND b.id='$q'";
   $result = mysqli_query($con,$sql); 
   $two = mysqli_num_rows($result);
    
   echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
    echo "<br><br>";
    echo "<table border='2'>";

echo "<tr align='center'><td>DISCIPLINE NAME</td><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td</tr>";
while($row = mysqli_fetch_array($result)) {
 
  
  echo "<tr align='left'><td>".$row['discipline_name']."</td><td>" . $row['lab_id'] ."</td><td>" . $row['lab_name'] ."</td><td align='center'>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

}

  echo "</table>";
}
mysqli_close($con);
?> 
