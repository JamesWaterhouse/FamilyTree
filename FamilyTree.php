<?php

require './Person.php';
require './findPersonDepth.php';
require './findPersonBreadth.php';

$nellie = new Person('Nellie');
$george = new Person('George');
$edith = new Person('Edith');
$charles = new Person('Charles');
$les = new Person('Les');
$vera = new Person('Vera');
$derrick = new Person('Derrick', $nellie, $george);
$jean = new Person('Jean', $edith, $charles);
$rawson = new Person('Rawson', $vera, $les);
$helen = new Person('Helen', $jean, $derrick);
$james = new Person('James', $helen, $rawson);

$depth = findPersonDepth("Vera", $james);
echo '<br><br>';
$breadth = findPersonBreadth("Nellie", $james);

echo '<br><br>';
var_dump($depth);
echo '<br><br>';
var_dump($breadth);