<?php
session_start();
unset($_SESSION["DEVT_ID"]);
session_destroy();  
header("Location:index.php");
?>