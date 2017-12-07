<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 17:30
 */

class ItalianFactory extends Factory
{
    public function createVehicle(string $type): VehicleInterface
    {
        switch ($type){
            case parent::CHEAP:
                echo 'bicycle';
                return new Bicycle();
            break;
            case parent::FAST:
                $car = new CarFerrari();
                $car->setColor('Red');
                echo $car->getColor();
            break;
        }
    }

}