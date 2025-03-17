<?php
trait MovieRating {
    // Proprietà
    public $rating;

    // Metodo
    public function setRating($_rating) {
        $this->rating = $_rating;
    }

    public function getRating() {
        return $this->rating;
    }
}

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
    $drama = new Genre("Drammatico", "Film che esplorano emozioni e storie profonde.");

    $movies = [
        new Movie("Inception", "Christopher Nolan", 2010, [$scifi, $action]),
        new Movie("Interstellar", "Christopher Nolan", 2014, [$scifi, $drama]),
        new Movie("The Dark Knight", "Christopher Nolan", 2008, [$action, $drama])
    ];

    // Impostiamo un rating per ogni film
    $movies[0]->setRating(8.8);
    $movies[1]->setRating(8.6);
    $movies[2]->setRating(9.0);

    foreach ($movies as $movie) {
        echo "<div>";
        echo $movie->getMovieDescription() . "<br>";
        echo $movie->getGenreDetails() . "<br>";
        echo "<strong>Rating:</strong> {$movie->getRating()}";
        echo "</div><br>";
    }
    ?>
</body>
</html>