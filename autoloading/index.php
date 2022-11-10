<?php
require_once './vendor/autoload.php';

// use app\Email;
// $e=new Email('me');
// echo($e->to);

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('output.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

</body>

</html>