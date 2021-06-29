<?php

require_once("coderheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "coder")
    {
        header("Location: ../login.php");
    }

    $userID = $_SESSION["userID"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Progress of Projects</title>
  <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
</head>
<body>

<form action="" method="post">


<div class="form-control">
<div class="alert alert-primary">Please Select Project Title to Insert Projects Progress</div>

  <select class = "form-control" name='selectedproject' id="inputfields" required>
  <option value="">Select Project:</option>

  <?php




$query = " SELECT * FROM requests WHERE CoderID = '".$userID ."' AND Response = 'Accepted' ORDER BY ProjectID DESC ";
$result = mysqli_query($conn,$query);

 
  while($row=mysqli_fetch_assoc($result))
  {
    $projectID = $row["ProjectID"];


    $query1 = " SELECT * FROM project WHERE ProjectID = '".$projectID ."' ";
$result1 = mysqli_query($conn,$query1);

 
  while($row=mysqli_fetch_assoc($result1))
  {
 //   $projecttitle = $row["Name"];
    

?>
 

 <option value="<?php echo $row["Name"];?>"><?php echo $row["Name"];?></option>



<?php }
  }
 ?>

</select>
<br>



<select class = "form-control" name='projectprogress' id="projectprogress" required>
<option value="">Select Progress:</option>
<option value = "In-Progress">In-Progress</option>
 <option value = "Completed">Completed</option>
</select>
</div>


<br><br><br><br><br><br>

<div align="center">
<br><input type="submit" class = 'btn btn-primary' value="Insert Progress"><br></div><br><br><br>

</form>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$projecttitle = mysqli_real_escape_string($conn, $_POST["selectedproject"]);

$query2 = "SELECT * FROM project WHERE Name = '".$projecttitle."' ";
$result2 = mysqli_query($conn, $query2);

while($row=mysqli_fetch_assoc($result2))
{
  $projectID = $row['ProjectID'];

}

$projectprogress = mysqli_real_escape_string($conn, $_POST["projectprogress"]);

$query3 = "SELECT * FROM requests WHERE CoderID = '".$userID."' AND ProjectID = '".$projectID."' ";
$result3 = mysqli_query($conn, $query3);

while($row=mysqli_fetch_assoc($result3))
{
  $ClientID = $row['ClientID'];
  $requestID = $row['RequestID'];

}


    
$query4 = "SELECT * FROM payments WHERE CoderID = '".$userID."' AND ProjectID = '".$projectID."' ";
$result4 = mysqli_query($conn, $query4);
if(mysqli_num_rows($result4) == 0){
  $query5 = " INSERT INTO payments (ClientID, CoderID, ProjectID, RequestID, Progress) VALUES('$ClientID','$userID', '$projectID', '$requestID' ,'$projectprogress') ";




    $result5 = mysqli_query($conn,$query5);

    if($result5)
    {
      echo '<div align = "center" class = "alert-alert primary">';
      echo "Request ID = ".$requestID."<br>";
      echo "User ID = ".$userID."<br>";
      echo "Client ID = ".$ClientID."<BR>";
      echo "Project ID = ".$projectID."<br>";
      echo "Progress = ".$projectprogress."<br>";
      echo "Progress Inserted Successfully";
      echo '</div>';

    }
    else{echo "Error in Inserting Progress";}


}
else
{
  while($row=mysqli_fetch_assoc($result5))
  {
    $s_projectprogress = $row['Progress'];
  }
  if($s_projectprogress == "Completed")
  {
    echo '<div class="alert alert-secondary">';
    echo '<div align = "center">';
    echo "<br>"."Request ID = ".$requestID."<br>";
    echo "User ID = ".$userID."<br>";
    echo "Client ID = ".$ClientID."<br>";
    echo "Project ID = ".$projectID."<br>";
    echo "Project Completed Already";
    echo '</div>';
    echo '</div>';

  }
  else
  {
    $query3 = "UPDATE payments SET Progress = '".$projectprogress."'  WHERE CoderID = '".$userID."' AND ProjectID = '".$projectID."' "; 

  $result3 = mysqli_query($conn, $query3);
  echo '<div align = "center">';
  echo "<br>"."Request ID = ".$requestID."<br>";
  echo "User ID = ".$userID."<br>";
  echo "Client ID = ".$ClientID."<br>";
  echo "Project ID = ".$projectID."<br>";
  echo "Progress = ".$projectprogress."<br>";
  echo "Progress Updated Successfully";
  echo '</div>';
  
  }




}
}
?>
