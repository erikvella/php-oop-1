<?php

class Media {
  public $imgName ; 
  public $type = "image" ; 

  public function __construct($_imgName) {
    $this->imgName = $_imgName;
  }
}