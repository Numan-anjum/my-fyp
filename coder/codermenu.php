<?php

 require_once("coderheader.php");
 require_once("../connection.php");

     session_start();
     $usertype = $_SESSION["usertype"];
       
     if($usertype != "coder")
     {
         header("Location: ../login.php");
     }


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Coder's Dashboard</title>    
  <link href="../includes/bootstrap.min.css" rel="stylesheet">
  <script src="../includes/jquery.js"></script>
  <script src="../includes/bootstrap.min.js"></script>
</head>
<body>


<div align="center"><h2><br>Welcome <b><?php echo $_SESSION["username"]; ?>!</b></h2></div><br>

<div class="row" style="padding-left:7px;">
 <div class="col-sm-2">

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'coderprofile.php'" > Make Profile </button>

<button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href = 'coderviewprofile.php'">View Profile </button>

<button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href = 'clientrequests.php'" >New Requests</button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'acceptedprojects.php'" >Accepted Projects </button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'insertprogress.php'">Insert Progress</button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'viewinsertedprogress.php'" >View Progress</button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'receivepayment.php'" >Received Amounts</button>

 </div>
</div>



</body>
</html>

