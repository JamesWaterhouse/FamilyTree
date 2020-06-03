<?php

class Person
{
    public $name;
    public $mum;
    public $dad;

    public function __construct(String $name, Person $mum = null, Person $dad = null)
    {
        $this->name = $name;
        $this->mum = $mum;
        $this->dad = $dad;
    }
}