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

    $query = " SELECT * FROM clientprofiles ORDER BY ClientID DESC";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>View Client's Profile</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-2">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th> Client ID </th>
                                <th> Username </th>
                                <th> Full Name </th>
                                <th> Contact No. </th>
                                <th> Country </th>
                                <th> Edit  </th>
                                <th> Delete </th>
                            </tr>
                            </thead>

                            <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {


                                        $clientID = $row['ClientID'];
                                        $username = $row['username'];
                                        $fullname = $row['FullName'];
                                        $Contact_no = $row['Contact_no'];
                                        $country= $row['country'];
                                        
                                        
                            ?>
                                    <tr>
                                        <td><a href="#"><?php echo $clientID; ?></a></td>
                                        <td><?php echo $fullname; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $Contact_no; ?></td>
                                        <td><?php echo $country; ?></td>


                                        <td><a href="editclients.php?clientID=<?php echo $clientID; ?>"class="btn btn-primary" role="button">Edit</a></td>

                       
                                        <td><a onClick="return confirm('Are you sure you want to delete?')" href='deleteclientprofiles.php?clientID=<?php echo $clientID; ?>' type='button' class='btn btn-danger'>Delete</a></td>

                                    </tr>        
                           <?php 
                                    
                                }
                            }
                            else{
                                $result1='<div class="alert alert-danger">No Client Has been Added</div>';
                                echo $result1;}

                            ?>                                                                    
                 

                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>