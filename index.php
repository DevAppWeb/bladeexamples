<?php

require "vendor/autoload.php";

use eftec\bladeone\BladeOne;

$views = __DIR__ . '\views'; // it uses the folder /views to read the templates
$cache = __DIR__ . '\cache'; // it uses the folder /cache to compile the result. 

$blade=new BladeOne($views, $cache);
$blade->setBaseURL("http://localhost:8000");
$blade->pipeEnable=true;

$colores = array('azul', 'verde', 'amarillo', 'rojo');

 echo $blade->run('child', ['input' => "valor de entrada", 'colores' => $colores]);

