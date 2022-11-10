<?php
    require_once './Person.class.php';
    require_once './Student.class.php';
    

    $p=new Person('fatemeh','yeganeh','7-9-1982');
    echo '<pre>';
    var_dump($p);
    echo $p->age();
    echo '</pre>';
    $s=new Student('fatemeh','yeganeh','7-9-1982',12.6);
    echo '<pre>';
    var_dump($s);
    echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>OOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>oop</h1>
        <a href="../index.php">back to list</a>
        
    </body>
</html>

