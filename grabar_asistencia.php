<?php
require("conexion.php");
$explode1= explode('<br>',  $_GET['value'] );
print("explode1[1]: ". $explode1[1]);
$explode2= explode('<b>', $explode1[1]);

$explode3= explode('</b>',  $explode2[1] );

    //consulta mysql para insertar los datos del empleados
    $query = "SELECT * FROM asistencia_docente where dni='".$explode3[0]."' and fechaMarcacion=CURDATE();";
  
// enviamos la consulta a MySQL
    $queEmp = mysqli_query($con,$query);
    $total = $queEmp->num_rows;
  
    if($total>0){
        $update = "UPDATE asistencia_docente set HoraFin= DATE_FORMAT(NOW( ), '%H:%i:%S' ) WHERE dni='".$explode3[0]."' and fechaMarcacion=CURDATE()";
        mysqli_query($con, $update);
        echo "$update): ".$update;
        if($update)
        {            
            echo "Asistencia Actualizado Correctamente";
            header("Refresh:0; url=index.php");
        }
        else
        {
            echo "No se pudieron actualizar los datos";
            header("Refresh:0; url=index.php");
        }
     
    } else{
      echo  $insertar = "INSERT INTO asistencia_docente(dni,fechaMarcacion,HoraInicio) VALUES(TRIM('".$explode3[0]."'),CURDATE(),DATE_FORMAT(NOW( ), '%H:%i:%S' ))";
        mysqli_query($con, $insertar);
        if($insertar)
        {            
            echo "Asistencia Guardado Correctamente";
            header("Refresh:0; url=index.php");
        }
        else
        {
            echo "No se pudieron guardar los datos";
            header("Refresh:0; url=index.php");
        }
     }
    
?>