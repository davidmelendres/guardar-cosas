<?php
    $paciente=$_POST["paciente"];
    $detalles=$_POST["detalles"];
    $doctor=$_POST["doctor"];
    

    $Server="localhost" ;
    $User="root" ;
    $Pass="" ;
    $Base="clinica" ;

    $Conexion=mysqli_connect($Server, $User, $Pass, $Base);

    If (!$Conexion){
        die("Fallo la Conexion".mysqli_connect_error());
    }
    else {
        echo "Conexion exitosa";
    }

    $Query= "INSERT INTO `historial_clinico`(`Id_HistorialClinico`, `Paciente_HistorialClinico`, `Detalle_PacienteHC`, `Doctor_PacienteHC`) 
    VALUES (0,'$paciente','$detalles','$doctor')";
     echo $Query;
   
       
     $Resultado= mysqli_query($Conexion,$Query);
?>