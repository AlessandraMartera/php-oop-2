<?php 

trait codeProduct {

    private $code;


    public function getCode() {

        return $this -> code;
    }
    public function setCode($code) {

        if (strlen($code) < 6) {

            throw new Exception("code can't be 6 char min");
        }

        $this -> code = $code;
    }
}

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
       
        use codeProduct;

        private $immage;
        private $title;
        private $price;
        private Category $category;


        public function __construct($code,
             $immage, $title, $price, Category $category){

            $this -> setCode($code);
            $this -> setImmage($immage);
            $this -> setTitle($title);
            $this -> setPrice($price);
            $this ->  setCategory($category);
        }
      
        public function getCategory(){
            return $this -> category -> getName();
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


    class Food extends Product{
        private $monthdeadline;
        private $yeardeadline;
        private $weight;

        public function __construct(
            $code,
            $immage, $title, $price, Category $category,
            $monthdeadline, $yeardeadline, $weight){

            parent :: __construct($code,
            $immage, $title, $price, $category);

            $this -> setMonthdeadline($monthdeadline);
            $this -> setYeardeadline($yeardeadline);
            $this -> setWeight($weight);
        }

        public function getMonthdeadline(){
            return $this -> monthdeadline;
        }

        public function setMonthdeadline($monthdeadline){
            $this -> monthdeadline = $monthdeadline;
        }

        public function getYeardeadline(){
            return $this -> yeardeadline;
        }
        public function setYeardeadline($yeardeadline){
            $this -> yeardeadline = $yeardeadline;
        }

        public function getWeight(){
            return $this -> weight;
        }
        public function setWeight($weight){
            $this -> weight = $weight;
        }
        
    }

    class toy extends product{
        private $color;
        private $type;

        public function __construct(
            $code,
            $immage, $title, $price, Category $category,
            $color, $type){

            parent :: __construct( $code,
            $immage, $title, $price, $category);

            $this -> setColor($color);
            $this -> setType($type);
        }

        public function getcolor(){
            return $this -> color;
        }

        public function setcolor($color){
            $this -> color = $color;
        }

        public function getType(){
            return $this -> type;
        }

        public function setType($type){
            $this -> type = $type;
        }
    }


$category1 = new Category ("Dog");
$category2 = new Category ( "Cat" );

$foodProducts = [
    new Food("578254","https://www.carrefour.it/on/demandware.static/-/Sites-carrefour-master-catalog-IT/default/dwdf157044/large/MYDOGLSMINIADULTMANZORISO-7613034146823-1.png", "ONE croccantini", 10, $category1, "06", "2025", "50"),
    new Food("231563","https://www.lasorgente.net/597408-large_default/croccantini-gatto-ultima-sterilizzati-gr400-pollo.jpg", "ultima croccantini", 15, $category2, "10", "2027", "20")
  
];



try {

    $toyProducts = [
        new Toy("01","https://shop-cdn-m.mediazs.com/bilder/spiky/ball/large/in/tpr/6/800/62906_PLA_TPR_Spiky_Ball_large_12_FG__53_6.jpg", "pallina di gomma", 14, $category1, "verde", "pallina" ),
        new Toy("342364","https://static.zoomalia.com/prod_img/29813/la_575ffeabd223de0d4eacb9a3e6e53e5448d1437484472.jpg","pesce canvas", 22, $category2, "marroncino", "pesciolino di stoffa" )
    ];

} catch (Exception $e) {
    echo "Error: " .  $e -> getMessage();
}

    
?>