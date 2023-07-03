<?php 

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

// L'e-commerce vende prodotti per animali
// I prodotti sono categorizzati, le categorie sono Cani o Gatti
class Category {
    private $name;
   
    public function __construct($name){
        $this -> setName($name); 
    }

    public function getName(){
        return $this -> name;
    }
    public function setName($name){
        $this -> name = $name;
    }
   
    
 }
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    
class Product{
       
       
        private $immage;
        private $title;
        private $price;
        private Category $category;
        public function __construct($immage, $title, $price, Category $category){

            $this -> setImmage($immage);
            $this -> setTitle($title);
            $this -> setPrice($price);
            $this -> setCategory($category);
        }
      
        public function getCategory(){
            return $this -> category;
        }

        public function setCategory($category){
            $this -> category = $category;
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


    // class Food extends Product{
    //     private $monthdeadline;
    //     private $yeardeadline;
    //     private $weight;

    //     public function __construct(
    //         $name, $immage, $title, $price 
    //         $monthdeadline, $yeardeadline, $weight){

    //         parent :: __construct($name, $immage, $title, $price);

    //         $this -> setMonthdeadline($monthdeadline);
    //         $this -> setYeardeadline($yeardeadline);
    //         $this -> setWeight($weight);
    //     }

    //     public function getMonthdeadline(){
    //         return $this -> monthdeadline;
    //     }

    //     public function setMonthdeadline($monthdeadline){
    //         $this -> monthdeadline = $monthdeadline;
    //     }

    //     public function getYeardeadline(){
    //         return $this -> yeardeadline;
    //     }
    //     public function setYeardeadline($yeardeadline){
    //         $this -> yeardeadline = $yeardeadline;
    //     }

    //     public function getWeight(){
    //         return $this -> weight;
    //     }
    //     public function setWeight($weight){
    //         $this -> weight = $weight;
    //     }
        
    // }


$category1 = new Category ("Dog");
$product1 = new Product("https://img.mytheresa.com/1094/1236/66/jpeg/catalog/product/bc/P00705332.jpg", "croccantini", 10, $category1);


?>