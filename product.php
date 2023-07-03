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
   
    
 }
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    
class Product extends Category {
       
        private $immage;
        private $title;
        private $price;

        public function __construct(
            $name, 
            $immage, $title, $price 
            ){

            parent :: __construct($name);

            $this -> setImmage($immage);
            $this -> setTitle($title);
            $this -> setPrice($price);
        }
      
        
        public function getImmage(){
            return $this -> immage;
        }

        public function setImmage($immage){
            $this -> immage = $immage;
        }

        public function getTitle(){
            return $this -> title;
        }
        public function setTitle($title){
            $this -> title = $title;
        }

        public function getPrice(){
            return $this -> price;
        }
        public function setPrice($price){
            $this -> price = $price;
        }
        
    }



$product1 = new Product("Dog","https://img.mytheresa.com/1094/1236/66/jpeg/catalog/product/bc/P00705332.jpg", "guinzaglio", 10);


?>