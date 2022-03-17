<?php

 //If POST id exists --> take the id; otherwise take null
$id = $_GET['id'] ?? null;

if(!$_GET['id']) {
	header('Location: index.php');
	exit;
}

header("Location: index.php");