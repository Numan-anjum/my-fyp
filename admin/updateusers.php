<?php 

require_once("../connection.php");
session_start();

$usertype = $_SESSION["usertype"];

if($usertype != "admin")
{
  header("Location: ../login.php");
}


 
        $userID = $_GET['userID']; //from editusers.php
        $userID = mysqli_real_escape_string($conn, $_POST['userID']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = $conn->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $query = " UPDATE users SET userID = '".$userID."', username = '".$username."' , password ='".$password."', usertype ='".$usertype ."', email = '".$email."' WHERE userID ='".$userID."'";


        $result = mysqli_query($conn,$query);

        if($result)
        {
           header("location:viewusers.php");
        }
        else
        {
            echo "Please Check Your Query";
        }
    

?>


