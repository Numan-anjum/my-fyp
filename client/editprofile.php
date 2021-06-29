<?php 

    require_once("clientheader.php");
    require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }

    $userID = $_GET['GetID']; //from viewprofile.php
    $query = " SELECT * FROM clientprofiles WHERE ClientID ='".$userID."' ";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $userID = $row['ClientID'];
        $clientname = $row["FullName"];
        $clientcontact = $row['Contact_no'];
        $clientcountry = $row['country'];
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Edit Profile</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-1">
                        <div class="card-title">
                            <h4 class="bg-dark text-white text-center py-3"> Update Your Profile!
                            </h4>
                        </div>
                        <div class="card-body">

                            <form action="updateprofile.php?GetID=<?php echo $userID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Full Name " name="clientname" value="<?php echo $clientname ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Contact No. " name="clientcontact" value="<?php echo $clientcontact ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Country " name="country" value="<?php echo $clientcountry ?>">
                                <button class="btn btn-primary" name="update">Update</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>