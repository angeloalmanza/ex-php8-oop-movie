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

?>