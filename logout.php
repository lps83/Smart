<?php

session_start();
unset($_SESSION['log']);
$_SESSION['log'] = false ;
    session_destroy();
	header("location: index.php");
 

?>