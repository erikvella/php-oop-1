<?php

class SerieTv extends Production{

  use annoPubblicazione;

  // public $published_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct( string $_title , string $_genere , array $_attori ,  Media $_imgName = null , int $_published_year , int $_aired_to_year , int $_number_of_episodes , int $_number_of_seasons){

    $this->published_year = $_published_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;

    parent::__construct($_title , $_genere , $_attori , $_imgName);
    
  }
};