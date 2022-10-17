<?php

//Referencia a un error que no existe, mostrara un error por pantalla
//siempre y cuando tengas los errores activados en PHP. 
//Para configurar esto tenemos el fichero de condiguracion php.ini

$greeting = "Hello test2 showing non existing variable";
var_dump($greeting);
var_dump($non_existing_variable);
