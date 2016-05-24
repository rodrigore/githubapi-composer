<?php

require 'vendor/autoload.php';

use App\Request;
use App\User;

// load .env
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// api request
$request = new Request();
$user = $request->getUser('rodrigore');

$firstUser = new User(json_decode($user));
echo $firstUser->getUsername();





