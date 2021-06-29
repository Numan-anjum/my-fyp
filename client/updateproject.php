<?php 

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }
    $userID = $_SESSION["userID"];

    if(isset($_POST['update'])) 
 //   if(isset($_GET['GetID']))
    {
        $projectID = $_GET['projectID'];  //from editproject.php
        $proj_name = mysqli_real_escape_string($conn, $_POST['proj_name']);
        $proj_type = mysqli_real_escape_string($conn, $_POST['proj_type']);
        $proj_languages = mysqli_real_escape_string($conn, $_POST['proj_languages']);
        $proj_duration = mysqli_real_escape_string($conn, $_POST['proj_duration']);
        $proj_budget = mysqli_real_escape_string($conn, $_POST['proj_budget']);
        $proj_description = mysqli_real_escape_string($conn, $_POST['proj_description']);

        $query = " UPDATE project SET Name = '".$proj_name."', Type='".$proj_type."',Languages='".$proj_languages."'  , Duration = '".$proj_duration."' , Budget = '".$proj_budget."' , Description = '".$proj_description."' WHERE projectID='".$projectID."'  ";


        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location: viewprojectslist.php");
        }
        else
        {
            echo "Please Check Your Query";
        }
    }
    else
    {
       header("location: viewprojectslist.php");
    }


?>