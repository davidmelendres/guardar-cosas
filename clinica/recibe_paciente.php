<?php
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $sexo=$_POST["sexo"];

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

    $Query= "INSERT INTO paciente (`Id_Paciente`, `Nombre_Paciente`, `Apellido_Paciente`, `Edad_paciente`, `sexo_Paciente`)
     VALUES (0,'$nombre','$apellido','$edad','$sexo')";
     echo $Query;
   
       
     $Resultado= mysqli_query($Conexion,$Query);
?>