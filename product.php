<?php

    class Product {
        public $name;
        public $price;
        public $discount;

        public function setName ($value){
            return $this->name = $value;
        }
        public function setPrice ($value){
            return $this->price = $value;
        }
        public function setDiscount ($value){
            return $this->discount = $value;
        }
        
        public function getName(){
            return $this->name;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getDiscount(){
            return $this->discount;
        }
    }

?>