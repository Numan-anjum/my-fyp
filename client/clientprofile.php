<?php 

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
    
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Client Profile</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-3">
                        <div class="card-title">
                            <h4 class="bg-info text-white text-center py-3"> Manage Your Profile!</h4>
                        </div>
                        <div class="card-body">

                            <form action="insertprofile.php" method="POST">
                                <input type="text" class="form-control mb-3" placeholder=" Full Name " name="clientname" required>
                                <input type="text" class="form-control mb-3" placeholder=" Contact No. " name="clientcontact" required>
                                <input type="text" class="form-control mb-3" placeholder=" Country " name="country" required>

                                <button class="btn btn-primary mx-auto d-block" name="submit">Save Profile</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>



</html>





