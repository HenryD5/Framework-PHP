<?php

//Clase controlador principal
//Se encargara de cargar los modelos y vistas

class Controlador{
    //cargar modelo
    public function modelo($modelo){
      //cargo
      require_once '../app/models/' . $modelo . '.php';
      //instancear el modelo
      return new $modelo();
    }

    //cargar vista
    public function vista($vista, $datos = []){
        //chequear si el archivo vista existe
        if(file_exists('../app/views/' . $vista . '.php')){
            require_once '../app/views/' . $vista . '.php';
        } else{
            //si el archivo de la vista no existe 
            die('La vista no existe');
        }
    
      }

}

