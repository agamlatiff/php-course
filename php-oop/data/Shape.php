<?php

namespace Data;

class Shape {
  public function getCorner() {
    return 10;
  }
}

class Retangle extends Shape {
  public function getCorner() {
    return 4;
  }
  
  public function getCorner2() {
    return parent::getCorner();
  }
}


