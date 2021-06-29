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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    <title>Delete All Informations</title>
</head>
<body>
<form action="" method="post">

<div class="alert alert-danger mt-2">Once deleted you cannot be able to Recover</div>


<div align="left" style="padding-left: 10px;">
<p>Please Select an Option to Delete</p>
<input type="checkbox" name="deleteall[]" value="projects"> Delete All Projects<hr>
<input type="checkbox" name="deleteall[]" value="profile"> Delete Profile<hr>
<input type="checkbox" name="deleteall[]" value="account"> Delete Account<br>
<br><input type="submit" name="formSubmit" value="Submit" class="btn btn-danger"/>
</div>
</form>

<script type = "text/javascript">
  
function accountconfirmation() {
   var retVal = confirm("Are you sure you want to delete ?");
   if( retVal == true )
   {
    location.href = "deleteaccount.php"; 
     return true; 

   } 
   else {
      return false;
   }
}



</script>


</body>
</html>

<?php






function IsCheckeded($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }




    if(IsCheckeded('deleteall','projects'))
    {
        deleteprojects();
    }
  
    
    function deleteprojects()
    {


      $userID = $_SESSION['userID'];
      $query1 = " DELETE FROM project WHERE ClientID = '".$userID."'  ";
      $conn =mysqli_connect("localhost", "root", "", "minglebox"); 
      $result1 = mysqli_query($conn,$query1);

      $query2 = " DELETE FROM requests WHERE ClientID = '".$userID."'  ";
      $result2 = mysqli_query($conn,$query2);


      if($result1 || $result2)
      {
          echo "<br>"."Successfully Deleted All Projects and Requests to the Coders"."<br>";
      }
      else
      {
          echo "Please Check Delete Projects Query";
      }


    }







if(IsCheckeded('deleteall','profile'))
{
  deleteprofile();
}

function deleteprofile()
{

  $userID = $_SESSION['userID'];
  $query2 = " DELETE FROM clientprofiles WHERE ClientID = '".$userID."'  ";
  $conn =mysqli_connect("localhost", "root", "", "minglebox"); 
  $result2 = mysqli_query($conn,$query2);



  if($result2)
  {
      echo "Successfully Deleted Your Profile Data";
  }
  else
  {
      echo "Please Check Delete Profile Query";
  }


}



if(IsCheckeded('deleteall','account'))
{
  echo '<script type="text/javascript">',
     'accountconfirmation();',
     '</script>'
;

}



?>



