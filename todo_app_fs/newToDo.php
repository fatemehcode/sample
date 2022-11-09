<?php
$todoname=($_POST['todo_name'])??'';
$todoname=trim($todoname);
if($todoname){
    $json=file_get_contents('todo.json');
    $jsonArray=json_decode($json,true);
    $jsonArray[$todoname]=['completed'=>false];
    file_put_contents('todo.json',json_encode($jsonArray,JSON_PRETTY_PRINT));  
}else{$jsonArray=[];}

header('location: index.php'); 