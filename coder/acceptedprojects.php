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



  $query = " SELECT * FROM requests WHERE CoderID = $userID ORDER BY ProjectID DESC";
  $result = mysqli_query($conn,$query);


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css">
</head>

<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-2">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                <th>Request ID</th>
                                <th>Client ID</th>    
                                <th>Project ID</th>
                                <th>Replied</th>
                                </tr>
                            </thead>

                                    <?php 

                                    if (mysqli_num_rows($result) > 0)
                                    {
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                        $requestID = $row['RequestID'];
                                        $clientID = $row['ClientID'];
                                        $projectID = $row['ProjectID'];
                                        $response = $row['Response'];
                                      ?>
                                      <tr>

                                        <td><?php echo $requestID; ?></td>
                                        <td><?php echo $clientID; ?></td>
                                        <td><?php echo $projectID; ?></td>
                                        <td><?php echo $response; ?></td>

                                        <?php
  }

}
else
{

  $msg='<div class="alert alert-secondary">You have not Accepted or Rejected any Projects</div>';
  echo $msg;
}

?>