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


    $query = " SELECT * FROM payments ORDER BY PaymentID DESC";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Track Progress & Payments</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-2">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th> Payment ID </th>
                                <th> Request ID </th>
                                <th> Client ID </th>
                                <th> Coder ID </th>
                                <th> Project ID </th>
                                <th> Progress </th>
                                <th> Amount Paid </th>
                                <th> Edit  </th>
                                <th> Delete </th>
                            </tr>
                            </thead>

                            <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {

                                        $paymentID = $row['PaymentID'];
                                        $requestID = $row['RequestID'];  
                                        $clientID = $row['ClientID'];
                                        $coderID = $row['CoderID'];
                                        $projectID = $row['ProjectID'];
                                        $progress = $row['Progress'];
                                        $paid = $row['Paid'];                                        
                                        
                            ?>
                                    <tr>
                                    <td><?php echo $paymentID; ?></td>
                                        <td><?php echo $requestID; ?></td>

                                        <td><a href="viewclients.php?ClientID=<?php echo $clientID; ?>"><?php echo $clientID; ?></a></td>

                                        <td><a href="viewcoders.php?CoderID=<?php echo $coderID; ?>""><?php echo $coderID; ?></a></td>

                                        <td><a href="viewprojectslist.php?ProjectID=<?php echo $projectID; ?>""><?php echo $projectID; ?></a></td>

                                        <td><?php echo $progress; ?></td>

                                        <td><?php echo $paid; ?></td>


                                        <td><a href="editprogress.php?paymentID=<?php echo $paymentID; ?>"class="btn btn-primary" role="button">Edit</a></td>
                       
                                        <td><a onClick="return confirm('Are you sure you want to delete?')" href='deleteprogress.php?paymentID=<?php echo $paymentID; ?>' type='button' class='btn btn-danger'>Delete</a></td>

                                    </tr>        
                           <?php 
                                    
                                }
                            }
                            else{
                                $result1='<div class="alert alert-danger">No Hirings Yet</div>';
                                echo $result1;}

                            ?>                                                                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
