<?php

require_once 'config/autoload.php';
$router = new Router();
$router->handleRequest($_GET);

?>