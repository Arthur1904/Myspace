<?php

class Candidatslist
{
    private int $salary;
    private string $typeofwork;


    public function __construct(string $language)
    {
        $this->language = $language;
    }


    public function getSalary(): int
    {
        return $this->salary;
    }


    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }


    public function getTypeofwork(): string
    {
        return $this->typeofwork;
    }


    public function setTypeofwork(string $typeofwork): void
    {
        $this->typeofwork = $typeofwork;
    }


}
