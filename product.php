<?php 

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

// L'e-commerce vende prodotti per animali
// I prodotti sono categorizzati, le categorie sono Cani o Gatti
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    
class product {
        public $category;
        private $immage;
        private $title;
        private $price;

        public function __construct($category, $immage, $title, $price ){
            $this -> category = $category;
            $this -> immage = $immage;
            $this -> title = $title;
            $this -> price = $price;
        }

        public function getImmage(){
            return $this -> immage;
        }

        public function getTitle(){
            return $this -> title;
        }

        public function getPrice(){
            return $this -> price;
        }
    }

$product1 = new product ( "cani", "https://img.mytheresa.com/1094/1236/66/jpeg/catalog/product/bc/P00705332.jpg", "guinzaglio", "10");

// echo $product1 -> category;
// echo $product1 -> getImmage();
// echo '<img src="' . $product1 -> immage . '">';
?>