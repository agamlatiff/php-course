<?php

class Category
{
  private string $name;
  private bool $expensive;

  public function getName(): string
  {
    return $this->name;
  }
  public function setName(string $name): void
  {
   if(trim($name) !== "") {
     $this->name = $name;
   }
  }

  public function isExpensive(): string
  {
    if ($this->expensive) {
      return "Yes";
    } else {
      return "No";
    }
  }

  public function setExpensive(bool $expensive): void
  {
    $this->expensive = $expensive;
  }


}