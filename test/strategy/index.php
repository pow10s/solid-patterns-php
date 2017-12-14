<?php

include('AbstractCharacter.php');
include('Sword.php');
include('King.php');

$king = new King();

$king->setWeapon(new Sword());
echo $king->talk() . '->' . $king->attack() . 'dmg';