<?php
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

    $Query= "INSERT INTO especialidad ( Id_Especialidad,Profesional_Especialidad)
     VALUES (0,'$especialidad')";
     echo $Query;
   
       
     $Resultado= mysqli_query($Conexion,$Query);
?>