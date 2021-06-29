<?php 

session_start();
$usertype = $_SESSION["usertype"];

if($usertype != "admin")
{
  header("Location: ../login.php");
}

        require_once("../connection.php ");


            $userID = $_GET['userID']; //from viewusers.php
            $usertype = $_GET['usertype']; //from viewusers.php

            if($usertype == "client")
            {

              $query1 = " DELETE FROM payments WHERE ClientID = '".$userID."'";
              $result1 = mysqli_query($conn,$query1);    

              $query2 = " DELETE FROM requests WHERE ClientID = '".$userID."'";
              $result2 = mysqli_query($conn,$query2);

              $query3 = " DELETE FROM project WHERE ClientID = '".$userID."'  ";
              $result3 = mysqli_query($conn,$query3);

              $query4 = " DELETE FROM clientprofiles WHERE ClientID = '".$userID."'  ";
              $result4 = mysqli_query($conn,$query4);

              $query5 = " DELETE FROM users WHERE userID = '".$userID."'";
              $result5 = mysqli_query($conn,$query5);


                  if($result1 && $result2 && $result3 && $result4 && $result5)
                  {
                    echo "The Client Account and all its data has been Deleted Successfully";
                  }
                  else
                  {
                    echo "Please Check Delete Client User Query";
                  }
            
            }




            if($usertype == "coder")
            {

              $query1 = " DELETE FROM payments WHERE CoderID = '".$userID."'";
              $result1 = mysqli_query($conn,$query1);    

              $query2 = " DELETE FROM requests WHERE CoderID = '".$userID."'";
              $result2 = mysqli_query($conn,$query2);

              $query3 = " DELETE FROM coderprofiles WHERE CoderID = '".$userID."'  ";
              $result3 = mysqli_query($conn,$query3);

              $query4 = " DELETE FROM users WHERE userID = '".$userID."'  ";
              $result4 = mysqli_query($conn,$query4);


                  if($result1 && $result2 && $result3 && $result4)
                  {
                    echo "The Coder Account and all its data has been deleted successfully";
                  }
                  else
                  {
                    echo "Please Check Delete Client User Query";
                  }
            
            }

          
?>

