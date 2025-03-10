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
        <h1>paciente</h1>
        
        <form action="recibe_paciente.php" method="post">
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
            <label>edad</label>
            <input type="text" name="edad" placeholder="">
            <br>
            <br>
            <label>sexo</label>
            <input type="int" name="sexo" placeholder="">


            <br>
            <br>
            <!-- "enviar"envia  la informacion a la base -->
            <!--  "reset" borra la informacion puesta en el formulario-->
            <input type="submit" name="enviar" Value="Guardar" />
            <input type="reset" name="reset" Value="Cancelar" />
        </form>
    </header>
</body>