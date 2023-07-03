<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
     require_once("product.php");
    ?>
    <title>Document</title>
</head>
<body>
    <div>
        <h4>categoria:</h4>
        <?php echo $product1 -> category; ?>
    </div>

    <div>
       <img src="<?php echo $product1 -> getImmage(); ?>">
    </div>

    <div>
        <strong>prodotto: </strong><?php echo $product1 -> getTitle(); ?>
    </div>

    <div>
       <strong>prezzo: </strong> <?php echo $product1 -> getPrice(); ?> euro 
    </div>
</body>
</html>