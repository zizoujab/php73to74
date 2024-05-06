<?php
$data = [];
$data['username'] ??= "zizoujab";

// equivalent to
//if (!isset($data['username'])){
//    $data['username'] = "zizoujab"
//}

var_dump($data['username']);