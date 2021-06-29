<?php 

    require_once("adminheader.php");
    require_once("../connection.php");

    session_start();
    $userID = $_SESSION["userID"];
    $usertype = $_SESSION["usertype"];

    if($usertype != "admin")
    {
      header("Location: ../login.php");
    }

    $query = " SELECT * FROM requests ORDER BY RequestID DESC";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Track Hirings</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-2">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th> Request ID </th>
                                <th> Client ID </th>
                                <th> Coder ID </th>
                                <th> Project ID </th>
                                <th> Response </th>
                                <th> Edit  </th>
                                <th> Delete </th>
                            </tr>
                            </thead>

                            <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $RequestID = $row['RequestID'];
                                        $ClientID = $row['ClientID'];
                                        $CoderID = $row['CoderID'];
                                        $ProjectID = $row['ProjectID'];
                                        $Response= $row['Response'];   
                            ?>
                                    <tr>
                                        <td><?php echo $RequestID; ?></td>

                                        <td><a href="viewclients.php?ClientID=<?php echo $ClientID; ?>"><?php echo $ClientID; ?></a></td>

                                        <td><a href="viewcoders.php?CoderID=<?php echo $CoderID; ?>"><?php echo $CoderID; ?></a></td>

                                        <td><a href="viewprojectslist.php?ProjectID=<?php echo $ProjectID; ?>"><?php echo $ProjectID; ?></a></td>

                                        <td><?php echo $Response; ?></td>

                                        <td><a href="edithirings.php?RequestID=<?php echo $RequestID; ?>"class="btn btn-primary" role="button">Edit</a></td>
                       
                                        <td><a onClick="return confirm('Are you sure you want to delete?')" href='deletehirings.php?RequestID=<?php echo $RequestID; ?>' type='button' class='btn btn-danger'>Delete</a></td>


                                    </tr>        
                           <?php 
                                    
                                }
                            }
                            else{
                                $result1='<div class="alert alert-danger">No Hirings Yet</div>';
                                echo $result1;}

                            ?>                                                                    
                 

                        </table>
                    </div>
                </div>
            </div>
        </div>


</body>
</html>