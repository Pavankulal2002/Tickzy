<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){      
    include('../Database file/dbconnect.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        $sql = "select * from admin where user = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);   
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            while($row=mysqli_fetch_assoc($result)){
                if ($count == 1){ 
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header('location: ../admin/dashboard.php');
                } 
                else{
                    $showError = "Invalid Credentials";
                }
            }
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }    

    }
?>  