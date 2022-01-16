<!-- <script type="text/javascript">
      window.history.forward();
      function noBack() {
          window.history.forward();
      }
   </script> -->

   

<?php 
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start

}


session_destroy();


// unset($_SESSION['logged']);

header('Location: ../Pages/home.html');