<?php

require_once __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\ArrayLoader;


$loader = new ArrayLoader([
    'template' => 'Hello {{ name }}!',
]);

$twig = new Environment($loader);

echo $twig->render('template', ['name' => 'World']);

