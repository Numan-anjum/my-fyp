<?php 

    require_once("adminheader.php");
    require_once("../connection.php");
    session_start();

    $userID = $_SESSION["userID"];
    $usertype = $_SESSION["usertype"];

    if($usertype != "admin")
    {
      header("Location: ../login.php");
    }

    $paymentID = $_GET['paymentID']; //from viewprogrss.php

    $query = " SELECT * FROM payments WHERE PaymentID ='".$paymentID."' ORDER BY PaymentID ASC";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
      $paymentID = $row['PaymentID'];
      $requestID = $row['RequestID'];  
      $clientID = $row['ClientID'];
      $coderID = $row['CoderID'];
      $projectID = $row['ProjectID'];
      $progress = $row['Progress'];
      $paid = $row['Paid'];
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Edit Progress & Payments</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-1">
                        <div class="card-title">
                            <h4 class="bg-dark text-white text-center py-3"> Update Progress
                            </h4>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">

                            <input type="text" class="form-control mb-2" placeholder="Payment ID" name="paymentID" value="<?php echo $paymentID ?>" readonly>

                            <input type="text" class="form-control mb-2" placeholder="Request ID" name="requestID" value="<?php echo $requestID ?>" readonly>

                            <input type="text" class="form-control mb-2" placeholder="Client ID" name="clientID" value="<?php echo $clientID ?>">

                            <input type="text" class="form-control mb-2" placeholder="Coder ID" name="coderID" value="<?php echo $coderID ?>">

                            <input type="text" class="form-control mb-2" placeholder="Project ID" name="projectID" value="<?php echo $projectID ?>">


                            <input type="text" class="form-control mb-2" placeholder="Progress" name="progress" value="<?php echo $progress ?>">

                            <input type="text" class="form-control mb-2" placeholder="Payment" name="paid" value="<?php echo $paid ?>">

                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
<?php 

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
        $paymentID = mysqli_real_escape_string($conn, $_POST['paymentID']);
        $requestID = mysqli_real_escape_string($conn, $_POST['requestID']);
        $clientID = mysqli_real_escape_string($conn, $_POST['clientID']);
        $coderID = mysqli_real_escape_string($conn, $_POST['coderID']);
        $projectID = mysqli_real_escape_string($conn, $_POST['projectID']);
        $progress = mysqli_real_escape_string($conn, $_POST['progress']);
        $paid = mysqli_real_escape_string($conn, $_POST['paid']);


        $query = " UPDATE payments SET RequestID = '".$requestID."' , ClientID = '".$clientID."' , CoderID = '".$coderID."' , ProjectID = '".$projectID."' , Progress = '".$progress."' , Paid = '".$paid."' WHERE PaymentID ='".$paymentID."'";


        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location: viewprogress.php");
        }
        else
        {
            echo "Please Check Your Query";
        }
    }


?>
