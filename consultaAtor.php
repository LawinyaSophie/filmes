<?php

	require_once ("conn.php");

	$resultado = mysqli_query($conn,"select * from tbator"); 

    echo "<br><br>";

    echo "<table border=1>";
    echo "<tr>";
        echo "<td>Código</td>";
        echo "<td>Nome</td";
    echo "</tr>";

    while($linha = mysqli_fetch_array($resultado)) 
    { 
        
            echo "<tr>";
                echo "<td>";
                    echo $linha['codAtor'];
                echo "</td>";
                echo "<td>";
                    echo $linha['ator'];
                echo "</td>";
            echo "</tr>";    
    }
    echo "</table>";
?>