<?php

namespace Data;

interface HasBrand {
  function getBrands() : void;
}

interface IsMaintence {
  function isMaintence() : bool;
}

interface Car extends HasBrand, IsMaintence {
  function drive(): void;
  function run(): void; 
}

class Avanza implements Car{
  public function drive(): void {
    echo "Avanza drive";
  } 
  
  public function run(): void {
    echo "Avanza run";
  }
  
  public function getBrands(): void {
    echo "Get Brands" . PHP_EOL;
  }
  
  public function isMaintence() : bool {
    if( $this->isMaintence() ) {
      return true;
    }
    
    return false;
  }
};