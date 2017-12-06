<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 06.12.17
 * Time: 19:11
 */

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }

}