<?php 

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

// L'e-commerce vende prodotti per animali
// I prodotti sono categorizzati, le categorie sono Cani o Gatti
class Category {
    private $name;
   
 
    public function __construct($name){
        $this -> setName($name); 
        // $this -> discount = $discount;
    }

    public function getName(){
        return $this -> $name;
    }
    public function setName($name){
        $this -> name = $name;
    }
    // public function getDiscount(){
    //     return $this -> $discount;
    // }

    
 }
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    
class Product {
       
        private $immage;
        private $title;
        private $price;

        public function __construct($name, $immage, $title, $price ){

            parent :: __construct($name);
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



$category1 = new Category("dog");
$product1 = new Product("dog","https://img.mytheresa.com/1094/1236/66/jpeg/catalog/product/bc/P00705332.jpg", "guinzaglio", 10);


?>