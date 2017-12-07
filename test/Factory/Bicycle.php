<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 17:29
 */

class Bicycle implements VehicleInterface
{
    private $color;

    public function setColor(string $color)
    {
        $this->color = $color;
    }
}