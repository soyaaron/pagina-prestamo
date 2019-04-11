<?php

require_once 'Conection_BD.php';



class Calculadora_Model extends Conection_BD{


    //Seleccioname los porcentajes del usuario
    public function TasaInteres($identificador){
        $conection = parent::conectar();
        
        try {
            
            $query = "SELECT porcentaje FROM tasa WHERE identificador='$identificador'";
            $tasa = $conection->query($query)->fetch();
            
            return $tasa['porcentaje'];
        } catch (PDOException $e) {
            exit("ERROR:".$e->getMessage());
        }finally{
            $conection = null;
        }
    }
    
}