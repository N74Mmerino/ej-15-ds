<?php

class PropiedadInmobiliaria {


    public function __construct($D,$MC,$C,$V){

        
        $this->Direccion=$D;
        $this->MetrosCuadrados=$MC;
        $this->Ciudad=$C;
        $this->Valor=$V;
    }


    public function MostrarDatos(){
        
        
        echo 'Direccion : '. $this->Direccion . '<br>';
        echo 'Metros : ' . $this->MetrosCuadrados . '<br>';
        echo 'Ciudad : ' . $this->Ciudad . '<br>';
        echo 'Valor : ' . $this->Valor . '<br>';


        

    }


}