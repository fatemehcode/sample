<?php
  define('REQUIRED_FIELD_ERROR','This Field is required!');
  
  function post_data($field){
    $_POST[$field]??=false;
    return htmlspecialchars(stripslashes($_POST[$field]));
  }
  
  $username='';
  $email='';
  $password='';
  $repeatpassword='';
  $yoururl='';

  if($_SERVER['REQUEST_METHOD']==='POST'){
    $username=post_data("username");
    $email=post_data("email");
    $password=post_data("password");
    $repeatpassword=post_data("repeatpassword");
    $yoururl=post_data("yoururl");
    //-----------------validation---------------- 
    if(!$username){
      $errors['username']=REQUIRED_FIELD_ERROR;}
    if(strlen($username)<6 || strlen($username)>16){
      $errors['username']=($errors['username']??'').'<br/>'.'username must has between 6 and 16 characters';}
    if(!$email){
      $errors['email']=REQUIRED_FIELD_ERROR;}
      else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']='This field must be a valid email address';}
    if(!$password){
      $errors['password']=REQUIRED_FIELD_ERROR;}
    if(!$repeatpassword){
      $errors['repeatpassword']=REQUIRED_FIELD_ERROR;}
    if($password && $repeatpassword &&strcmp($password,$repeatpassword)!=0){
      $errors['repeatpassword']='does not match';}
    if(!$yoururl&&!filter_var($yoururl,FILTER_VALIDATE_URL)){
      $errors['yoururl']='This field must be a valid URL address';}
    
    if(empty($errors)){
      echo '<pre>';
      var_dump($_POST);
      echo '</pre>';}
  }
   
?>




<?php include './partial/header.php'; ?>


<br/><br/>
<form action="" method="post"> 
  <div class="row" >
    <div class="col-5">
      <div class="form-group">
        <input class="form-control <?php echo isset($errors['username'])?'is-invalid':""?>" 
          type="text" 
          name="username" value="<?php echo $username;?>" 
          placeholder="Enter username"/>        
          <div class="invalid-feedback">
            <?php echo $errors['username']??'';?>
          </div>
      </div> 
      <div class="form-group "> 
        <input class="form-control <?php echo isset($errors['email'])?'is-invalid':'';?>" 
          type="email" 
          name="email" value="<?php echo $email;?>" 
          placeholder="Enter Email"/>
          <div class="invalid-feedback">
            <?php echo $errors['email']??'';?>
          </div>
      </div> 
      <div class="form-group"> 
        <input class="form-control <?php echo isset($errors['password'])?'is-invalid':'';?>" 
         type="password" 
        name="password" value="<?php echo $password;?>" 
        placeholder="Enter Password"/>
        <div class="invalid-feedback">
          <?php echo $errors['password']??'';?>
        </div>
      </div> 
      <div class="form-group"> 
        <input class="form-control <?php echo isset($errors['repeatpassword'])?'is-invalid':'';?>" 
         type="password" 
        name="repeatpassword" value="<?php echo $repeatpassword;?>" 
        placeholder="repeatpassword"/>
        <div class="invalid-feedback">
          <?php echo $errors['repeatpassword']??'';?>
        </div>
      </div> 
      <div class="form-group">   
        <input class="form-control <?php echo isset($errors['yoururl'])?'is-invalid':'';?>" 
          type="url" 
          name="yoururl" value="<?php echo $yoururl;?>" 
          placeholder="Enter your URL"/>
          <div class="invalid-feedback">
            <?php echo $errors['yoururl']??'';?>
          </div>
      </div>  
        
        
      <button type="submit" class="btn btn-primary">Register</button>
      
    </div>
  </div> 
</form>
        
<br/><br/>

<form action="./signin_form.php">
  <small>already registerd!</small>
  <button class="btn btn-primary" >SignIn</button>
</form>

<?php include './partial/footer.php'; ?>