<?php

require_once("vendor/autoload.php");

use Roger\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('35181543');

print_r($resultado);