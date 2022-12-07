<?php

class Movie
{
    public $title;
    public $year;
    public $duration; // Mins
    public $genre;
    public $director;
    public $ageRange; // (-18 or +18)

    function __construct($title, $year, $duration, $genre, $director, $ageRange)
    {
        $this->title = $title;
        $this->year = $year;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->director = $director;
        $this->ageRange = $ageRange;
    }
}
