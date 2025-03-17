<?php

require_once './db.php';

echo "<h2>Lista di Film</h2>";

foreach ($movies as $movie) {
    echo "<div class='movie-card'>";
    echo $movie->getMovieDescription() . "<br>";
    echo $movie->getGenreDetails() . "<br>";
    echo "<strong>Rating:</strong> {$movie->getRating()}";
    echo "</div><br>";
}
?>
