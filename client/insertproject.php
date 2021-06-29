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

            $proj_name = mysqli_real_escape_string($conn, $_POST['proj_name']);
            $proj_type = mysqli_real_escape_string($conn, $_POST['proj_type']);
            $proj_languages = mysqli_real_escape_string($conn, $_POST['proj_languages']);
            $proj_duration = mysqli_real_escape_string($conn, $_POST['proj_duration']);
            $proj_budget = mysqli_real_escape_string($conn, $_POST['proj_budget']);
            $proj_description = mysqli_real_escape_string($conn, $_POST['proj_description']);


            $userID = $_SESSION["userID"];

            $query = " INSERT INTO project (ClientID, Name, Type, Languages, Duration, Budget, Description) values('$userID', '$proj_name','$proj_type','$proj_languages', '$proj_duration', '$proj_budget', '$proj_description')";
            $result = mysqli_query($conn,$query);



            if($result)
            {            
                header("location: viewprojectslist.php?successmsgproject");
            }
            else
            {
                echo "Project Query Error: Please First Complete Your Profile";
            }
            
    }

    else
    {
        header("location: addproject.php");
    }



?>