<?php

session_start();
if(!isset($_SESSION["login"]["u_name"]))
{
	header("Location:../login.php");
}



?>
       