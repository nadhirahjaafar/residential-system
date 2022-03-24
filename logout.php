<?php
session_start();
 session_destroy ();
 header("Location:http://localhost/secure/logout1.php");
?>