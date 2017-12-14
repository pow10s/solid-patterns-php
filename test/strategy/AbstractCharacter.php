<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 14.12.17
 * Time: 19:32
 */

abstract class AbstractCharacter
{
    abstract public function talk();

    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function attack()
    {
        if (isset($this->weapon)) {
            return $this->weapon->damage();
        }
        else {
            echo 'Error';
        }
    }
}