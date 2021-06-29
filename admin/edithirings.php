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
    

    $RequestID = $_GET['RequestID']; //from viewhirings.php
    $query = " SELECT * FROM requests WHERE RequestID='".$RequestID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $RequestID = $row['RequestID'];
        $Response = $row['Response'];

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
                            <h4 class="bg-dark text-white text-center py-3"> Update Response
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <input type="text" class="form-control mb-2" placeholder="RequestID" name="RequestID" value="<?php echo $RequestID ?>" readonly>
                                <input type="text" class="form-control mb-2" placeholder="Response" name="Response" value="<?php echo $Response ?>">


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
        $Response = mysqli_real_escape_string($conn, $_POST['Response']);


        $query = " UPDATE requests SET Response = '".$Response."' WHERE RequestID ='".$RequestID."'";


        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location: viewhirings.php");
        }
        else
        {
            echo "Please Check Your Query";
        }
    }



?>