<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Principal Filmes</title>
</head>
<style type="text/css">
	
	body {
		background-color: #1A1A1A;
		display: flex;
		flex-direction: column;
		align-items: center;
		min-height: 100vh;
		margin: 0;
		padding: 20px;
	}

	.principal {
		background-color: #2F2F2F;
		border-radius: 15px;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
		width: 90%;
		max-width: 900px;
		padding: 10px;
		margin-bottom: 30px;
	}

	.principal a {
		text-decoration: none;
		text-align: center;
		color: white;
		background-color: #E50914;
		border-radius: 8px;
		padding: 15px 10px;
		cursor: pointer;
		width: 45%;
		box-sizing: border-box;
		margin: 10px 0;
		font-family: 'Courier New', monospace;
		font-weight: bold;
		transition: background-color 0.3s, transform 0.3s;
	}

	.principal a:hover {
		background-color: #B20710;
		transform: translateY(-2px);
	}

	.listagem {
		width: 90%;
		max-width: 900px;
		padding: 0;
	}

	.listagem ul {
		list-style: none;
		padding: 0;
		display: flex;
		flex-direction: column;
		gap: 10px;
	}

	.listagem a {
		text-decoration: none;
		color: #4CAF50;
		background-color: #2F2F2F;
		padding: 12px;
		display: block;
		border-radius: 8px;
		border: 1px solid #4CAF50;
		font-family: Arial, sans-serif;
		transition: background-color 0.3s, color 0.3s;
		text-align: left;
		font-weight: bold;
	}

	.listagem a:hover {
		background-color: #4CAF50;
		color: #1A1A1A;
	}

</style>
<body>
	<div class="principal">
		<a href="cadAtores.php">Cadastro do Ator</a>
		<a href="cadDiretor.php">Cadastro do Diretor</a>
		<a href="cadGenero.php">Cadastro do Gênero</a>
		<a href="cadFilmes.php">Cadastro dos Filmes</a>
		<a href="cadAtor.php">Cadastro de Atores nos Filmes</a>
	</div>

	<div class="listagem">
		<ul>
			<li><a href="consultaFilme.php">Listagem de Filmes</a></li>
			<li><a href="consultaAtor.php">Listagem de Atores</a></li>
			<li><a href="consultaGenero.php">Listagem de Gêneros</a></li>
			<li><a href="consultaDiretores.php">Listagem de Diretores</a></li>
		</ul>
	</div>
</body>
</html>