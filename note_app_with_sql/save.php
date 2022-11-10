<?php
$connection=require_once './Connection.class.php';

$id=$_POST['id']??'nn';

echo $id;


if($id)
{$connection->update($id,$_POST);}
else
{$connection->add($_POST);}


header('location: index.php');
?>