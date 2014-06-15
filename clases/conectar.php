<?php
class Conectar{
    public static function conexion(){
    $con = mysql_connect("localhost","root","root");
mysql_select_db("aprendizajephp");
mysql_query("SET NAMES 'utf-8'");
return $con;
                             }
}

?>

