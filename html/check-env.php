<?php

require_once realpath(__DIR__ . '/vendor/autoload.php');

// Looking for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Retrieve env variable
$userName = $_ENV['USER_NAME'];

echo $userName; //jfBiswajit
echo "All else shows, env is yet ";

