<?php

  $_SERVER="localhost";
  $user="root";
  $pass="";
  $base="clinica";

  $conexion = mysqli_connect($_SERVER, $user, $pass, $base);

  $QueryB= "SELECT * FROM especialidad ORDER BY 2";
  $resultadoB=mysqli_query($conexion,$QueryB);

  
   
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
        <h1>profesionales</h1>
        
        <form action="recibe_profesional.php" method="post">
            <br>
            <!-- guarda la informacion ingresada -->
            <label>nombre</label>
            <input type="text" name="nombre" placeholder="">
            
            <br>
            <br>

            <label>apellido</label>
            <input type="text" name="apellido" placeholder="">
            <br>
            <br>

            <label>especialidad</label>
            <select name="especialidad">
            <br>
            <br>

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
            <!-- "enviar"envia  la informacion a la base -->
            <!--  "reset" borra la informacion puesta en el formulario-->
            <input type="submit" name="enviar" Value="Guardar" />
            <input type="reset" name="reset" Value="Cancelar" />
        </form>
    </header>
</body>