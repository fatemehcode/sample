<?php
$errorMsg='';
if(isset($_FILES['file'])){
   /*  echo'<pre>';
var_dump($_FILES);
echo'</pre>'; */
//(php.ini) allows post_max_size=40M and upload_max_filesize=40M we can change it
$file=$_FILES['file'];
$ext=pathinfo($file['name'],PATHINFO_EXTENSION);
$ext=strtolower($ext);

if($file['size']>5*1024*1024){
    $errorMsg='file must be at most 5 MB';}
    elseif(!in_array($ext,['png','jpg','pdf','jpeg','svg'])){ $errorMsg='file must be .jpg .png .pdf';}
    else{move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);}

}
include './header.php';?>
<p><?php echo $errorMsg;?></p>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file" value=""><br/>
    <button type="submit">Submit</button>
</form>