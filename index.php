<?php

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo 'X: ' . getenv('X');
echo 'Host: ' . getenv('HOST');

?>
