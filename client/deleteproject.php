<?php 

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }


        if(isset($_GET['projectID']))
        {
            $projectID = $_GET['projectID']; //from viewprojectslist.php


            $ProjectID = $_GET['projectID'];
            $query = " DELETE FROM project WHERE ProjectID = '".$ProjectID."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:viewprojectslist.php");
            }
            else
            {
                echo "Please Check Delete Query";
            }



            $query = " DELETE FROM requests WHERE ProjectID = '".$ProjectID."'";
            $result = mysqli_query($conn,$query);

            
        }
        else
        {
            header("location:viewprojectslist.php");
        }

?>