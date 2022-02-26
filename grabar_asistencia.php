<?php
echo  $_GET['value'];

?>
<?php
require("conexion.php");

    //consulta mysql para insertar los datos del empleados
    $query = "SELECT * FROM asistencia_docente
    where dni='".$_GET['value']."' and fechaMarcacion=".date('Y-m-d')."' ";
    echo $query;
// enviamos la consulta a MySQL
    $queEmp = mysqli_query($con,$query);
    $total = $queEmp->num_rows;
    echo  "Total: ";
    echo $total;
    if($total>0){
        $update = "UPDATE asistencia_docente set HoraFin='".date('H:m:s'). "' 
         where dni='".$_GET['value']."' and fechaMarcacion='".date('Y-m-d')."'";
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
        $insertar = "INSERT INTO asistencia_docente(dni,fechaMarcacion,HoraInicio)
        VALUES ('".$_GET['value']. "','".date('Y-m-d')."','".date('H:m:s'). "')";
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