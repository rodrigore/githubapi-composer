<?php

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');

$twig = new Twig_Environment($loader, []);

echo $twig->render('index.html', [
    'name' => 'RODRI',
    'score' => '111',
]);
