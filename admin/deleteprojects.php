<?php 

require_once("adminheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "admin")
    {
        header("Location: ../login.php");
    }

        if(isset($_GET['projectID']))
        {
            $projectID = $_GET['projectID']; //from viewprojectslist.php & viewcompleteprojects.php
            $query = " DELETE FROM project WHERE ProjectID = '".$projectID."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:viewprojectslist.php");
            }
            else
            {
                echo "Please Check Delete Query";
            }
            
        }
        else
        {
            header("location:viewprojectslist.php");
        }

?>
