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
    <title>Add Project</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-3">
                        <div class="card-title">
                            <h4 class="bg-info text-white text-center py-3"> Enter Project Description Here!</h4>
                        </div>
                        <div class="card-body">

                            <form action="insertproject.php" method="post">

                                <input type="text" class="form-control mb-3" placeholder=" Project Title " name="proj_name" required>

                                <input type="text" class="form-control mb-3" placeholder=" Project Type " name="proj_type" required>

                                <input type="text" class="form-control mb-3" placeholder=" Languages " name="proj_languages" required>

                                <input type="text" class="form-control mb-3" placeholder=" Duration " name="proj_duration" required>

                                <input type="text" class="form-control mb-3" placeholder=" Budget US$ " name="proj_budget" required>

                                <textarea name = "proj_description" rows = "7" cols = "30" maxlength = "1000" class="form-control mb-3" placeholder = "Project Description" required></textarea>


                                <button class="btn btn-primary mx-auto d-block" name="submit">Add project</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>



</html>





