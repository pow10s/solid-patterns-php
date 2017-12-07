<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 16:57
 */

class UserProfile
{
    private $configs;

    public function __construct(UserConfigs $configs)
    {
        $this->configs = $configs;
    }

    public function printUserInfo(): string
    {
        return printf(
            '%s:%s:%s:%d',
            $this->configs->getName(),
            $this->configs->getSurname(),
            $this->configs->getSex(),
            $this->configs->getAge()
        );
    }
}