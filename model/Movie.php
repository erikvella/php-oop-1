<?php 

class Movie extends Production{
 
 public $running_time ;
 public $published_year;

 public function __construct(int $_running_time , int $_published_year , string $title , string $genere , array $attori ,  Media $_imgName = null){
  
  $this->running_time= $_running_time;
  $this->published_year = $_published_year;

  parent::__construct($_title , $_genere , $_attori , $_imgName);
  
 }


 
 
 
}