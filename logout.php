<?php 
	//Sesuai namanya ini untuk logout
    session_start();
    session_destroy();
    header("Location: index.php");
?>