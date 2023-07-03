<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
     require_once("product.php");
    ?>
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>I NOSTRI PRODOTTI:</h1>
    </header>
    <main>
        <div class="product">
            <div>
                <h4>categoria:</h4>
                <div>
                    <?php 
                    echo $product1 -> getCategory();
                    ?>
                </div>
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

            <div>
            <br/>    
            <span> - Dettagli prodotto - </span>
                <div>
                <strong>scadenza: </strong> <?php echo $product1 -> getMonthdeadline() . " / " . $product1 -> getYeardeadline(); ?>
                </div>
                <div>
                    <strong>Quantità: </strong> <?php echo $product1 -> getWeight(); ?> kg
                </div>
            </div>
        </div>

        <div class="product">
            <div>
                <h4>categoria:</h4>
                <div>
                    <?php 
                    echo $product3 -> getCategory();
                    ?>
                </div>
            </div>

            <div>
            <img src="<?php echo $product3 -> getImmage(); ?>">
            </div>

            <div>
                <strong>prodotto: </strong><?php echo $product3 -> getTitle(); ?>
            </div>

            <div>
                <strong>prezzo: </strong> <?php echo $product3 -> getPrice(); ?> euro 
            </div>

            <div>
            <br/>    
            <span> - Dettagli prodotto - </span>
                <div>
                <strong>scadenza: </strong> <?php echo $product3 -> getMonthdeadline() . " / " . $product3 -> getYeardeadline(); ?>
                </div>
                <div>
                    <strong>Quantità: </strong> <?php echo $product3 -> getWeight(); ?> kg
                </div>
            </div>
        </div>

        <div class="product">
            <div>
                <h4>categoria:</h4>
                <div>
                    <?php 
                    echo $product2 -> getCategory();
                    ?>
                </div>
            </div>

            <div>
            <img src="<?php echo $product2 -> getImmage(); ?>">
            </div>

            <div>
                <strong>prodotto: </strong><?php echo $product2 -> getTitle(); ?>
            </div>

            <div>
                <strong>prezzo: </strong> <?php echo $product2 -> getPrice(); ?> euro 
            </div>

            <div>
            <br/>    
            <span> - Dettagli prodotto - </span>
                <div>
                <strong>colore</strong> <?php echo $product2 -> getColor(); ?>
                </div>
                <div>
                    <strong>Quantità: </strong> <?php echo $product2 -> getType(); ?> 
                </div>
            </div>
        </div>

        <div class="product">
            <div>
                <h4>categoria:</h4>
                <div>
                    <?php 
                    echo $product4 -> getCategory();
                    ?>
                </div>
            </div>

            <div>
            <img src="<?php echo $product4 -> getImmage(); ?>">
            </div>

            <div>
                <strong>prodotto: </strong><?php echo $product4 -> getTitle(); ?>
            </div>

            <div>
                <strong>prezzo: </strong> <?php echo $product4 -> getPrice(); ?> euro 
            </div>

            <div>
            <br/>   
            <span> - Dettagli prodotto - </span>
                <div>
                <strong>colore</strong> <?php echo $product4 -> getColor(); ?>
                </div>
                <div>
                    <strong>Quantità: </strong> <?php echo $product4 -> getType(); ?> 
                </div>
            </div>
        </div>
        
    </main>
</body>
</html>