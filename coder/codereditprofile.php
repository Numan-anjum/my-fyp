<?php 

require_once("coderheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "coder")
    {
        header("Location: ../login.php");
    }
    $userID = $_GET['GetID']; //from codervireprofile.php

    

    $query = " SELECT * FROM coderprofiles WHERE CoderID ='".$userID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {

        $userID = $row['CoderID'];
        $codername = $row['CoderName'];
        $email = $row['CoderEmail'];
        $username = $row['CoderUserName'];
        $codercountry = $row['CoderCountry'];
        $coderdescription = $row['CoderDescription'];
        $codercategory= $row['Category'];
        $coderskills= $row['Skills'];
        $coderqualification = $row['Qualification'];
        $image = $row['image'];


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
                            <h4 class="bg-dark text-white text-center py-3"> Update Your Profile!
                            </h4>
                        </div>
                        <div class="card-body">

                            <form action="coderupdateprofile.php?GetID=<?php echo $userID ?>" enctype="multipart/form-data" method="post">


                                <input type="text" class="form-control mb-3" placeholder=" Full Name " name="codername" value="<?php echo $codername ?>" required>

                                <input type="text" class="form-control mb-3" placeholder=" Qualification " name="coderqualification" value="<?php echo $coderqualification ?>"required>

                                <input type="text" class="form-control mb-3" placeholder=" Skills " name="coderskills" value="<?php echo $coderskills ?>" required>

                                <input type="text" class="form-control mb-3" placeholder=" Category " name="codercategory" value="<?php echo $codercategory ?>" required>

                                <input type="text" class="form-control mb-3" placeholder=" Country " name="codercountry" value="<?php echo $codercountry ?>"required>


                                <textarea class="form-control mb-3" name="coderdescription" rows="7" cols="8" placeholder="About Yourself"><?php echo $coderdescription; ?></textarea>


<br><br>
                                Upload image: <input type='file' name='user_image'><br><br> 
                                <img src="uploads/<?php echo $image;?>" style="width:150px;height:150">

                                <br><br>
                                <button class="btn btn-primary" name="update">Update Profile</button>




                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>