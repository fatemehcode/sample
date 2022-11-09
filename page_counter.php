<?php
session_start();
$_SESSION['counter']??=0;
$_SESSION['counter']++;
setcookie('name','Fatemeh',time()+10,'/');
setcookie('color','red');
include './partial/header.php';?>

    <h1>you have visited this page  <?php echo $_SESSION['counter']?> times.</h1>
    <textarea rows="" cols="15" style="background-color:<?php echo $_COOKIE['color'];?>;">
    <?php echo $_COOKIE['name'];?>
    </textarea>
<?php include './partial/footer.php';?>