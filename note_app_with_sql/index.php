<?php
    $connection=require_once './Connection.class.php';    
    $notes=$connection->getNotes();
    $currentNote=['id'=>'','title'=>'','description'=>''];
    if(isset($_GET['id'])){
        $currentNote=$connection->getCurrentNote($_GET['id']);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>note app</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/styles/app.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Note</h1>
            <a href="../index.php">back to list</a>
            <br><br>
        </header>
        
        
        
        <form  style="display:block" class="new-note" action="save.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $currentNote['id'];?>"/>
            <input type="text" name="title" placeholder="Note Title"
                value="<?php echo $currentNote['title'];?>"><br>
            
            <textarea name="description" cols="" rows="">
<?php echo $currentNote['description'];?>
            </textarea><br>
            
            <button><?php echo isset($_GET['id'])?'Update':'Add';?></button>
            
        </form>
        
        
        
        <div class="notes">
            <?php foreach($notes as $note):?>
                <div class=note style="">
                    <div class="title">
                        <a href="?id=<?php echo $note['id'];?>">
                            <?php echo $note['title'];?>
                        </a>
                    </div>
                    <div class="description">
                        <?php echo $note['description'];?>
                    </div>
                    <small><?php echo $note['create_date'];?></small>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $note['id'];?>">
                        <button class="close">delete</button>
                    </form>
                </div>
            <?php endforeach;?>
        </div>
    </body>
</html>

