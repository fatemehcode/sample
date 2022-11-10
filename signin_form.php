<?php
  $usernameoremail='';

  $password='';
  

  if(isset($_POST["usernameoremail"])){
      $usernameoremail=$_POST["usernameoremail"]; 

  }

?>

<?php include './header.php'; ?>


<br/><br/>
<form action="" method="post"> 
  <input type="text" name="usernameoremail" value="<?php echo $usernameoremail;?>" placeholder="Enter username or Email"><br/><br/>
  <input type="password" name="password" value="" placeholder="Enter Password"><br/><br/>
  <button type="submit" class="btn btn-primary">SignIn</button>
</form>
        
<br/><br/>

<form action="./registration_form.php">
  <small> not registerd!</small>
  <button class="btn btn-primary" >Register</button>
</form>

<?php include './footer.php'; ?>