<?php

require_once ("conectar.php");

class Envioform{
    private $est;
    public function __contruct(){
        $this->est=  array();
        
    }
    public function get_envioform(){
        $sql = "select * from ";
        $res = mysql_query ($sql,Conectar::conexion());
        
         while ($reg = mysql_fetch_assoc ($res)){
             $this->est[]= $reg;
             
         }
        return $this->est;
    }
            
}
?>
