<?php
 require_once("../../conexion/conexion.php");

 class AsignarTurno extends Conexion{
     
    function __construct(){
        $this->db = parent::__construct();
    }

    function guardar($nombre_cliente, $apellidos_cliente, $tipo_cc, $cedula, $fecha_hora, $tipo_turno) {
        try {
            $db = $this->db; // Acceder a la conexión a la base de datos

            $fecha_hora = date('Y-m-d H:i:s');
         
            $sql = "INSERT INTO turnos (nombre_cliente, apellidos_cliente, tipo_cc, cedula, fecha, tipo_turno) 
                    VALUES (:nombre_cliente, :apellidos_cliente,:tipo_cc, :cedula, :fecha_hora, :tipo_turno)";

            $stmt = $db->prepare($sql);

            $stmt->execute([
                ':nombre_cliente' => $nombre_cliente,
                ':apellidos_cliente' => $apellidos_cliente,
                ':tipo_cc' => $tipo_cc,
                ':cedula' => $cedula,
                ':fecha_hora' => $fecha_hora,
                ':tipo_turno' => $tipo_turno,           
            ]);

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    function asignarTurno ($id_turno, $id_empleado,$comentario){
         try {
            $db = $this->db; // Acceder a la conexión a la base de datos

         
            $sql = "INSERT INTO  turno_empleados(id_turno, id_empleado, comentario)  VALUES (:id_turno,:id_empleado,:comentario)";

            $stmt = $db->prepare($sql);

            $stmt->execute([
                ':id_turno' => $id_turno,
                ':id_empleado' => $id_empleado,
                ':comentario' => $comentario,          
            ]);

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
 
}   

$asignar=new AsignarTurno();
$asignar->asignarTurno(4,12,"hola");


?>