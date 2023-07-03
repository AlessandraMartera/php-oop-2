<?php 
    class User {

        private $username;
        private $email;
       
        public function __construct($username, $email) {
    
            $this -> setUsername($username);
            $this -> setEmail($email);
        }

        public function getUsername() {
            return $this -> username;
        }
        public function setUsername($username) {
            $this -> username = $username;
        }

        public function getEmail() {
            return $this -> email;
        }
        public function setEmail($email) {
            $this -> email = $email;
        }
    }    