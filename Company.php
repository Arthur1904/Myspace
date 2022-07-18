<?php

class Company
{
    private string $email;
    private string $phone;
    private string $aboutcompany;
    private string $position;

    public function __construct(
        private string $name,
    )
    {

    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getAboutcompany(): string
    {
        return $this->aboutcompany;
    }

    public function setAboutcompany(string $aboutcompany): void
    {
        $this->aboutcompany = $aboutcompany;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

}
