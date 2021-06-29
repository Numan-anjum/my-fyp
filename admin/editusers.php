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
    

    $userID = $_GET['userID']; //from viewusers.php
    $query = " SELECT * FROM users WHERE userID ='".$userID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $userID = $row['userID'];
        $username = $row['username'];
        $password = $row['password'];
        $usertype = $row['usertype'];
        $email= $row['email'];
    }
    $msg='<div class="alert alert-danger"><b>Please Be careful while Editing User Records<b></div>';
    echo $msg;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Edit User</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-1">
                        <div class="card-title">
                            <h4 class="bg-dark text-white text-center py-3"> Update User's Data
                            </h4>
                        </div>
                        <div class="card-body">

                            <form action="updateusers.php?userID=<?php echo $userID ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder="User ID" name="userID" value="<?php echo $userID ?>" readonly>
                                <input type="text" class="form-control mb-2" placeholder=" Username " name="username" value="<?php echo $username ?>">
                                <input type="text" class="form-control mb-2" placeholder="Password" name="password" value="<?php echo $password ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Type " name="usertype" value="<?php echo $usertype ?>">
                                <input type="text" class="form-control mb-2" placeholder="Email" name="email" value="<?php echo $email ?>">

                                <button class="btn btn-primary" name="update">Update</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
