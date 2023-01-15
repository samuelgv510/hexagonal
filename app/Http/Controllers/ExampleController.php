<?php

abstract class ParentClass
{   
    abstract function getSayHello(string $person): array;
}

interface ParentInterface
{
    public function getSayBye(string $person): bool;
}

final class ChildClass extends ParentClass implements ParentInterface
{
    public function getSayHello(string $person): array
    {
        return [
            'saludo'=>'hello world '.$person
        ];
    }
    public function getSayBye(string $person): bool
    {
        return true;
    }
}