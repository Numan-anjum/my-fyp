<?php 


    require_once("coderheader.php");
    require_once("../connection.php");
    
        session_start();
        $usertype = $_SESSION["usertype"];
          
        if($usertype != "coder")
        {
            header("Location: ../login.php");
        }
        $userID = $_SESSION["userID"];


    $query = " SELECT * FROM coderprofiles WHERE CoderID = $userID";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>View Profile</title>
</head>
<body>
           	<div class="container">
					<div class="row">
                    <div class="col-lg-5">
                    <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        echo '<div class="col-lg-5 mt-2">
                                        <img src="uploads/'.$row['image'].'" alt="Unable to Load" height=350" width="250">
                                    </div> ';

                                        $userID = $row['CoderID'];
                                        $codername = $row['CoderName'];
                                        $email = $row['CoderEmail'];
                                        $username = $row['CoderUserName'];
                                        $codercountry = $row['CoderCountry'];
                                        $coderdescription = $row['CoderDescription'];
                                        $codercategory= $row['Category'];
                                        $coderskills= $row['Skills'];
                                        $coderqualification = $row['Qualification'];

                                    
                                    }
                                ?> 

                                </div>
                    
                                <div class="col-lg-7">
                                  <div class="personal_text"><br>
                                                <b> User ID:</b><br>
                                                <?php  echo $userID."<br>"; ?>
                    
                                                <b> Username:</b><br>
                                                <?php  echo $username."<br>"; ?>
                    
                                                <b> Email:</b><br>
                                                <?php  echo $email."<br>"; ?>
                    
                                                <b> Full Name:</b><br>
                                                 <?php echo $codername."<br>"; ?>
                    
                                                 <b> Category:</b><br>
                                                 <?php echo $codercategory."<br>"; ?>
                    
                                                 <b> Skills:</b><br>
                                                 <?php echo $coderskills."<br>"; ?>
                    
                                                 <b> Qualification:</b><br>
                                                <?php  echo $coderqualification."<br>"; ?>
                    
                                                <b> Country:</b><br>
                                                <?php  echo $codercountry."<br>"; ?>
                    
                                                <b> Description:</b><br>
                                                <?php  echo $coderdescription."<br>"; ?>
                    
                                  </div>
                                </div>
                              </div>
           	</div>

                            
                            <br><br><br>
                            
                            <div class="text-center font-weight-bold ">
                            <a href="codereditprofile.php?GetID=<?php echo $userID; ?>" role="button" class = "btn btn-primary">Edit Profile</a></div>
                            <br>
  <?php                    
                            }
                            else{
                                $result1='<div class="alert alert-danger">Please Complete Your Profile First</div>';
                                echo $result1;}

    ?>    
</body>
</html>