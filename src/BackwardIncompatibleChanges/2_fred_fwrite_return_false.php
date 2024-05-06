<?php
// fread() and fwrite() will now return false if the operation failed.
// Previously an empty string or 0 was returned
error_reporting(E_ALL);

$file = fopen(__DIR__ .'/../../docker-compose.yaml', "r");

$return = fwrite($file, 'test');
var_dump($return);