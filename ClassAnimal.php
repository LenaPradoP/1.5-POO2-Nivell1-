<?php
declare(strict_types = 1);

abstract class Animal {

    protected $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract function makeSound();

}

 ?>