<?php
include "Stack.php";

$dataStack = new Stack(5);
$dataStack->push(1);
$dataStack->push(2);
$dataStack->push(3);
$dataStack->push(4);
$dataStack->push(5);
$dataStack->pop();
$dataStack->pop();
$dataStack->pop();
$dataStack->push(8);
$dataStack->push(9);
var_dump($dataStack->isEmpty());
$dataStack->pop();
$dataStack->pop();
$dataStack->pop();
$dataStack->pop();
var_dump($dataStack->isEmpty());