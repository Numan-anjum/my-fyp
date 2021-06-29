<?php


require_once("coderheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "coder")
    {
        header("Location: ../login.php");
    }


    if(isset($_POST['submit'])) //from coderprofile.php
    {

            $codername = mysqli_real_escape_string($conn, $_POST['codername']);
            $coderskills = mysqli_real_escape_string($conn, $_POST['coderskills']);
            $codercategory = mysqli_real_escape_string($conn, $_POST['codercategory']);
            $coderqualification = mysqli_real_escape_string($conn, $_POST['coderqualification']);
            $codercountry = mysqli_real_escape_string($conn, $_POST['codercountry']);
            $coderdescription = mysqli_real_escape_string($conn, $_POST['coderdescription']);

            $image=$_FILES['user_image']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["user_image"]["name"]);
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $imgSize = $_FILES['user_image']['size'];

                if ($imgSize < 2000000) 
                {
                    if ($FileType=="jpg" OR $FileType=="jpeg" OR $FileType=="png")
                    {

                        if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) 
                        {
                            $userID = $_SESSION["userID"];
                            $username = $_SESSION["username"];
                            $email = $_SESSION["email"];

                            $query = " INSERT INTO coderprofiles (CoderID, CoderName, CoderUserName, CoderCountry, Category, Skills, CoderEmail, CoderDescription, Qualification, image) values('$userID', '$codername','$username', '$codercountry','$codercategory','$coderskills','$email','$coderdescription','$coderqualification', '$image')";

                            $result = mysqli_query($conn,$query);

                            if($result)
                            {            
                            header("location: coderviewprofile.php");
                            }
                            else
                            {
                                echo "Profile is Already Completed. In order to Update please Click on the Edit Profile Button";
                            }

                        }
                    }
                    else
                    {
                        echo "Only jpeg, jpg, and png are allowed";
                    }
                }
                else
                {
                    echo "Image size should not be greater than 2MB";
                }

    
    }
    else
    {
        header("location: coderprofile.php");
    }

    


?>