<?php 

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }
    $userID = $_SESSION["userID"];


    $ProjectID = $_GET['projectID']; //from viewprojectslist.php
    $query = " SELECT * FROM project WHERE ProjectID='".$ProjectID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $ProjectID = $row['ProjectID'];
        $proj_name = $row['Name'];
        $proj_type = $row['Type'];
        $proj_languages = $row['Languages'];
        $proj_duration = $row['Duration'];
        $proj_budget = $row['Budget'];
        $proj_description = $row['Description'];
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Edit Project</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-1">
                        <div class="card-title">
                            <h4 class="bg-dark text-white text-center py-3"> Update Your Project!
                            </h4>
                        </div>
                        <div class="card-body">

                            <form action="updateproject.php?projectID=<?php echo $ProjectID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Project Title " name="proj_name" value="<?php echo $proj_name ?>">

                                <input type="text" class="form-control mb-2" placeholder=" Project Type " name="proj_type" value="<?php echo $proj_type ?>">

                                <input type="text" class="form-control mb-2" placeholder=" Language " name="proj_languages" value="<?php echo $proj_languages ?>">

                                <input type="text" class="form-control mb-2" placeholder=" Duration " name="proj_duration" value="<?php echo $proj_duration ?>">

                                <input type="text" class="form-control mb-2" placeholder=" Budget " name="proj_budget" value="<?php echo $proj_budget ?>">


                                <textarea class="form-control mb-3" name="proj_description" rows="7" cols="30" maxlength = "1000" placeholder="Project Description" required><?php echo $proj_description; ?></textarea>

                                <button class="btn btn-primary" name="update">Update</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>