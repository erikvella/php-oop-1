<?php

class Production {
  public $title;
  public $genere;
  public $attori;
  public $image;

  public function __construct (string $title , string $genere , array $attori ,  Media $_imgName = null){
    $this->title = $_title;
    $this->genere = $_genere;
    $this->attori = $_attori;
    $this->image = $_imgName;
  }

  public function setImage(Media $_imgName){
    $this->image = $_imgName;
  }
}