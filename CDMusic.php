<?php
    include_once('product.php');

    class CDMusic extends Product{
        private $artist;
        private $genre;

        public function setArtist($value){
            return $this->artist = $value;
        }
        public function setGenre($value){
            return $this->genre = $value;
        }

        public function getArtist(){
            return $this->artist;
        }
        public function getGenre(){
            return $this->genre;
        }
    }

?>