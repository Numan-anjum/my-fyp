<?php

require_once("clientheader.php");
require_once("../connection.php");

session_start();
$usertype = $_SESSION["usertype"];

if ($usertype != "client")
{
    header("Location: ../login.php");
}
?>

<div class="alert alert-primary mt-1">Before making Payment, Please Make Sure that the Project has Completed</div>
<?php


$userID = $_SESSION["userID"];

$paymentID = $_GET['paymentID']; //from checkprogress.php

$projectID = $_GET['projectID']; //from checkprogress.php



$query3 = " SELECT * FROM project WHERE ProjectID = '" . $projectID . "' ";
$result3 = mysqli_query($conn, $query3);

while ($row = mysqli_fetch_assoc($result3))
{
    $payment = $row["Budget"];
}

$query4 = " SELECT * FROM payments WHERE PaymentID = '" . $paymentID . "' ";
$result4 = mysqli_query($conn, $query4);

while ($row = mysqli_fetch_assoc($result4))
{
    $clientID = $row['ClientID'];
    $coderID = $row['CoderID'];
    $projectID = $row['ProjectID'];
    $requestID = $row["RequestID"];
    $progress = $row['Progress'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Make Payment</title>
</head>
<form action="" method="post">
<div align="center">

<?php
echo "Payment ID = " . $paymentID . "<br>";
echo "User ID = " . $userID . "<br>";
echo "Coder ID = " . $coderID . "<br>";
echo "Request ID = " . $requestID . "<br>";
echo "Project ID =" . $projectID . "<br>";
echo "Progress = "."<b>" . $progress . "</b>"."<br>";
echo "Amount to Pay is "."<b>" . $payment ."</b>". "<br>";

?>
<br>
<input type="submit" name="submit" class="btn btn-primary" value="Make Payment">
</div>
</form>
</body>
</html>
<?php

if (isset($_POST['submit']))
{
    
    if ($progress == "Completed")
    {

        $query2 = " SELECT * FROM payments WHERE RequestID = $requestID ";
        $result2 = mysqli_query($conn, $query2);

        while ($row = mysqli_fetch_assoc($result2))
        {
            $paid = $row["Paid"];
        }

        if (empty($paid))
        {

            $query = " UPDATE payments SET Paid = '" . $payment . "' WHERE RequestID= '" . $requestID . "'  ";

            $result = mysqli_query($conn, $query);

            if ($result)
            {
  //              echo '<div class = "alert-alert danger"<br>" . "You have successfully Paid" . $payment;
                $msg="<div class='alert alert-secondary'>You have successfully paid</div>"; 
                echo $msg;
                
            }
            else
            {
                echo "Please Check Your Query";
            }

        }
        else
        {
            $msg2 ="<div class='alert alert-secondary'>You have Paid Already</div>"; 
            echo $msg2;
        }

    }
    else
    {
        echo "Project is IN-Progress. You cannot Make Payment Right Now";
    }

}



?>
