<?php
class Genre {
    //variabili d'istanza
    public $name;
    public $description;

    //costruttore
    public function __construct($_name, $_description) {
        $this->name = $_name;
        $this->description = $_description;
    }
}

class Movie {
    //variabili d'istanza
    public $title;
    public $director;
    public $year;
    public $genre;

    //costruttore
    public function __construct($_title, $_director, $_year, Genre $_genre) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this-> genre = $_genre;
    }

    //metodo
    public function getMovieDescription() {
        return "Il film {$this->title} è stato diretto da {$this->director} ed è stato publicato nel {$this->year}";
    }

    public function getGenreDetails() {
        return "Genere: {$this->genre->name} - {$this->genre->description}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Lista di film</h1>

    <?php
    $scifi = new Genre("Fantascienza", "Film basati su scienza e tecnologia futuristica.");
    $action = new Genre("Azione", "Film con molte scene dinamiche e combattimenti.");

    $movies = [
        new Movie("Inception", "Christopher Nolan", 2010, $scifi),
        new Movie("Interstellar", "Christopher Nolan", 2014, $scifi),
        new Movie("The Dark Knight", "Christopher Nolan", 2008, $action)
    ];

    foreach ($movies as $movie) {
        echo "<div>";
        echo $movie->getMovieDescription() . "<br>";
        echo $movie->getGenreDetails();
        echo "</div><br>";
    }
    ?>
</body>
</html>