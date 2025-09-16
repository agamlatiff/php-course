<?php

class Student
{
  public string $id;
  public string $name;
  public string $value;
  public string $sample;

  public function getSample(string $sample): string
  {
    return $this->sample = $sample;
  }

  // public function __clone()
  // {
  //   unset($this->id);
  // }

  //   public function __tostring() :string {
//     return "Student id:$this->id, name:$this->name, value:$this->value";
//   }

  // public function __invoke(...$arguments)
  // {
  //   $join = join(", ", $arguments);
  //   echo "Invoke student with arguments $join";
  // }

  public function __debugInfo()
  {
    return [
      "id" => $this->id,
      "name" => $this->name,
      "value" => $this->value,
      "sample" => $this->sample,
      "version" => 100,
    ];
  }

}
