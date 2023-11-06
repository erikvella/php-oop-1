<?php 

class Movie{
 public $title ;
 public $genere ;
 public $durata ;
 public $attori ;
 public $image ; 

 public function __construct(string $_title ,string $_genere , float $_durata , array $_attori , Media $_imgName = null){
  $this->title = $_title;
  $this->genere = $_genere;
  $this->durata = $_durata;
  $this->attori = $_attori;
  $this->image = $_imgName;
  
 }

 public function setImage(Media $_imgName){
   $this->image = $_imgName;
 }
 
}