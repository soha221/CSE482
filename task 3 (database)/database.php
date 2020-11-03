<!DOCTYPE html>
<html>
<body>

<?php

$username = "root"; 
$password = ""; 
$database = "student_db"; 
$semErr = "";
$sem = "";
$mysqli;
$query;
$mysqli = new mysqli("localhost", $username, $password, $database); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["sem"])) {
    $semErr = "Semester is required";
  } else {
    $sem = test_input($_POST["sem"]);
  }
   
  // $query = "SELECT * FROM semesterDetails";
  $query = "SELECT * FROM semesterDetails where Semester like '%$sem%'";
  }else{
    $query = "SELECT * FROM semesterDetails";
  }

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  <div class="container">
    <h1>Students Details Search</h1>
    <p>Please Enter a Semester to see the Details</p>
    <hr>

    <label for="email"><b>Semester*</b></label>
    <input type="text" name="sem" id="sem" value="<?php echo $sem;?>"><span class="error"><?php echo $semErr;?><br><br></span>

    <button type="submit" class="registerbtn">Search</button>
  </div>
</form>

<?php   
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 
 
echo '<br><table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Semester</font> </td> 
          <td> <font face="Arial">Course</font> </td> 
          <td> <font face="Arial">Credit</font> </td> 
          <td> <font face="Arial">Faculty</font> </td> 
          <td> <font face="Arial">Grade</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $ID = $row["ID"];
        $Name = $row["Name"];
        $Semester = $row["Semester"];
        $Course = $row["Course"];
        $Credit = $row["Credit"]; 
        $Faculty = $row["Faculty"]; 
        $Grade = $row["Grade"]; 
 
        echo '<tr> 
                  <td>'.$ID.'</td> 
                  <td>'.$Name.'</td> 
                  <td>'.$Semester.'</td> 
                  <td>'.$Course.'</td> 
                  <td>'.$Credit.'</td> 
                  <td>'.$Faculty.'</td>
                  <td>'.$Grade.'</td>
              </tr>';
    }
    $result->free();
} 
?>

</body>
</html>