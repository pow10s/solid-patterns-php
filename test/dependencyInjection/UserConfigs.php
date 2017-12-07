<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 16:53
 */

class UserConfigs
{
    private $name;

    private $surname;

    private $age;

    private $sex;

    public function __construct(string $name, string $surname, int $age, string $sex)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

}