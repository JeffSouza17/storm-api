<?php


class Conexao { 

    var $cr;

    function conectar(){

        $this->cr = new mysqli("localhost", "root", "usbw", "storm-db");
        if($this->cr->conect_error){
            die("erro de conexao com o banco<br/>".$this->cr->conect_error);
        }
        else{
            echo "conectado com sucesso";
        }


    }


}

?>