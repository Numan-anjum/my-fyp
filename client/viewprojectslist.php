<?php 


require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }
    $msg='<div class="alert alert-primary">Please Click on the Project ID links to view the Complete Project Description</div>';
echo $msg;

    $userID = $_SESSION["userID"];

    $query = " SELECT * FROM project WHERE ClientID = '".$userID."' ORDER BY ProjectID DESC";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>View Projects</title>
</head>
<body class="bg-white">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-2">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th> Project ID </th>
                                <th> Name </th>
                                <th> Type </th>
                                <th> Languages </th>
                                <th> Budget </th>
                                <th> Edit  </th>
                                <th> Delete </th>
                            </tr>
                            </thead>

                            <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {


                                        $projectID = $row['ProjectID'];
                                        $proj_name = $row['Name'];
                                        $proj_type = $row['Type'];
                                        $proj_languages= $row['Languages'];
                                        $proj_budget = $row['Budget'];
                                        
                                        
                            ?>
                                    <tr>
                                        <td><a href="viewproject.php?projectID=<?php echo $projectID; ?>"><?php echo $projectID; ?></a></td>
                                        <td><?php echo $proj_name; ?></td>
                                        <td><?php echo $proj_type; ?></td>
                                        <td><?php echo $proj_languages; ?></td>
                                        <td><?php echo $proj_budget; ?></td>

                                        <td><a href="editproject.php?projectID=<?php echo $projectID; ?>"class = 'btn btn-primary'>Edit</a></td>

                                        <td><a onClick="return confirm('Are you sure you want to delete?')" href='deleteproject.php?projectID=<?php echo $projectID; ?>' type='button' class='btn btn-danger'>Delete</a></td>

                                        
                                    </tr>        
                           <?php 
                                    
                                }
                            }
                            else{
                                $result1='<div class="alert alert-danger">No Project Has been Added</div>';
                                echo $result1;}

                            ?>                                                                    
                                                 
  


                        </table>
                    </div>
                </div>
            </div>
        </div>




</body>
</html>
