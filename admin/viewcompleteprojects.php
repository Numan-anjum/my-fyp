<?php 

require_once("adminheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "admin")
    {
        header("Location: ../login.php");
    }

    $projectID = $_GET['projectID']; //from viewprojectslist.php
    $query = " SELECT * FROM project WHERE ProjectID = $projectID";
    $result = mysqli_query($conn,$query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>View Project</title>

</head>
<body>

                            <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $projectID = $row['ProjectID'];
                                        $proj_name = $row['Name'];
                                        $proj_type = $row['Type'];
                                        $proj_languages= $row['Languages'];
                                        $proj_duration = $row['Duration'];
                                        $proj_budget = $row['Budget'];
                                        $proj_description = $row['Description'];

                                    }
                                  }
                                  else{
                                    $result1='<div class="alert alert-danger">No Project Has been Added</div>';
                                    echo $result1;}
?>




<dl class="row mt-3" style = "padding-left:5px;">
  <dt class="col-sm-3">Project ID</dt>
  <dd class="col-sm-9"><p><?php echo $projectID; ?></p></dd>


  <dt class="col-sm-3">Title</dt>
  <dd class="col-sm-9"><p><?php echo $proj_name; ?></p></dd>

  <dt class="col-sm-3">Project Type</dt>
  <dd class="col-sm-9"><p><?php echo $proj_type;?><p></dd>

  <dt class="col-sm-3">Languages</dt>
  <dd class="col-sm-9"><p><?php echo $proj_languages;?><p></dd>

  <dt class="col-sm-3">Duration</dt>
  <dd class="col-sm-9"><p><?php echo $proj_duration; ?></p></dd>

  <dt class="col-sm-3">Budget</dt>
  <dd class="col-sm-9"><p><?php echo $proj_budget;?><p></dd>

  <dt class="col-sm-3">Project Description</dt>
  <dd class="col-sm-9"><?php echo $proj_description;?></dd>

</dl>
<br>
<a href="editprojects.php?projectID=<?php echo $projectID; ?>"class="btn btn-primary btn-block" role="button">Edit</a><br>

<td><a onClick="return confirm('Are you sure you want to delete?')" href='deleteprojects.php?projectID=<?php echo $projectID; ?>' type='button' class='btn btn-danger btn-block'>Delete</a></td>


</div>
</body>
</html>


