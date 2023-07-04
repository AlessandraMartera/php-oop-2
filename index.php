<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
     require_once("product.php");
    ?>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>I NOSTRI PRODOTTI:</h1>
    </header>

    
    <main>     
        <?php 
        foreach ($foodProducts as &$foodProduct) {
        ?>

        <div class="product">
            <div>
                <h4>categoria:</h4>
                <div>
                    <?php 
                    echo $foodProduct -> getCategory();
                    ?>
                </div>
            </div>

            <div>
            <img src="<?php echo $foodProduct -> getImmage(); ?>">
            </div>

            <div>
                <strong>prodotto: </strong><?php echo $foodProduct -> getTitle(); ?>
            </div>

            <div>
                <strong>prezzo: </strong> <?php echo $foodProduct -> getPrice(); ?> euro 
            </div>

            <div>
            <br/>    
            <span> - Dettagli prodotto - </span>
                <div>
                <strong>scadenza: </strong> <?php  echo $foodProduct -> getMonthdeadline() . " / " . $foodProduct -> getYeardeadline(); ?>
                </div>
                <span>
                        <strong>codice prodotto:</strong> <?php echo $foodProduct -> getCode(); ?>
                    </span>
                <div>
                    <strong>Quantità: </strong> <?php echo $foodProduct -> getWeight(); ?> kg
                </div>
            </div>
        </div>


        <?php
        }

        // forEach to toyproducts
        foreach ($toyProducts as &$toyProduct) {
        ?>


            <div class="product">
                <div>
                    <h4>categoria:</h4>
                    <div>
                        <?php 
                            echo $toyProduct -> getCategory();
                        ?>
                    </div>
                </div>

                <div>
                    <img src="<?php echo $toyProduct -> getImmage(); ?>">
                </div>

                <div>
                    <strong>prodotto: </strong><?php echo $toyProduct -> getTitle(); ?>
                </div>

                <div>
                    <strong>prezzo: </strong> <?php echo $toyProduct -> getPrice(); ?> euro 
                </div>

                <div>
                    <br>
                       
                    <span> - Dettagli prodotto - </span>

                    
                    <div>
                        <strong>colore</strong> <?php echo $toyProduct -> getColor(); ?>
                    </div>
                    
                    <span>
                        <strong>codice prodotto:</strong> <?php echo $toyProduct -> getCode(); ?>
                    </span>

                    <div>
                        <strong>Quantità: </strong> <?php echo $toyProduct -> getType(); ?> 
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </main>
</body>
</html>