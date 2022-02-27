<?php
require("conexion.php");

    //consulta mysql para insertar los datos del empleados
    $query = "SELECT * FROM asistencia_docente where dni='".$_GET['value']."' and fechaMarcacion=CURDATE();";
    echo $query;
// enviamos la consulta a MySQL
    $queEmp = mysqli_query($con,$query);
    $total = $queEmp->num_rows;
  
    echo $_GET['value'];
    if($total>0){
        $update = "UPDATE asistencia_docente set HoraFin= DATE_FORMAT(NOW( ), '%H:%i:%S' ) WHERE dni='".$_GET['value']."' and fechaMarcacion='".date('Y-m-d')."'";
        mysqli_query($con, $update);
        echo "$update): ".$update;
        if($update)
        {            
            echo "Asistencia Actualizado Correctamente";
        }
        else
        {
            echo "No se pudieron actualizar los datos";
        }
        ///header("Location: index.php");
    } else{
      echo  $insertar = "INSERT INTO asistencia_docente(dni,fechaMarcacion,HoraInicio) VALUES(TRIM('".$_GET['value']."'),CURDATE(),DATE_FORMAT(NOW( ), '%H:%i:%S' ))";
        mysqli_query($con, $insertar);
        if($insertar)
        {            
            echo "Asistencia Guardado Correctamente";
        }
        else
        {
            echo "No se pudieron guardar los datos";
        }
        ///header("Location: index.php");
    }
    
?>