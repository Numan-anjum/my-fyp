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

    $msg='<div class="alert alert-primary">Please Click on the ID links to view the Complete Description</div>';
    echo $msg;

    $warning ='<div class="alert alert-danger">Once Replied You Cannot Change, Please Accept or Reject Carefully</div>';
    echo $warning;

$query = " SELECT * FROM requests WHERE CoderID = '".$userID."' ORDER BY ProjectID DESC ";
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
                                <th>Client ID</th>
                                <th>Project ID</th>    
                                <th>Project Title</th>
                                <th>Reply</th>
                                </tr>
                            </thead>


 <?php 

if (mysqli_num_rows($result) > 0)
{
  while($row=mysqli_fetch_assoc($result))
  {
      $projectID = $row['ProjectID'];
      $ClientID = $row['ClientID'];

?>
        <tr>
        
        <td><a  href="clientprofileforcoders.php?ClientID=<?php echo $ClientID ;?>">  <?php echo '<div align="center">' .$row['ClientID']. '</div>'; ?></a></td>

        <td><a  href="coderviewproject.php?ProjectID=<?php echo $row['ProjectID'];?>"> <?php echo '<div align="center">' .$row['ProjectID']. '</div>'; ?></a></td>
        

        <?php

      $query2 = " SELECT * FROM project WHERE ProjectID = $projectID";
      $result2 = mysqli_query($conn,$query2);
      while($row = mysqli_fetch_array($result2))
      {

        ?>

        <td><?php echo $row['Name'];?></td>

        <form action = <?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="POST">
        <td><a href="accept.php?projectid=<?php echo $row['ProjectID']?>" class="btn btn-primary" role="button">Accept</a> 
 
        <a href="reject.php?projectid=<?php echo $row['ProjectID']?>" class="btn btn-danger" role="button">Reject</a></td>

        </tr>
        
<?php

      }

  }
  
}
else
{
$result1 ='<div class="alert alert-info">No Requests Yet</div>';
echo $result1;
}
  

  ?>

</table>
</div>
                </div>
            </div>
        </div>


</form>
<br>
</body>
</html>



<?php

if(isset($_GET['acceptmsg']))
{
    $projectID = $_GET['projectid']; //from accept.php

    $message = "Client Request for Project ID ".$projectID." has been Accepted, You are Hired Now.";
    echo $message;
}


if(isset($_GET['rejectmsg']))
{
    $projectID = $_GET['projectid'];

    $message = "Client Request for Project ID ".$projectID." has been Rejected.";
    echo $message;

}


echo "<br>";
?>
