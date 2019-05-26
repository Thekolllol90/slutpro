
       
<?php           $sql = "SELECT name, displayInfo, rating, pic, gluten, id FROM pro";
                $result = mysqli_query($conn, $sql);
?>

   <?php
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="produkt">
        <div id="dis">
            <img id="pic" src="<?php echo $row["pic"] ?>" width="300px">
            <div id="display"><?php echo $row["displayInfo"] ?></div>
            <div id="rate"></div>
        </div>
        <p id="title"><?php echo $row["name"] ?></p>
        <form action="../produkt/addtocart.php" method="post">
           <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
            <button type="submit" name="submit" id="button"><img id="plus" src="../header/cart.png"></button>
        </form>
    </div>
    <?php
    }
    ?>
