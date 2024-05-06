<?php

class User {
    private  $id;
    private  $username;
    public function __construct(?int $id, ?string $username){
        $this->id = $id;
        $this->username = $username;
    }
    public function __toString()
    {
        if (!$this->id || !$this->username) {
            throw  new Exception('username and/or id are not set');
        }
        return "$this->id , $this->username";
    }
}

$user1 = new User(1, 'zizoujab');
var_dump((string)$user1);
$user2 = new User(null, null);
var_dump((string)$user2);
