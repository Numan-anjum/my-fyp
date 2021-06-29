<?php 

    require_once("adminheader.php");
    require_once("../connection.php");

    session_start();

    $usertype = $_SESSION["usertype"];

    if($usertype != "admin")
    {
      header("Location: ../login.php");
    }


    $query = " SELECT * FROM users";
    $result = mysqli_query($conn,$query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>View All Users</title>
</head>
<body class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-2">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th> User ID </th>
                                <th> Username</th>
                                <th> Password </th>
                                <th> User Type </th>
                                <th> Email </th>
                                <th> Edit  </th>
                                <th> Delete </th>
                            </tr>
                            </thead>

                            <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        
                                        $userID = $row['userID'];
                                        $username = $row['username'];
                                        $password = $row['password'];
                                        $usertype = $row['usertype'];
                                        $email = $row['email'];
                            
                            ?>
                                    <tr>
                                        <td><?php echo $userID; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo md5($password); ?></td>
                                        <td><?php echo $usertype; ?></td>
                                        <td><?php echo $email; ?></td>

                                        <td><a href="editusers.php?userID=<?php echo $userID; ?>"class="btn btn-primary" role="button">Edit</a></td>

                       
                                        <td><a onClick="return confirm('Are you sure you want to delete?')" href='deleteusers.php?userID=<?php echo $userID; ?> &usertype=<?php echo $usertype;?>' type='button' class='btn btn-danger'>Delete</a></td>
        
          
                                    </tr>        
                           <?php 
                                    
                                }
                            }
                            else{
                                $result1='<div class="alert alert-danger">No Users Yet</div>';
                                echo $result1;}

                            ?>                                                                    
                 
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
