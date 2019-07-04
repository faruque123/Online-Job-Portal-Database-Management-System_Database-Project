<?php
    session_start();
    $_SESSION['companyId'] = false;
	$_SESSION['value'] = false;
    header("Location: home.php");
?>