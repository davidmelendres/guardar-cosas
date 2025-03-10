<?php

  $_SERVER="localhost";
  $user="root";
  $pass="";
  $base="clinica";

  $conexion = mysqli_connect($_SERVER, $user, $pass, $base);

  $QueryB= "SELECT * FROM paciente ORDER BY 1";
  $resultadoB=mysqli_query($conexion,$QueryB);

  $QueryC= "SELECT * FROM profesional ORDER BY 1";
  $resultadoC=mysqli_query($conexion,$QueryC);

  $QueryD= "SELECT * FROM detalle_hc ORDER BY 1";
  $resultadoD=mysqli_query($conexion,$QueryD);

  
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <header>
        <h1>historial clinico</h1>
        
        <form action="recibe_historial_clinico.php" method="post">
            <br>
            <!-- guarda la informacion ingresada -->
            <label>paciente</label>
            <select name="paciente">
        
    <?php
            $fila= mysqli_num_rows($resultadoB);
    
        if($fila>0)
            {
                while($registro=mysqli_fetch_array($resultadoB))
                    {
                        echo '<option value="'.$registro[0].'">'.$registro[1].'</option>'; 
                    } 
            }
            else
            {
                echo '<option> sin datos </option>';
            }
        ?>
        </select>



            <br>
            <br>
            <label>doctor</label>
            <select name="doctor">
        
        <?php
            $fila= mysqli_num_rows($resultadoC);
    
        if($fila>0)
            {
                while($registro=mysqli_fetch_array($resultadoC))
                    {
                        echo '<option value="'.$registro[0].'">'.$registro[1].'</option>'; 
                    } 
            }
            else
            {
                echo '<option> sin datos </option>';
            }
        ?>
        </select>


            <br>
            <br>
            <label>detalle medicos</label>
            <select name="detalles">

        <?php
            $fila= mysqli_num_rows($resultadoD);
    
        if($fila>0)
            {
                while($registro=mysqli_fetch_array($resultadoD))
                    {
                        echo '<option value="'.$registro[0].'">'.$registro[1].'</option>'; 
                    } 
            }
            else
            {
                echo '<option> sin datos </option>';
            }
        ?>
        </select>



            <br>
            <br>
            <!-- "enviar"envia  la informacion a la base -->
            <!--  "reset" borra la informacion puesta en el formulario-->
            <input type="submit" name="enviar" Value="Guardar" />
            <input type="reset" name="reset" Value="Cancelar" />
        </form>
    </header>
</body>