<?php

class Data implements IteratorAggregate
{
  var string $first = 'agam';
  var string $seconds = 'latifullah';

  public function getIterator(): Traversable
  {
    $array = [
      "first" => $this->first,
      "second" => $this->seconds,
      "kennedy" => 'testing',
    ];

    return new ArrayIterator($array);

  }
}
;

$data = new Data();

foreach ($data as $key => $value) {
  echo "$key = $value" . PHP_EOL;
}