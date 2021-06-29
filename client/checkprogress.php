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
  <title>Check Progress of Projects</title>
  <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
</head>
<body>

<form action="" method="post">


<div class="form-control">
<div class="alert alert-primary">Please Select Project Title to Check Project Progress and to Make Payment</div>
  <select class = "form-control"name='selectedproject' id="inputfields" required>
  <option value="">Select Project:</option>

  <?php




$query = " SELECT * FROM requests WHERE ClientID = $userID AND Response = ( 'Accepted' || 'Pending' ) ORDER BY ProjectID DESC ";
$result = mysqli_query($conn,$query);


  while($row=mysqli_fetch_assoc($result))
  {
    $projectID = $row["ProjectID"];

    $query1 = " SELECT * FROM project WHERE ClientID = $userID AND ProjectID = $projectID  ORDER BY Name DESC ";
    $result1 = mysqli_query($conn,$query1);
    while($row=mysqli_fetch_assoc($result1))
    {
      $projecttitle = $row["Name"];

?>
 

 <option value="<?php echo $row["Name"];?>"><?php echo $row["Name"];?></option>



<?php }
  }
 ?>

</select>
</div>



<br><br><br><br><br>


<div align="center">
<input type="submit" class = 'btn btn-primary' value="Check Progress"><br></div>
<br><br>
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



$query3 = " SELECT * FROM payments WHERE ProjectID = $projectID ";
$result3 = mysqli_query($conn,$query3);

if(mysqli_num_rows ($result3)>0)
{
  while($row=mysqli_fetch_assoc($result3))
  {
    $paymentID = $row['PaymentID'];
    $coderID = $row['CoderID'];
    $requestID = $row["RequestID"];
    $progress = $row['Progress'];


  }
  ?>

  <div class="container">
  <div class="row">
      <div class="col-lg-12 m-auto">
          <div class="card mt-2">
              <table class="table table-bordered table-hover text-center">
                  <thead class="thead-dark">
                  <tr>
                      <th> Payment ID </th>
                      <th> User ID </th>
                      <th> Coder ID </th>
                      <th> Request ID </th>
                      <th> Project ID </th>
                      <th> Progress </th>
                      <th> Make Payment </th>

                  </tr>
                  </thead>
                  <tr>        
                              <td><a href="#"><?php echo $paymentID; ?></a></td>
                              <td><a href="#"><?php echo $userID; ?></a></td>
                              <td><a href="search.php"><?php echo $coderID; ?></a></td>
                              <td><a href="#"><?php echo $requestID; ?></a></td>
                              <td><a href="#"><?php echo $projectID; ?></a></td>
                              <td><?php echo $progress; ?></td>
                              <td><a href="makepayment.php?paymentID=<?php echo $paymentID; ?>&projectID=<?php echo $projectID;?>" class = "btn btn-primary">Make Payment</a></td>


                          </tr> 
              </table>
          </div>
      </div>
  </div>
</div>



<?php

}
else
{
  echo "Coder hasn't Entered Progress Yet";
}


}
?>
