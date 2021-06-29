<?php 

session_start();
$userID = $_SESSION["userID"];
$usertype = $_SESSION["usertype"];

if($usertype != "admin")
{
  header("Location: ../login.php");
}

    require_once("../connection.php");

 
        $ClientID = $_GET['ClientID']; //from editclients.php
        $fullname = mysqli_real_escape_string($conn, $_POST['ClientID']);
        $fullname = mysqli_real_escape_string($conn, $_POST['FullName']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $Contact_no = mysqli_real_escape_string($conn, $_POST['Contact_no']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);

        $query = " UPDATE clientprofiles SET ClientID = '".$ClientID."', FullName = '".$fullname."' , username ='".$username."', Contact_no ='".$Contact_no ."', country = '".$country."' WHERE ClientID='".$ClientID."'";


        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:viewclients.php");
        }
        else
        {
            echo "Please Check Your Query";
        }
    

?>