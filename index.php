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

    
}