<?php

require '../src/calculator.php';

use CalculadoraPHP\calculator;

/**
 * Get the number of number1
 */
$number1 = (float) $_GET['number1'];

/**
 * Get th number of number2
 */
$number2 = (float) $_GET['number2'];

/**
 * Get the number of the operation
 */
$operation = (integer) $_GET['operation'];


$calc = new calculator();

$calc->setNumber1($number1);
$calc->setNumber2($number2);

if ($operation === 1) {
  $message = 'The sum between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->Sum();
} else if ($operation === 2) {
  $message = 'The subtraction between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->Rest();
} else if ($operation === 3) {
  $message = 'The multiplication between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->Mult();
} else if ($operation === 4) {
  $message = 'The splitting between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->Div();
} else if ($operation === 5) {
  $message = 'The module between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->mod();
} else if ($operation === 6) {
  $message = 'The logarithm between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->log(); 
} else if ($operation === 7) {
  $message = 'The pow between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->pow();  
} else if ($operation === 8) {
  $message = 'The pow between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->pow(); 
} else if ($operation === 9) {
  $message = 'Error: The division between zero is mathematically impossible ';
} else if ($operation === 10) {
  $message = 'The square root of the ' . $number1 . ' and ' . $number2 . ' is ' . $calc->square();
} else if ($operation === 11) {
  $message = 'The root between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->squarex();
} else {
  $message = 'Error: No operation selectd';
}
echo $message;
/*echo 'Val 1: ' . $number1;
echo '<br>';
echo 'Val 2: ' . $number2;
echo '<br>';
echo 'operation: ' . $operation;*/