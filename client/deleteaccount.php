<?php


session_start();

$usertype = $_SESSION["usertype"];
  
if($usertype != "client")
{
    header("Location: ../login.php");
}
$userID = $_SESSION['userID'];
$conn =mysqli_connect("localhost", "root", "", "minglebox");


$query4 = " DELETE FROM requests WHERE ClientID = '".$userID."' ";
$result4 = mysqli_query($conn,$query4);

$query1 = " DELETE FROM project WHERE ClientID = '".$userID."'  ";
$result1 = mysqli_query($conn,$query1);

$query2 = " DELETE FROM clientprofiles WHERE ClientID = '".$userID."'  ";
$result2 = mysqli_query($conn,$query2);

$query5 = " DELETE FROM payments WHERE ClientID = '".$userID."'";
$result5 = mysqli_query($conn,$query5);




                        $query6 = " DELETE FROM users WHERE userID = '".$userID."'";
                        $result6 = mysqli_query($conn,$query6);



  if($result1 && $result2 && $result4 && $result5 && $result6)
  {
    header("location: ../logout.php");
  }
  else
  {
      echo "Please Check Delete all data fully Account Query";
  }


/*
$tables = array("users","requests","project","payments");
foreach($tables as $table) {
  $query = "DELETE FROM $table WHERE userID='$userID'";
  mysqli_query($conn,$query);
}
*/

?>
