<?php
   // $option=$_GET['option'];
    //$Buscar=$_GET['Buscar'];

    $bandera=0;

    $Server="localhost";
    $User="root" ;
    $Pass="" ;
    $Base="clinica" ;

    $Conexion=mysqli_connect($Server, $User, $Pass, $Base)
        or die ("no se puede conectar"); 

       
    $Query="SELECT Id_HistorialClinico,Nombre_Paciente,Apellido_Paciente,Edad_Paciente,sexo_Paciente,Nombre_Profesional,Detalles_HC 
        FROM historial_clinico,paciente,profesional,detalle_hc 
    WHERE Id_Paciente=Paciente_HistorialClinico AND Id_Profesional=Doctor_PacienteHC AND id_HC=Detalle_PacienteHC;";
    
   
    
        $Resultado= mysqli_query($Conexion,$Query);

    echo "<table style=\"border:5px solid grey\">";
    echo "<tr style=\"border:px2 solid grey\" bgcolor=\"#d5f5ad\">";
    echo "<td> ID </td>";//0
    echo "<td> Nombre </td>";//1
    echo "<td> Apellido </td>";//2
    echo "<td> Edad </td>";//3
    echo "<td> Sexo </td>";//4
    echo "<td> Doctor </td>";//5
    echo "<td> Estado </td>";//6
    
   
    

    echo "</td>";

    while($registro=mysqli_fetch_array($Resultado))
        { 
            if ($bandera==1)
            {
                echo "<tr style=\"border:10px solid grey\bgcolor=\"#01df01\">";
                echo "<td>".$registro[0].""."</td>";
                echo "<td>".$registro[1].""."</td>";
                echo "<td>".$registro[2].""."</td>";
                echo "<td>".$registro[3].""."</td>";
                echo "<td>".$registro[4].""."</td>";
                echo "<td>".$registro[5].""."</td>";
                echo "<td>".$registro[6].""."</td>";
                
                
               
                //echo"<td><a href=ModificaBarrio.php?ID=".$registro[0].">modifica </a> </td>";
                

                $bandera=0;

            }
               
                else
            {
                echo "<tr style=\"border:10px solid grey\bgcolor=\"#d5df5ad\">";               
                echo "<td>".$registro[0].""."</td>";
                echo "<td>".$registro[1].""."</td>";
                echo "<td>".$registro[2].""."</td>";
                echo "<td>".$registro[3].""."</td>";
                echo "<td>".$registro[4].""."</td>";
                echo "<td>".$registro[5].""."</td>";
                echo "<td>".$registro[6].""."</td>";
                 
          
                //echo"<td><a href=ModificaBarrio.php?ID=".$registro[0].">modifica </a> </td>";
                

                $bandera=1;
        
            }
        echo "</tr>";

        }
        
        echo "</table>";

    mysqli_close($Conexion);
