<?php

class Paginas extends Controlador{
    public function __construct(){
        }
    public function index(){
        
        $datos =[
            'titulo' => 'Bienvenidos a MVC HenryD5',
            
        ];
       $this->vista('paginas/inicio',$datos);
    }
    
}
