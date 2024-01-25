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
        echo "Title of the movie: {$this->title}\n";
        echo "Genre of the movie: {$this->genre}\n";
        echo "Release Year of the movie: {$this->releaseYear}\n";
    }
}

$movie1 = new Movie("The Godfather", "Crime/Drama", 1972);
$movie2 = new Movie("The Dark Knight", "Action/Crime/Drama", 2008);