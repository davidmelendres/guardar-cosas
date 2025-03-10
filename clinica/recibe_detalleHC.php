<?php
    $detalle=$_POST["detalle"];
    
    

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

    $Query= "INSERT INTO `detalle_hc`(`id_HC`, `Detalles_HC`) 
        VALUES (0,'$detalle')";
     echo $Query;
   
       
     $Resultado= mysqli_query($Conexion,$Query);
?>