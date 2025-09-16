<?php

class Student 
{
  public string $id;
  public string $name;
  public string $value;
  private string $sample;
  
  public function getSample (string $sample) : string {
    return $this->sample = $sample;
  }
}