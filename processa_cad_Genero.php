<?php
	include_once("conn.php");
	$genero = $_POST['txtGenero'];
	$result_genero = "INSERT INTO tbgenerofilme (generoFilme)
	VALUES ('$genero')";


	$resultado_genero = mysqli_query($conn, $result_genero);

	if(mysqli_affected_rows($conn) !=0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = 
				'0;URL=index.php'>
			<script type= \"text/javascript\">
				alert(\"Gênero cadastrado com êxito.\");
			</script>
		";
	}
	else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = 
				'0;URL=cadDiretor.php'>
			<script type= \"text/javascript\">
				alert(\"Gênero não foi cadastrado com êxito.\");
			</script>
		";
	}
?>