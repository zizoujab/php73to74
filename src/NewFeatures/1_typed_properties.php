<?php
declare(strict_types=1);
class User {
    public  ?int $id = null ;
    public string $username;
}

$user = new User();
var_dump($user->id); // -> will give Fatal error
$user->id = 1;
$user->username= 'zizoujab';
$user->username = 1;
var_dump($user);