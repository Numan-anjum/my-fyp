<?php 

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }

    $userID = $_SESSION["userID"];

    $query = " SELECT * FROM clientprofiles WHERE ClientID = $userID";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>View Profile</title>
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
                                <th> Name </th>
                                <th> Contact </th>
                                <th> Country </th>
                                <th> Edit  </th>

                            </tr>
                            </thead>

                            <?php 
                                   if (mysqli_num_rows($result) > 0) {
                                    while($row=mysqli_fetch_assoc($result))
                                    {


                                        $userID = $row['ClientID'];
                                        $clientname = $row['FullName'];
                                        $clientcontact = $row['Contact_no'];
                                        $clientcountry = $row['country'];
                                        
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $userID; ?></td>
                                        <td><?php echo $clientname; ?></td>
                                        <td><?php echo $clientcontact; ?></td>
                                        <td><?php echo $clientcountry; ?></td>
                                        <td><a href="editprofile.php?GetID=<?php echo $userID; ?>"class = 'btn btn-primary'>Edit</a></td>
                                        
                                    </tr>        
                           <?php 
                                    
                                }
                            }
                            else{
                                $result1='<div class="alert alert-danger">No Profile Record</div>';
                                echo $result1;}

                            ?>                                                                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
<?php



if(isset($_GET['successmsgprofile']))
{
    $message = "Profile has beeen saved Successfully";
    echo $message;
}

?>
