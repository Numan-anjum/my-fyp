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
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Hiring Status</title>
  <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
</head>
<body>
<form action="" method="POST">


<div class="form-control">
<div class="alert alert-primary">Please Select Project Title to Check Status</div>
  <select class = "form-control"name='selectedproject' id="inputfields" required>
  <option value="">Select Project:</option>

  <?php

$query = " SELECT * FROM requests WHERE ClientID = $userID ORDER BY ProjectID DESC ";
$result = mysqli_query($conn,$query);


  while($row=mysqli_fetch_assoc($result))
  {
    $projectID = $row["ProjectID"];

    $query1 = " SELECT * FROM project WHERE ClientID = $userID AND ProjectID = $projectID  ORDER BY ProjectID DESC ";
    $result1 = mysqli_query($conn,$query1);
    while($row=mysqli_fetch_assoc($result1))
    {
      $projecttitle = $row["Name"];




?>
 

 <option value="<?php echo $row["Name"];?>"><?php echo $row["Name"];?></option>



<?php } 
}
?>

</div>
</select>
<br>
<br>

<div align="center">
<input type="submit" class = 'btn btn-primary' value="Check Status"><br></div>
<br><br><br><br>
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




$query3 = "SELECT * FROM requests WHERE ProjectID = '".$projectID."' ";

$result3 = mysqli_query($conn,$query3);

if (mysqli_num_rows($result3) > 0) {
  while($row=mysqli_fetch_assoc($result3))
  {
    $requestID = $row['RequestID'];
    $userID = $row['ClientID'];
    $coderID = $row['CoderID'];
    $projectID = $row['ProjectID'];
    $response = $row['Response'];

  
}  


?>

</div>


<!DOCTYPE html>
<html lang="en">
<body class="bg-white">
<br><br><br><br><br><br><br><br><br><br>                 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                        <div class="card mt-auto">
                        <table class="table table-bordered table-hover text-center  mt-auto">
                            <thead class="thead-dark  mt-auto">
                            <tr>
                                <th> Request ID </th>
                                <th> User ID </th>
                                <th> Coder ID </th>
                                <th> Project ID </th>
                                <th> Response </th>
                            </tr>
                            </thead>
                            <tr>
                            <td><?php echo $requestID; ?></td>
                            <td><?php echo $userID; ?></td>
                            <td><?php echo $coderID; ?></td>
                            <td><?php echo $projectID; ?></td>
                            <td><?php echo $response; ?></td>
                            
                            </tr>
                      </table>
                </div>
            </div>
        </div>
</body>
</html>
<?php
}
else{
  $result4='<div class="alert alert-danger">No Project Request Has been Made</div>';
  echo $result4;}

}
?>