<?php

class User
{
    private ?\Datetime $birthday = null;
    private ?int $gender = null;
    private string $email;
    private string $phone;
    private string $aboutme;
    private string $experience;
    private string $skills;
    private string $city;


    public function __construct(
        private string $name,
    )
    {

    }


    public function getAboutme(): string
    {
        return $this->aboutme;
    }


    public function setAboutme(string $aboutme): void
    {
        $this->aboutme = $aboutme;
    }


    public function getGender(): ?int
    {
        return $this->gender;
    }


    public function setGender(?int $gender): void
    {
        $this->gender = $gender;
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


    public function getExperience(): string
    {
        return $this->experience;
    }


    public function setExperience(string $experience): void
    {
        $this->experience = $experience;
    }


    public function getSkills(): string
    {
        return $this->skills;
    }


    public function setSkills(string $skills): void
    {
        $this->skills = $skills;
    }


    public function getCity(): string
    {
        return $this->city;
    }


    public function setCity(string $city): void
    {
        $this->city = $city;
    }

}

