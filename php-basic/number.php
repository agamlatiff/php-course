<?php

echo "Decimal :";
var_dump(12345);

echo "Octal: ";
var_dump(value: 012345);

echo "Hexadecimal: ";
var_dump(0x1A);


echo "Binary: ";
var_dump(0b1111111);

echo "Underscor in number: ";
var_dump(123_123123_123);

echo "Floating point: ";
var_dump(1.234);

echo "Floating point dengan E notation : (1.7 x 1000) ";
var_dump(1.7e3);

echo "Floating point dengan E notation : (1.7 x 0.001) ";
var_dump(1.7e-3);

echo 'Underscore in float : ';
var_dump(123_123.123);


echo 'Integer overflow to float: ';
var_dump(12354235123623523452342);