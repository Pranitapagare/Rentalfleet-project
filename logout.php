<?php
	session_start();
	session_destroy();
	header("location: ../index.php");
	header("location: ../account.php");
	header("location: ../login.php");
?>