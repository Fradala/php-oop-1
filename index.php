<?php

class Movie {
    public $title;
    public $genre;
    public $releaseYear;


    public function __construct(string $_title, string $_genre, float $_releaseYear){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->releaseYear = $_releaseYear;
    }

    public function displayMovieInfo() {
        echo "Title: {$this->title}<br>";
        echo "Genre: {$this->genre}<br>";
        echo "Release Year: {$this->releaseYear}<br>";
    }
}

$movie1 = new Movie("The Godfather", "Crime/Drama", 1972);
$movie2 = new Movie("The Dark Knight", "Action/Crime/Drama", 2008);


echo "Informazioni su Movie 1: <br>";
$movie1->displayMovieInfo();
echo "\n";


echo "Informazioni su Movie 2: <br> ";
$movie2->displayMovieInfo();
