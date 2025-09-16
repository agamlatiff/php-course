<?php

namespace Helper;

class MathHelper {
  static public string $name = 'AGAM LATIFULLAH';
  
  static public function sum (int ...$data):int {
    $res = 0;
    foreach ($data as $key => $value) {
      $res += $value;
    }
    
    return $res;
  }
}