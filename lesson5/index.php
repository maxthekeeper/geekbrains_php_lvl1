<?php

	session_start();

	if ((isset($_COOKIE["page"])) && (isset($_COOKIE["login"]))) {
		$page = $_COOKIE["page"];		
		header("Location: $page.php");	
	} else {
		$page = "page1";
	}	

	if (!(isset($_SESSION["login"])))
		header("Location: login.php");