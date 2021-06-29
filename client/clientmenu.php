<?php 

  require_once("clientheader.php");
  require_once("../connection.php");
  

      session_start();
      $usertype = $_SESSION["usertype"];
        
      if($usertype != "client")
      {
          header("Location: ../login.php");
      }


 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Client Dashboard</title>    
  
  <link href="../includes/bootstrap.min.css" rel="stylesheet">
  <script src="../includes/jquery.js"></script>
  <script src="../includes/bootstrap.min.js"></script>
  

</head>

<body>
<br>
<form action="search.php" method="post">
<div align="center"><input type="text" id = "search" size="70" style="height:35px; font-size:12pt; " class = "mt-3" name="valueToSearch" placeholder="Search Coders" ><br>
</div>
</form>

<div align="center"><h2>Welcome <b><?php echo $_SESSION["username"]; ?>!</b></h2></div>


<div class="row" style="padding-left:8px;">
 <div class="col-sm-2">

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'clientprofile.php'" > Make Profile </button>

<button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href = 'viewprofile.php'">View Profile </button>

<button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href = 'addproject.php'" >Add New Projects</button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'viewprojectslist.php'" >View Projects </button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'search.php'">Hire Coders</button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'hirestatus.php'" >Check Hire Status</button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'checkprogress.php'" >Check Progress </button>

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href = 'checkprogress.php'" >Make Payment </button>


<button class="btn btn-primary btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">Delete Account
  <span class="caret"></span></button>
  <ul class="dropdown-menu">

    <li><a href="deleteclient.php" class="btn btn-secondary btn-lg">Delete Projects</a></li>
    <li><a href="deleteclient.php" class="btn btn-secondary btn-lg">Delete Profile</a></li>
    <li><a href="deleteclient.php" class="btn btn-danger btn-lg">Delete Account</a></li>

  </ul>
 </div>
</div>
<br><br><br><br>
<!--  <a href="clientprofile.php" class="btn btn-primary">Make Profile</a>  -->    
<br>
</body>
</html>
<?php
include_once("../includes/footer.html");
?>