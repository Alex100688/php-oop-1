<?php 
    class Movie {
        public $title;
        public $description;
        public $genre;
        private $rating = 0;

        public function __construct($_title, $_description, $_genre)
        {   $this -> title = $_title;
            $this -> description = $_description;
            $this -> genre = $_genre;
        }
    }