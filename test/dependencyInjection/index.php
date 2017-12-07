<?php
require_once('UserConfigs.php');
require_once('UserProfile.php');

$configs = new UserConfigs('dsadas', 'dsadasd', '19','man');
$profile = new UserProfile($configs);
$profile->printUserInfo();