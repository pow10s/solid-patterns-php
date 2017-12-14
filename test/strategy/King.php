<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 14.12.17
 * Time: 19:35
 */

class King extends AbstractCharacter
{
    public function __construct()
    {
        $this->weapon = new Sword();
    }

    public function talk()
    {
        echo "I`m the KING!!!!";
    }
}