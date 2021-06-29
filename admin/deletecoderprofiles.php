<?php 

      require_once("../connection.php ");
      session_start();
      $usertype = $_SESSION["usertype"];

      if($usertype != "admin")
      {
        header("Location: ../login.php");
      }

      if(isset($_GET['coderID']))
        {
            $userID = $_GET['coderID']; //from viewcoders.php & codercompleteprofle.php
            $query = " DELETE FROM coderprofiles WHERE CoderID = '".$userID."' ";
            $result = mysqli_query($conn,$query);

            if($result)
            {
              header("location: viewcoders.php");
            }
            else
            {
              echo "Please Check Delete User Query";
            }
        }

?>