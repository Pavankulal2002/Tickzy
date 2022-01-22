<?php 
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

unset($_SESSION['logged']);
session_unset();
session_destroy();

header('Location: ../Pages/home.html');
