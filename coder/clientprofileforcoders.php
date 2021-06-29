<?php 

    require_once("coderheader.php");

    session_start();
    $userID = $_SESSION["userID"];
    $usertype = $_SESSION["usertype"];

    if($usertype != "coder")
    {
      header("Location: ../login.php");
    }

    require_once("../connection.php");

    $ClientID = $_GET['ClientID']; // from clientrequests.php

    $query = " SELECT * FROM clientprofiles WHERE ClientID = '".$ClientID."' ";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>View Client's Profile</title>
</head>
<body class="bg-white">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-2">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th> Client ID </th>
                                <th> Username </th>
                                <th> Full Name </th>
                                <th> Contact No. </th>
                                <th> Country </th>

                            </tr>
                            </thead>

                            <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {


                                        $ClientID = $row['ClientID'];
                                        $fullname = $row['FullName'];
                                        $username = $row['username'];
                                        $Contact_no = $row['Contact_no'];
                                        $address= $row['country'];
                                        
                                        
                            ?>
                                    <tr>
                                        <td><a href="#"><?php echo $ClientID; ?></a></td>
                                        <td><?php echo $fullname; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $Contact_no; ?></td>
                                        <td><?php echo $address; ?></td>
                                    </tr>        
                           <?php 
                                    
                                }
                            }
                            else{
                                $result1='<div class="alert alert-danger">The Client Has deleted the Profile</div>';
                                echo $result1;}

                            ?>                                                                    
                 

                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>