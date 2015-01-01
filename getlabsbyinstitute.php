<?php
$p = $_POST["p"];//institute
$q = $_POST["q"];//discipline
$r = $_POST["r"];//status
$s = $_POST["s"];//integration-level


$con = mysqli_connect('localhost','root','root','vlabs_database');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
?>
<script>
function myFunction(str)
{
alert("DFD");
}
</script>

<?php
mysqli_select_db($con,"vlabs_database");

if($p!=0 && $q==0 && $r=='None' && $s=='None')//disply only institutes
{
$sql="SELECT * FROM labs WHERE institute_id='$p'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}



else if($p==0 && $q!=0 && $r=='None' && $s=='None')//only disciplines 
{

$sql="SELECT * FROM labs WHERE discipline_id='$q'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
    //  echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";
echo "<tr align='left'><td>$row[lab_id]</td><td><a href='test.php?id=\"$row[lab_name]\"'  value=\"$row[lab_name]\">".$row[lab_name]."</a></td><td>".$row[integration_level]."</td><td>".$row[status]. "</td></tr>";



       }
echo "</table>";
}
else if($p==0 && $q==0 && $r!='None' && $s=='None') //only status
{


$sql="SELECT * FROM labs WHERE status='$r'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}


else if($p==0 && $q==0 && $r=='None' && $s!='None') //only integrations
{


$sql="SELECT * FROM labs a WHERE a.integration_level='$s'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}




else if($p!=0 && $q!=0 && $r=='None' && $s=='None') //institute with integrations
{


$sql="SELECT * FROM labs a WHERE a.institute_id='$p' and a.discipline_id='$q'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}
else if($p!=0 && $q!=0 && $r!='None' && $s=='None')//institute with discipline with status
{


$sql="SELECT * FROM labs a WHERE a.institute_id='$p' and a.discipline_id='$q' and a.status='$r'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}


else if($p!=0 && $q==0 && $r!='None' && $s=='None')//institute with status
{


$sql="SELECT * FROM labs a WHERE a.institute_id='$p' and a.status='$r'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}

else if($p==0 && $q!=0 && $r!='None' && $s=='None')//discipline with status
{


$sql="SELECT * FROM labs a WHERE a.discipline_id='$q' and a.status='$r'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}


else if($p!=0 && $q==0 && $r=='None' && $s!='None')//institute with integrations
{


$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.institute_id='$p'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}


else if($p==0 && $q!=0 && $r=='None' && $s!='None')//discipline with integrations
{


$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.discipline_id='$q'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}


else if($p==0 && $q==0 && $r!='None' && $s!='None')//status with integration
{


$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.status='$r'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}

else if($p!=0 && $q!=0 && $r=='None' && $s!='None')//institute with discipline with integration
{


$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.institute_id='$p' and a.discipline_id='$q'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}


else if($p!=0 && $q!=0 && $r!='None' && $s!='None')//institute with discipline with integration with status
{


$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.institute_id='$p' and a.discipline_id='$q' and a.status='$r'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}



else if($p!=0 && $q==0 && $r!='None' && $s!='None')//institute with integration with status
{


$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.institute_id='$p' and a.status='$r'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}


else if($p==0 && $q!=0 && $r!='None' && $s!='None')//expect institute with others
{


$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.discipline_id='$q' and a.status='$r'";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br><h4>Total Number Of Labs:".$two."</h4>";
echo "<br><br>";
echo "<table border='2'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
      while($row = mysqli_fetch_array($result)) 
      {  
       echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] ."</td><td>" . $row['integration_level'] ."</td><td>" . $row['status'] ."</td></tr>";

       }
echo "</table>";
}

else
{
echo "<br><br>";
echo "<font color='red'> Please Select Atleast One Value..!!</font>";
}

mysqli_close($con);
?> 
