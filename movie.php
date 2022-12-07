<?php

class Movie
{
    public $title;
    public $year;
    public $duration; // Mins
    public $genre;
    public $director;
    public $ageRange;
    private $shortLong;

    function __construct($title, $year, $duration, $genre, $director, $ageRange, $shortLong)
    {
        $this->title = $title;
        $this->year = $year;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->director = $director;
        $this->ageRange = $ageRange;
        $this->shortLong = $shortLong;
    }


    public function setDurata($duration)
    {
        if ($duration > 120) {
            return $this->shortLong = "Lunga durata " . "(" . $duration . " mins)";
        } else {
            return $this->shortLong = "Breve durata " . "(" . $duration . " mins)";
        }
    }

    public function print()
    {
        return " Title: $this->title <br> Year: $this->year <br> Duration: $this->duration <br> Genre: $this->genre <br> Director $this->director <br> Age: $this->ageRange <br> $this->shortLong ";
    }
}
