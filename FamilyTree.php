<?php

class Person
{
    public $name;
    public $mum;
    public $dad;

    public function __construct(string $name, person $mum = null, person $dad = null)
    {
        $this->name = $name;
        $this->mum = $mum;
        $this->dad = $dad;
    }
}

$les = new Person('Les');
$vera = new Person('Vera');
$derrick = new Person('Derrick');
$jean = new Person('Jean');
$rawson = new Person('Rawson', $vera, $les);
$helen = new Person('Helen', $jean, $derrick);
$james = new Person('James', $helen, $rawson);

var_dump($james);