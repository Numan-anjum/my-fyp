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

    $query = " SELECT * FROM coderprofiles ";
    $result = mysqli_query($conn,$query);

?>
<div class="alert alert-primary mt-2">Please Click on the Coder ID link to view Complete Profile's Description</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>View Coder's Profile</title>
</head>
<body class="bg-white">
        <div class="container">
           <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-2">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th> Coder ID </th>
                                <th> Username </th>
                                <th> Email </th>
                                <th> Skills </th>
                                <th> Country </th>
                                <th> Edit  </th>
                                <th> Delete </th>
                            </tr>
                            </thead>

                            <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {


                                        $coderID = $row['CoderID'];
                                        $coderusername = $row['CoderUserName'];
                                        $coderemail = $row['CoderEmail'];
                                        $skills = $row['Skills'];
                                        $codercountry = $row['CoderCountry'];

                                                                            
                            ?>
                                    <tr>
                                        <td><a href="codercompleteprofile.php?CoderID=<?php echo $coderID; ?>"><?php echo $coderID; ?></a></td>
                                        <td><?php echo $coderusername; ?></td>
                                        <td><?php echo $coderemail; ?></td>
                                        <td><?php echo $skills; ?></td>
                                        <td><?php echo $codercountry; ?></td>


                                        <td><a href="editcoders.php?coderID=<?php echo $coderID; ?>"class="btn btn-primary" role="button">Edit</a></td>

                       
                                        <td><a onClick="return confirm('Are you sure you want to delete?')" href='deletecoderprofiles.php?coderID=<?php echo $coderID; ?>' type='button' class='btn btn-danger'>Delete</a></td>



                                    </tr>        
                           <?php 
                                    
                                }
                            }
                            else{
                                $result1='<div class="alert alert-danger">No Coder Has been Added</div>';
                                echo $result1;}

                            ?>                                                                    
                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>