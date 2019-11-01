<?php
//cargamos librerias

require_once 'config/configurar.php';


require_once 'libraries/BDConexion.php';
require_once 'libraries/Controlador.php';
require_once 'libraries/Core.php';

//Autoload php
spl_autoload_register(function($nombreClase){
    require_once 'libraries' .$nombreClase . '.php';
});