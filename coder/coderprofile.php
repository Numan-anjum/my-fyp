<?php
 require_once("coderheader.php");
 require_once("../connection.php");

     session_start();
     $usertype = $_SESSION["usertype"];
       
     if($usertype != "coder")
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
    <title>Coder Profile</title>
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

                            <form action="coderinsertprofile.php" method="post" enctype="multipart/form-data">
                                <input type="text" class="form-control mb-3" placeholder=" Full Name " name="codername" required>
                                <input type="text" class="form-control mb-3" placeholder=" Country " name="codercountry" required>
                                <input type="text" class="form-control mb-3" placeholder=" Qualification " name="coderqualification" required>
                                <input type="text" class="form-control mb-3" placeholder=" Skills " name="coderskills" required>
                                <input type="text" class="form-control mb-3" placeholder=" Category " name="codercategory" required>

                                <textarea  rows="7" cols="8" name="coderdescription" class="form-control mb-3"  placeholder = " About Yourself " required >Description:</textarea>



                                <label for="myFile"><b>Upload your Profile Image: </b>Only jpg, jpeg and png formats are allowed. Size should not be greater than 2MB</label><br>
                                <input type='file' name='user_image'>

                                <button class="btn btn-primary mx-auto d-block" name="submit">Save Profile</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>



</html>





