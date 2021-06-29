<?php

require_once("coderheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "coder")
    {
        header("Location: ../login.php");
    }
    $userID = $_SESSION["userID"];


$projectID = $_GET['projectid']; //from clientrequests.php
$value = "Accepted";


$query1 = " SELECT * FROM requests WHERE ProjectID='".$projectID."' AND CoderID = '".$userID."'";

$result1 = mysqli_query($conn,$query1);


  while($row=mysqli_fetch_assoc($result1))
    {
    $response= $row["Response"];
    }

if($response =="Pending")
{

$query = " UPDATE requests SET Response = '".$value."' WHERE ProjectID='".$projectID."' AND CoderID = '".$userID."'";


$result = mysqli_query($conn,$query);

if($result)
{
 header("Location: clientrequests.php?acceptmsg&projectid=$projectID");
}
else
{
    echo "Error in Hiring";
}

}
else
{echo "You have already Accepted";}



?>

