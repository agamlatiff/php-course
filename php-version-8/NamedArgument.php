<?php

function sayHello(string $first, string $middle = "", string $last) {
  echo $first . $middle . $last;
}

sayHello(last: "Ganteng", first: "Agam ", middle: "Latifullah ");

// sayHello(first:"Agam", last:"Latifullah" ,middle: "");
