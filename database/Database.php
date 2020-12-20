<?php

include(__DIR__ . '/../config.inc');

$pdo = new PDO(
    "mysql:host={$server};dbname={$database}",
    $user,
    $password
);
