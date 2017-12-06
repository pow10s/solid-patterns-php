<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 06.12.17
 * Time: 19:11
 */
require_once ('AutomobileFactory.php');
require_once ('Automobile.php');

$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"
