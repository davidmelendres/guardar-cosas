<?php
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $especialidad=$_POST["especialidad"];
    

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

    $Query= "INSERT INTO `profesional`(`Id_Profesional`, `Nombre_Profesional`, `Apellido_Profesional`, `Especialidad_Profesional`)
     VALUES (0,'$nombre','$apellido','$especialidad')";
     echo $Query;
   
       
     $Resultado= mysqli_query($Conexion,$Query);
?>