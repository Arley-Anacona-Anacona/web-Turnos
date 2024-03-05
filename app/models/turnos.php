<?php
 require_once("../../conexion/conexion.php");

class Turno extends Conexion{
   function __construct(){
        $this->db= parent::__construct();
   }

   function obtenerTurnos(): array {
            
        
    // Preparación de la consulta SQL
    $consulta= $this->db->prepare("SELECT * FROM turnos ");

    // Ejecución de la consulta
    $consulta->execute();

    // Obtención de los datos en un array
    $turnos = [];
    while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $turnos[]= $fila;
    }

    // Cierre de la conexión
    $db = null;

    // Retorno del array con los datos
    return $turnos;
}
   
    
     



}





?>