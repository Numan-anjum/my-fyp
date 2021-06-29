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

$projectID = $_GET['ProjectID']; //from clientrequests.php


$query = " SELECT * FROM project WHERE ProjectID = $projectID";
$result = mysqli_query($conn,$query);


if (mysqli_num_rows($result) > 0) {
  while($row=mysqli_fetch_assoc($result))
  {

  $projectID = $row['ProjectID'];
  $proj_name = $row['Name'];
  $proj_type = $row['Type'];
  $proj_languages = $row['Languages'];
  $proj_duration = $row['Duration'];
  $proj_budget = $row['Budget'];
  $proj_description = $row['Description'];


}

}
?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css">
</head>

<body>
<div class="row mt-2" style="padding-left:25px;">
<dl class="row">
  <dt class="col-sm-3">Project ID</dt>
  <dd class="col-sm-9"><p><?php echo $projectID; ?></p></dd>


  <dt class="col-sm-3">Title</dt>
  <dd class="col-sm-9"><p><?php echo $proj_name; ?></p></dd>

  <dt class="col-sm-3 text-truncate">Project Type</dt>
  <dd class="col-sm-9"><p><?php echo $proj_type;?><p></dd>

  <dt class="col-sm-3 text-truncate">Languages</dt>
  <dd class="col-sm-9"><p><?php echo $proj_languages;?><p></dd>

  <dt class="col-sm-3">Duration</dt>
  <dd class="col-sm-9"><p><?php echo $proj_duration; ?></p></dd>

  <dt class="col-sm-3">Budget</dt>
  <dd class="col-sm-9"><p><?php echo $proj_budget;?><p></dd>

  <dt class="col-sm-3">Project Description</dt>
 <div style="padding-left:55px;"> <dd class="col-sm-9"><?php echo $proj_description;?></dd></div>

</dl>

</dl>
</div>
</body>
</html>

