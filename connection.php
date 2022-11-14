<?php 
function Conectate(){
    $Connection = new MySQLi("localhost","root","nessa2609","ofertas");
    if ($Connection -> connect_error) {
        echo "Problemas en la conexión".$Connection -> connect_error;
    }else{
        return $Connection;
    }
}  
?>