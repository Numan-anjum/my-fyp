<?php

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }

    if(isset($_POST['submit']))
    {

            $clientname = mysqli_real_escape_string($conn, $_POST['clientname']);
            $clientcontact = mysqli_real_escape_string($conn, $_POST['clientcontact']);
            $clientcountry = mysqli_real_escape_string($conn, $_POST['country']);


            $userID = $_SESSION["userID"];
            $username = $_SESSION["username"];
    
            $query = " INSERT INTO clientprofiles (ClientID, FullName, username, Contact_no, country) VALUES('$userID', '$clientname','$username', '$clientcontact','$clientcountry')";
            $result = mysqli_query($conn,$query);

            if($result)
            {            
                header("location: viewprofile.php?successmsgprofile");
            }
            else
            {
              header("location: viewprofile.php");
            }

    
    }
    else
    {
        header("location: clientprofile.php");
    }


    

?>