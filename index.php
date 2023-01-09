<?php 
    class Movie {
        public $title;
        public $description;
        public $genre;
        public $rating = 0;

        public function __construct($_title, $_description, $_genre)
        {   $this -> title = $_title;
            $this -> description = $_description;
            $this -> genre = $_genre;
        }

        public function setRating($vote){
            if($vote > 8){
                $this -> rating = "The film is very very good!";
            } else if($vote >= 5){
                $this -> rating = "The film is sufficent";
            } else{
                $this -> rating ="The film is ungly";
            }
        }
        public function getRating(){
           return $this -> rating;
        }
    }


    $film = new Movie("Titolo", "Descrizione del film", "Genere del fim");
    $film -> setRating(3);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie</title>
    </head>
    <body>
        <h1><?php echo $film -> title?></h1>
        <h3><?php echo $film -> description?></h3>
        <h2><?php echo $film -> genre?></h2>
        <h2><?php echo $film -> getRating()?></h2>
    </body>
</html>