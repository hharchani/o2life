<?php
require 'connect.inc.php';
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
header("Location: sign.php");
?>