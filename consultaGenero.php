<?php

	require_once ("conn.php");

	$resultado = mysqli_query($conn,"select * from tbgenerofilme"); 

    echo "<br><br>";

    echo "<table border=1>";
    echo "<tr>";
        echo "<td>Código</td>";
        echo "<td>Gênero</td";
    echo "</tr>";

    while($linha = mysqli_fetch_array($resultado)) 
    { 
        
            echo "<tr>";
                echo "<td>";
                    echo $linha['codGeneroFilme'];
                echo "</td>";
                echo "<td>";
                    echo $linha['generoFilme'];
                echo "</td>";
            echo "</tr>";    
    }
    echo "</table>";
?>