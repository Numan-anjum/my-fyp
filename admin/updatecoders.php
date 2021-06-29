<?php 

require_once("adminheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "admin")
    {
        header("Location: ../login.php");
    }


    if(isset($_POST['update']))  
    {

        $userID = $_GET['CoderID']; //from editcoders.php
        $codername = mysqli_real_escape_string($conn, $_POST['codername']);
        $coderskills = mysqli_real_escape_string($conn, $_POST['coderskills']);
        $codercategory = mysqli_real_escape_string($conn, $_POST['codercategory']);
        $coderqualification = mysqli_real_escape_string($conn, $_POST['coderqualification']);
        $codercountry = mysqli_real_escape_string($conn, $_POST['codercountry']);
        $coderdescription = mysqli_real_escape_string($conn, $_POST['coderdescription']);
        if ((!($_FILES['user_image']['name'])))
        {
            $query = " UPDATE coderprofiles SET CoderName = '".$codername."', Skills ='".$coderskills."',Category='".$codercategory."' , CoderCountry = '".$codercountry."' , Qualification = '".$coderqualification."' , CoderDescription = '".$coderdescription."'  WHERE CoderID='".$userID."'";


            $result = mysqli_query($conn,$query);
    
                if($result)
                {
                    header("location:codercompleteprofile.php?CoderID=$userID");
                }
                else
                {
                    echo "Please Check Your Query";
                }
        }
        else
        {

        $image=$_FILES['user_image']['name'];
        $target_dir = "../coder/uploads/";
        $target_file = $target_dir . basename($_FILES["user_image"]["name"]);
        $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $imgSize = $_FILES['user_image']['size'];

if ($imgSize < 2000000) {
  if ($FileType=="jpg" OR $FileType=="jpeg" OR $FileType=="png")
  {
    
        if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) 
        {

        $query = " UPDATE coderprofiles SET CoderName = '".$codername."', Skills ='".$coderskills."',Category='".$codercategory."' , CoderCountry = '".$codercountry."' , Qualification = '".$coderqualification."' , CoderDescription = '".$coderdescription."'  , image = '".$image."'  WHERE CoderID='".$userID."'";


        $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:codercompleteprofile.php?CoderID=$userID");
            }
            else
            {
                echo "Please Check Your Query";
            }
        }


        

    }
    else{echo "Only JPEG, Jpg and png formats Allowed";}
}
else
{
    echo "Image Size is too large. Should not be grater than 2MB";

          
}


    }
}
?>