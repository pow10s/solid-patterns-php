<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 14.12.17
 * Time: 19:35
 */
include "WeaponBehavior.php";
class Sword implements WeaponBehavior
{
    public function damage()
    {
        return rand(10, 100);
    }

}