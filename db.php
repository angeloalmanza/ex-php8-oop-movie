<?php

require_once './Models/Genre.php';
require_once './Models/Movie.php';

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

?>