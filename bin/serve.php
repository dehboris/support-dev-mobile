<?php

$host = 'localhost';
$port = 7000;

function getRootPath()
{
    return dirname(getcwd(),1);
}
var_dump($_SERVER);
die();
passthru("php -S {$host}:{$port} -t " . escapeshellarg(getRootPath()));