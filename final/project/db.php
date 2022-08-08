<?php
session_start();

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "solo";
$name;


foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

function dd($value) //to be deleted
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}
