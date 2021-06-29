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
  <div class="container">
  <div class="row">
      <div class="col-lg-12 m-auto">
          <div class="card mt-2">
              <table class="table table-bordered table-hover text-center">
                  <thead class="thead-dark">
                  <tr>
                      <th> Payment ID </th>
                      <th> Request ID </th>
                      <th> User ID </th>
                      <th> Client ID </th>
                      <th> Project ID </th>
                      <th> Received Amount </th>

                  </tr>
                  </thead>

                  <?php

                  $query = " SELECT * FROM payments WHERE CoderID = $userID AND Progress = 'Completed' Order by PaymentID DESC";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows ($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    $paymentID = $row['PaymentID'];
    $clientID = $row['ClientID'];
    $requestID = $row["RequestID"];
    $projectID = $row['ProjectID'];
    $paid = $row['Paid'];
?>
  
                  <tr>        
                              <td><a href="#"><?php echo $paymentID; ?></a></td>
                              <td><a href="#"><?php echo $requestID; ?></a></td>
                              <td><a href="#"><?php echo $userID; ?></a></td>
                              <td><a href="#"><?php echo $clientID; ?></a></td>
                              <td><a href="#"><?php echo $projectID; ?></a></td>
                              <td><b><?php if(empty($paid)){echo "In-Progress";} echo $paid; ?></b></td>
                           <?php
  }
  ?>   
                          </tr> 
              </table>
          </div>
      </div>
  </div>
</div>

</body>
</html>


<?php
  

}
else
{
  $msg='<div class="alert alert-secondary">You have not Completed any Project Yet</div>';
  echo $msg;
}



?>
