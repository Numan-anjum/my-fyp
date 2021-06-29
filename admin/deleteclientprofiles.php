<?php 

session_start();
$usertype = $_SESSION["usertype"];

if($usertype != "admin")
{
  header("Location: ../login.php");
}

        require_once("../connection.php ");


        if(isset($_GET['clientID']))
        {
            $userID = $_GET['clientID']; //from viewclients.php
            $query = " DELETE FROM clientprofiles WHERE ClientID = '".$userID."' ";
            $result = mysqli_query($conn,$query);

            if($result)
            {
              header("location: viewclients.php");
            }
            else
            {
              echo "Please Check Delete User Query";
            }
          }

?>