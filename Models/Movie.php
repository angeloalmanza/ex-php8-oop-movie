<?php
require_once './Traits/MovieRating.php';

class Movie {
    use MovieRating;

    //variabili d'istanza
    public $title;
    public $director;
    public $year;
    public $genres = [];

    //costruttore
    public function __construct($_title, $_director, $_year, array $_genres) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this-> genres = $_genres;
    }

    //metodo
    public function getMovieDescription() {
        return "Il film <strong>{$this->title}</strong> è stato diretto da <strong>{$this->director}</strong> ed è stato publicato nel <strong>{$this->year}</strong>";
    }

    public function getGenreDetails() {
        $genreDetails = [];
    
        foreach ($this->genres as $genre) {
            $genreDetails[] = "<strong>{$genre->name}:</strong> {$genre->description}";
        }
    
        return "<strong>Generi:</strong> " . implode(" | ", $genreDetails);
    }    
}

?>