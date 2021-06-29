<?php

  require_once("header.php");
  require_once("connection.php");
  if (isset($_GET['msg']))
    {
      $Message = "Registered Successfully";
      echo $Message;
    }
  

 
 if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
     
     $username = mysqli_real_escape_string($conn, $_POST["username"]);
     $password = mysqli_real_escape_string($conn, $_POST["password"]);
    
     $query = "SELECT * FROM users ";
    
     $result = mysqli_query($conn, $query);

         while ($row = mysqli_fetch_assoc($result))
           {
              if ($username == $row['username'] || $username == $row['email'])
               {
                 if (password_verify($_POST['password'], $row['password']))
                   {
                     session_start();
                     $username = $row['username'];
                     $_SESSION["username"] = $username;
                    
                     $userID = $row['userID'];
                     $_SESSION["userID"] = $userID;
                    
                     $usertype = $row['usertype'];
                     $_SESSION["usertype"] = $usertype;
                    
                     $email = $row['email'];
                     $_SESSION["email"] = $email;
                    
                     if ($usertype == 'coder')
                       {
                         header("Location: coder/codermenu.php");
                       }
                     elseif ($usertype == 'client')
                       {
                         header("Location: client/clientmenu.php");
                       }
                     elseif ($usertype == 'admin')
                       {
                         header("Location: admin/admindashboard.php");
                       }
                     else
                       {
                         echo "User Login Type Error";
                       }
                    
                    }
                 else
                   {
                     echo "Incorrect Username or Password";
                   }
                
                }
                    
            }
     }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>

<h2>Login Page</h2><br> 
  <form action = <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">  
    <div class="fieldsbgarea">  

        <label><b>User Name</b></label>    
        <input type="text" name="username" id="inputfields" placeholder="Username or Email" required><br><br>    
        
        <label><b>Password</b></label>    
        <input type="Password" name="password" id="inputfields" placeholder="Password" required><br><br>  

        <input type="submit" name = "log" id="submitlog" value="Log In">      
        <br><br> 
 
  </form>
<br>
  <a href="register.php"style="color:blue;">Register Instead!</a>
</body>
  
</div> 
</html>
