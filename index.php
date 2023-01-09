<?php 
    class Movie {
        public $title;
        public $description;
        public $genre;
        private $rating = 10;

        public function __construct($_title, $_description, $_genre)
        {   $this -> title = $_title;
            $this -> description = $_description;
            $this -> genre = $_genre;
        }

        public function setRating($vote){
            if($vote === 10){
                $this -> rating = "The film is very very good!";
            } else if($vote >= 6){
                $this -> rating = "The film is good";
            } else if($vote <= 5){
                $this -> rating ="The film is sufficent";
            } else{
                $this -> rating = "The film is realy ugly!!! ";
            }
        }
    }
    