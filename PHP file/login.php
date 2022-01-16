<?php
 // session_start();

 // if (isset($_SESSION['id'])) {
 //     header("Location:profile.php");
  //}

  // Include database connectivity
    
   include_once('../Database file/dbconnect.php');
  
  if (isset($_POST['submit'])) {

      $errorMsg = "";

      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']); 
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
          while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
             
              $_SESSION['username'] = $username ;
                header("Location: ../User/index.html");
               
            }else{
                header('location: logout.php');
                $errorMsg = "Email or Password is invalid";
            }    
          }
        }else{
            header('location: logout.php');
          $errorMsg = "No user found on this email";
        } 
    }else{
        header('location: logout.php');
      $errorMsg = "Email and Password is required";
    }
  }

?>