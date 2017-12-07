<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 17:22
 */

abstract class Factory
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle(string $type) :VehicleInterface;

    public function create(string $type): VehicleInterface
    {
        $object = $this->createVehicle($type);
        $object->setColor('blue');

        return $object;
    }
}