<?php

require_once "data/Person.php";

$person = new Person('David', '11');
echo Person::APP_VERSION;
echo $person2->getAuthor();