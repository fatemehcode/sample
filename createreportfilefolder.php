<?php
include_once './partial/header.php';
    !file_exists('reports_'.(date('d M Y')))?mkdir(('reports_'.(date('d M Y'))),0755,true):'';
    $myfile = fopen('reports_'.(date('d M Y')).'\new.txt','a+');
    $txt = $year."\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);  
  
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sayhi']))
    {
        func();
    }
    function func()
    {
       echo'hiii';
    }
    
?>

<form action="" method="post">
    <input type="submit" name="sayhi" value="say hi" />
</form>