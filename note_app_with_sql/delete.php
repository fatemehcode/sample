<?php
$connection=require_once './Connection.class.php';

$connection->delete($_POST['id']);
header('location: index.php');
?>