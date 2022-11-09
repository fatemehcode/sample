<?php
    $kw='';
    if(isset($_GET["keyword"])){
        $kw=$_GET["keyword"];
        echo $kw.'<br>';//Do whatever necessary with the keyword
    }
?>
        <?php include './partial/header.php'; ?>
        <div id="content">
            <form method="GET">
                <input  type="text"
                        name="keyword"
                        placeholder="Enter your keywords"
                        value="<?php echo $kw;?>"
                        />
                <button type="submit">Search</button>
            </form>
        </div>
        <?php include './partial/footer.php'; ?>
