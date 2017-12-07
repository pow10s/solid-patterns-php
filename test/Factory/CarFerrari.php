<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 17:28
 */

class CarFerrari implements VehicleInterface
{
    private $color;

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}