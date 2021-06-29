<?php

require_once("clientheader.php");
require_once("../connection.php");

    session_start();
    $usertype = $_SESSION["usertype"];
      
    if($usertype != "client")
    {
        header("Location: ../login.php");
    }

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM coderprofiles WHERE CONCAT(CoderID, CoderName, CoderEmail, CoderCountry, CoderDescription, Category, Skills, CoderUserName, Qualification) LIKE '%".$valueToSearch."%' ";
    $search_result = filterTable($query);
    
}
else {
	$query = " SELECT * FROM `coderprofiles` ";
	$search_result = filterTable($query);
}


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "minglebox");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search Coders</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <link rel="stylesheet" a href="../CSS/bootstrap.css"/>
    </head>
    <body>
        
        <form method="post">
        <div align="center"><input type="text" id = "search" size="80" class = "mt-3" name="valueToSearch" placeholder="Search Coders" width="48" height="48"><br><br>
            <input type="submit" name="search" class = 'btn btn-primary' value="Filter"><br></div><br>
            

<div class="alert alert-primary">Please Click on the User Name link to send the request to the Coder</div>


            <table class="table table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Coder ID</th>
                    <th>User Name</th>
                    <th>Skills</th>
                    <th>Qualification</th>
                    <th>Country</th>
                    <th>Description</th>
                </tr>
            </thead>

                <?php
                if(mysqli_num_rows($search_result))
                {
                 while($row = mysqli_fetch_assoc($search_result)): ?>
                <tr>
               
                    <td><?php echo $row['CoderID'];?></td>

                    <td><a href="coderprofileforclient.php?CoderUserName=<?php echo $row['CoderUserName'];?>"><?php echo $row['CoderUserName'];?></a></td>
                    <?php $username = $row['CoderUserName']; ?>
                    

                    <td><?php echo $row['Skills'];?></td>
                    <td><?php echo $row['Qualification'];?></td>
                    <td><?php echo $row['CoderCountry'];?></td>
                    <td style="text-align:justify"><?php 

                        $description = $row['CoderDescription'];
                        echo  strlen($description) >= 400 ? substr($description, 0, 400) : $description;?>
                        <a href="coderprofileforclient.php?CoderUserName=<?php echo $username; ?>">[Read more]</a>
                    
                    </td>

                </tr>
                <?php endwhile;
                }
                else echo "No Coders";?>
            </table>
        </form>
    </body>
</html>