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

?>