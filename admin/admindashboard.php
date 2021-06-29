<?php


 require_once("adminheader.php");
 require_once("../connection.php");

     session_start();
     $usertype = $_SESSION["usertype"];
       
     if($usertype != "admin")
     {
         header("Location: ../login.php");
     }


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin's Dashboard</title>    
  <link href="../includes/bootstrap.min.css" rel="stylesheet">
  <script src="../includes/jquery.js"></script>
  <script src="../includes/bootstrap.min.js"></script>
</head>
<body>


<div align="center"><h2><br>Welcome <b><?php echo $_SESSION["username"]; ?>!</b></h2></div><br>

<div class="row" style="padding-left:6px;">
 <div class="col-sm-2">


<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'viewhirings.php'" > Track Hirings </button>

<button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href = 'viewclients.php'">Client's Profiles </button>

<button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href = 'viewcoders.php'" >Coder's Profiles</button>

<button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href = 'viewprojectslist.php'" >View Projects</button>

<button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href = 'viewprogress.php'" >Project's Progress</button>

<button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href = 'viewprogress.php'" >Payments</button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'viewusers.php'" >View Users </button>



 </div>
</div>



</body>
</html>

