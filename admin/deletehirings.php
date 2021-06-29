<?php 

        require_once("../connection.php ");
        session_start();
        $userID = $_SESSION["userID"];
        $usertype = $_SESSION["usertype"];

        if($usertype != "admin")
        {
          header("Location: ../login.php");
        }

        if(isset($_GET['RequestID']))
        {
            $RequestID = $_GET['RequestID']; //from viewhirings.php
            $query = " DELETE FROM requests WHERE RequestID = '".$RequestID."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
              header("location: viewhirings.php");
            }
            else
            {
              echo "Please Check Delete Query";
            }
            
        }
        else
        {
          header("location: viewhirings.php");
        }
      
?>
