<?php
      require_once("header.php");
      require_once("connection.php");

      if($_SERVER["REQUEST_METHOD"] == "POST")
      {

        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = $conn->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
//        $hash = md5($_POST['password']);
        $usertype = mysqli_real_escape_string($conn, $_POST["usertype"]);


        if (empty($username) or empty($email) or empty($password) or !filter_var($email,FILTER_VALIDATE_EMAIL))
        {
           echo "Email Invalid Input";
        }
        else
        {
          $sql_u="SELECT * FROM users WHERE (username='$username');";
          $sql_e="SELECT * FROM users WHERE (email='$email');";
          $res_u=mysqli_query($conn,$sql_u);
          $res_e=mysqli_query($conn,$sql_e);
          if (mysqli_num_rows($res_u) > 0)
          {
            echo "Username already Exists"; 	
          }
          else if(mysqli_num_rows($res_e) > 0)
          {
            echo "Email already Exists";
          }

          else
          {

          $query = mysqli_query($conn, "INSERT INTO users (username, email, password, usertype) VALUES ('$username', '$email', '$password' , '$usertype');");


            if($query)
            {
              header("Location: login.php?msg");
            }
            else
            {echo "Registration Query error";
            }
          }
        }
      }    
?>



<!DOCTYPE html>    
<html>    
<head>    
    <title>Register Form</title>    
    <link rel="stylesheet" type="text/css" href="CSS/style.css">    
</head>  

 
<body>    
    <h2>Create an Account</h2><br>    
    <div class="fieldsbgarea">     
    <form action = <?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="POST">


<label><b>EMAIL</b></label>
<input type="email" name="email" id="inputfields" placeholder="Email" required><br><br>


<label><b>User Name</b></label>
<input type="text" name="username" id="inputfields" placeholder="Username" required><br><br>


<label><b>Password</b></label>
<input type="Password" name="password" id="inputfields" placeholder="Password" required><br><br>



 <select name='usertype' id = "inputfields" required>
                <option value="">Register as Client or Coder</option>
                <option value="client">Client</option>
                <option value="coder">Coder</option>
              </select><br><br>



<input type="submit" name="log" id="submitlog" value="Register"><br><br>    
 

</form>     

  <a href="login.php"style="color:blue;">Login Instead!</a>
</div>    
</body>    
</html>


