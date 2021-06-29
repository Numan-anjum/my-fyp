<?php 

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }


    if(isset($_POST['update']))
 //   if(isset($_GET['GetID']))
    {
        $userID = $_GET['GetID'];  //from editprofile.php
        $clientname = mysqli_real_escape_string($conn, $_POST['clientname']);
        $clientcontact = mysqli_real_escape_string($conn, $_POST['clientcontact']);
        $clientcountry = mysqli_real_escape_string($conn, $_POST['country']);

        $query = " UPDATE clientprofiles SET FullName = '".$clientname."', Contact_no='".$clientcontact."',country ='".$clientcountry."' WHERE ClientID='".$userID."'";


        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:viewprofile.php");
        }
        else
        {
            echo "Please Check Your Query";
        }
    }
    else
    {
       header("location:viewprofile.php");
    }


?>