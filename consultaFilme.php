<?php

	require_once ("conn.php");

	$resultado = mysqli_query($conn,"select * from tbfilme"); 

    echo "<br><br>";

    echo "<table border=1>";
    echo "<tr>";
        echo "<td>Código</td>";
        echo "<td>Filme</td>";
        echo "<td>Diretor</td>";
    echo "</tr>";


    while($linha = mysqli_fetch_array($resultado)) 
    { 
            echo "<tr>";
                echo "<td>";
                    echo $linha['codFilme'];
                echo "</td>";
                echo "<td>";
                    echo $linha['filme'];
                echo "</td>";
                echo "<td>";
                    echo $linha['codDiretor'];
                echo "</td>";
            echo "</tr>";    
    }
    echo "</table>";
?>