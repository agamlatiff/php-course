<?php

$matches = [];
$result = preg_match_all('/aga|latif|olo/i', 'AGAM LATIFULLAH', $matches);

var_dump($matches);

$result = preg_replace('/PINTAR|BERADAB|SOPAN/i', 'SABAR', 'DASAR LO PINTAR DAN BERADAB');
 

var_dump($result);

$result = preg_split("/[\s,-]/", 'Agam latifullah sangat ganteng');
var_dump(join(', ', $result));