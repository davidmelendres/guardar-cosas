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

       
    $Query="SELECT * FROM `detalle_hc`";
    
   
    
        $Resultado= mysqli_query($Conexion,$Query);

    echo "<table style=\"border:5px solid grey\">";
    echo "<tr style=\"border:px2 solid grey\" bgcolor=\"#d5f5ad\">";
    echo "<td> ID </td>";//0
    echo "<td> Estado </td>";//1
    
    

    echo "</td>";

    while($registro=mysqli_fetch_array($Resultado))
        { 
            if ($bandera==1)
            {
                echo "<tr style=\"border:10px solid grey\bgcolor=\"#01df01\">";
                echo "<td>".$registro[0].""."</td>";
                echo "<td>".$registro[1].""."</td>";
                
                
               
                //echo"<td><a href=ModificaBarrio.php?ID=".$registro[0].">modifica </a> </td>";
                

                $bandera=0;

            }
               
                else
            {
                echo "<tr style=\"border:10px solid grey\bgcolor=\"#d5df5ad\">";               
                echo "<td>".$registro[0].""."</td>";
                echo "<td>".$registro[1].""."</td>";
               
                 
          
                //echo"<td><a href=ModificaBarrio.php?ID=".$registro[0].">modifica </a> </td>";
                

                $bandera=1;
        
            }
        echo "</tr>";

        }
        
        echo "</table>";

    mysqli_close($Conexion);