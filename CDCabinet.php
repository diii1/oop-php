<?php
    include_once('product.php');

    class CDCabinet extends Product{
        private $capacity;
        private $model;

        public function setCapacity($value){
            return $this->capacity = $value;
        }
        public function setModel($value){
            return $this->model = $value;
        }

        public function getCapacity(){
            return $this->capacity;
        }
        public function getModel(){
            return $this->model;
        }
    }

?>