<?php

class Production {
  public $title;
  public $genere;
  public $attori;
  public $image;

  public function __construct (string $_title , string $_genere , array $_attori ,  Media $_imgName = null){
    $this->title = $_title;
    $this->genere = $_genere;
    if(empty($_attori)){
      throw new Exception('Ci deve essere almeno un attore!');
    }else{
      
      $this->attori = $_attori;

    }
    $this->image = $_imgName;
  }

  public function setImage(Media $_imgName){
    $this->image = $_imgName;
  }
}