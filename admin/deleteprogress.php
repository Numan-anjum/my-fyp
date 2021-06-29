<?php 

        require_once("../connection.php ");
        session_start();
        $userID = $_SESSION["userID"];
        $usertype = $_SESSION["usertype"];

        if($usertype != "admin")
        {
          header("Location: ../login.php");
        }


        if(isset($_GET['paymentID']))
        {

            $paymentID = $_GET['paymentID'];  //from viewprogress.php


            $query = " DELETE FROM payments WHERE PaymentID = '".$paymentID."' ";
            $result = mysqli_query($conn,$query);

            if($result)
            {
              header("location: viewprogress.php");
            }
            else
            {
              echo "Please Check Delete Query";
            }
            
        }
        else
        {
          header("location: viewprogress.php");
        }
      
?>

