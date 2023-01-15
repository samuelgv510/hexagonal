<?php

class ClaseA
{
    public function getInformationItems()
    {
        return ["itmes"];
    }
}

class ClaseC
{
    public function getInformationOfClasseC()
    {
        return ["c"];
    }
}

class ClaseB
{
    private $claseA;
    private $claseC;

    public function __construct(ClaseA $claseA,ClaseC $claseC)
    {
        $this->claseA=$claseA;
        $this->claseC=$claseC;
    }

    public function getInformationOfClaseA(): array
    {
        return $this->claseA->getInformationItems();
    }
    public function getInformationOfClaseC(): array
    {
        return $this->claseC->getInformationOfClasseC();
    }
}