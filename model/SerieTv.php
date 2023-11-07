<?php

class SerieTv extends Production{

  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(int $aired_from_year , int $aired_to_year , int $number_of_episodes , int $number_of_seasons, string $title , string $genere , array $attori ,  Media $_imgName = null){

    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;

    parent::__construct($_title , $_genere , $_attori , $_imgName);
    
  }
}