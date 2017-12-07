<?php

require_once ('VehicleInterface.php');
require_once ('Factory.php');
require_once ('CarFerrari.php');
require_once ('Bicycle.php');
require_once ('ItalianFactory.php');

$factory = new ItalianFactory();
$result = $factory->createVehicle(Factory::FAST);