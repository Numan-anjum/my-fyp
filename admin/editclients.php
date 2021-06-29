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

    $clientID = $_GET['clientID']; //from viewclients.php
    $query = " SELECT * FROM clientprofiles WHERE ClientID='".$clientID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $clientID = $row['ClientID'];
        $fullname = $row['FullName'];
        $username = $row['username'];
        $Contact_no = $row['Contact_no'];
        $address= $row['country'];
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Edit</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-1">
                        <div class="card-title">
                            <h4 class="bg-dark text-white text-center py-3"> Update Client's Profile</h4>
                        </div>
                        <div class="card-body">
                            <form action="updateclients.php?ClientID=<?php echo $clientID ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder="ClientID" name="ClientID" value="<?php echo $clientID ?>" readonly>
                                <input type="text" class="form-control mb-2" placeholder=" Full Name " name="FullName" value="<?php echo $fullname ?>">
                                <input type="text" class="form-control mb-2" placeholder="User Name" name="username" value="<?php echo $username ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Contact No. " name="Contact_no" value="<?php echo $Contact_no ?>">
                                <input type="text" class="form-control mb-2" placeholder="Country" name="country" value="<?php echo $address ?>">

                                <button class="btn btn-primary" name="update">Update</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>