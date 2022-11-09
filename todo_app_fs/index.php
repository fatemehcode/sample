<?php
    $page_title ="ToDo with file system";
    if(file_exists('todo.json')){
        $json=file_get_contents('todo.json');
        $jsonArray=json_decode($json,true);
    }else{
        $jsonArray=[];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $page_title?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
        <heade>
            <div style="align-content:'center' ;">
                <h1>ToDo</h1>
                <a href="../index.php">back to list</a>
            </div>
        </heade>
        <form action="./newToDo.php" method="POST">
            <input type="text" name="todo_name" placeholder="Enter your ToDo">
            <button type="submit" class="btn btn-primary">Add New ToDo</button>
        </form>
        <br><br>
        <?php foreach($jsonArray as $todoName=>$todo): ?>
            <div style="margin-bottom:20px ;">
                <form action="change_status.php" method="POST" style="display: inline-block;">
                    <input type="hidden" name="todo_name" value="<?php echo $todoName;?>">
                    <input type="checkbox" <?php echo $todo['completed']?'checked':'';?>/>
                </form>
                <?php echo $todoName; ?>
                <form action="delete.php" method="POST" style="display:inline-block;">
                    <input type="hidden" name="todo_name" value="<?php echo $todoName;?>">
                    <button type="submit" name="submit" class="btn btn-secondary">del</button>
                </form>              
            </div>
        <?php endforeach; ?>
        <script>
            const checkbox=document.querySelectorAll('input[type=checkbox]');
            checkbox.forEach(ch=>{
                ch.onclick=function(){
                    this.parentNode.submit();
                };
            })
        </script>
    </body>

</html>