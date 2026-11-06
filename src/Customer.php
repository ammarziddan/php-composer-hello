<?php

namespace AmmarZiddan\Belajar;

class Customer
{
    public function __construct(public string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "Hello $name! My name is {$this->name}";
    }
}
