<?php

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }

    $userID = $_SESSION["userID"];
    $CoderID = $_GET['CoderID']; //from coderprofileforclient.php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hire Coder</title>
  <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
</head>
<body>
<form action="" method="POST">

<div class="form-control">
<div class="alert alert-primary">Please Select Project Title to Send Request for Hiring</div>
  <select class = "form-control"name='selectedproject' id="inputfields" required>
  <option value="" required>Select Project:</option>

<?php


$query = " SELECT * FROM project WHERE ClientID = $userID ORDER BY ProjectID DESC ";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
?>
 

  <option value="<?php echo $row["Name"];?>"><?php echo $row["Name"];?></option>



<?php }
}
else{
  echo "No Project Added";
} ?>
</div>
</select>
<br>
<br>

<div align="center">
<input type="submit" class = 'btn btn-primary' value="Send Request to Hire"><br></div>
<br>
</form>
</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$projecttitle = mysqli_real_escape_string($conn, $_POST["selectedproject"]);


  $query2 = " SELECT * FROM project WHERE Name = '".$projecttitle."'  ";
  $result2 = mysqli_query($conn,$query2);
  
  
    while($row=mysqli_fetch_assoc($result2))
    {
  
        $projectID = $row['ProjectID'];
  
    }


 

$query1 = " SELECT * FROM requests WHERE ClientID = '".$userID."'AND CoderID = '".$CoderID."' AND ProjectID = '".$projectID."'  ";
$result1 = mysqli_query($conn,$query1);


  while($row=mysqli_fetch_assoc($result1))
  {


      $sClientID = $row['ClientID'];
      $sCoderID = $row['CoderID'];
      $sprojectID = $row['ProjectID'];



  }

 
 if(empty($sClientID) && empty($sCoderID) && empty($sprojectID))
 {

    
$query = mysqli_query($conn, "INSERT INTO requests (ClientID, CoderID, ProjectID, Response) VALUES ('$userID', '$CoderID', '$projectID', 'Pending');");
     

if($query)
{

  echo "Request sent Successfully";

}
else
{
  echo "Reqests Query error";
}




}

else{ECHO "Request Sent Already";}

}


?>