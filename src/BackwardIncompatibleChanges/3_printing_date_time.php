<?php
// Calling var_dump() or similar on a DateTime or DateTimeImmutable instance
// will no longer leave behind accessible properties on the object.
$date = new DateTime("2024-01-08");
var_dump($date->date);

var_dump($date);

var_dump($date->date);