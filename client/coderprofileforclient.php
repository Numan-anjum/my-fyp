<?php

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }


    $CoderUserName = $_GET['CoderUserName']; //from search.php

 
    $query = " SELECT * FROM coderprofiles WHERE CoderUserName = '".$CoderUserName."' ";


    $result = mysqli_query($conn,$query);


        if (mysqli_num_rows($result) > 0) {
          while($row=mysqli_fetch_assoc($result))
          {

            echo '<div class="col-lg-5 mt-2">
            <img src="../coder/uploads/'.$row['image'].'" alt="Unable to Load" height=320" width="270">
        </div> ';

          $userID = $row['CoderID'];
          $codername = $row['CoderName'];
          $email = $row['CoderEmail'];
          $username = $row['CoderUserName'];
          $codercountry = $row['CoderCountry'];
          $coderdescription = $row['CoderDescription'];
          $codercategory= $row['Category'];
          $coderskills= $row['Skills'];
          $coderqualification = $row['Qualification'];

      }
    }
    

?>
<html>
<head>
        <title>Coder Profile</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <link rel="stylesheet" a href="../CSS/bootstrap.css"/>

</head>
<body>


<div class="row" style="padding-left:35px;">
<dl class="row">
  <dt class="col-sm-3 mt-3">Coder ID</dt>
  <dd class="col-sm-9 mt-3"><p><?php echo $userID; ?></p></dd>


  <dt class="col-sm-3">User Name</dt>
  <dd class="col-sm-9"><p><?php echo $username; ?></p></dd>

  <dt class="col-sm-3">Full Name</dt>
  <dd class="col-sm-9"><p><?php echo $codername;?><p></dd>

  <dt class="col-sm-3 ">Email</dt>
  <dd class="col-sm-9"><p><?php echo $email;?><p></dd>

  <dt class="col-sm-3">Category</dt>
  <dd class="col-sm-9"><p><?php echo $codercategory; ?></p></dd>

  <dt class="col-sm-3 ">Skills</dt>
  <dd class="col-sm-9"><p><?php echo $coderskills;?><p></dd>

  <dt class="col-sm-3">Qualification</dt>
  <dd class="col-sm-9"><p><?php echo $coderqualification;?><p></dd>

  <dt class="col-sm-3">Country</dt>
  <dd class="col-sm-9"><p><?php echo $codercountry;?><p></dd>


  <dt class="col-sm-3">Description</dt>
  <dd class="col-sm-9"><p><?php echo $coderdescription;?><p></dd>
</dl>
</div>

<br>
<div align="center">

<a href='request.php?CoderID=<?php echo $userID;?>' class="btn btn-success">Send Request to hire</a>
</div>
<br>
</body>
</html>
