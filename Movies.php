<?php

class Movies {
    public string $title;
    public string $originalTitle;
    public string $country;
    public int $year;
    public string $dubbedLanguage;
    public string $originalLanguage;
    public string $director;
    public string $genre;
    public int $ranking;
    // public string $officialLogo;

    //costruttore
    public function __construct($titolo, $titolOriginale, $paese, $anno, $linguaDoppiaggio, $linguaOriginale, $regista, $genere, $voto)
    {
        $this->title = $titolo;
        $this->originalTitle = $titolOriginale;
        $this->country = $paese;
        $this->year = $anno;
        $this->dubbedLanguage = $linguaDoppiaggio;
        $this->originalLanguage = $linguaOriginale;
        $this->director = $regista;
        $this->genre = $genere;
        $this->ranking = $voto;
    }
};