<!DOCTYPE html>
<html>
<head>
	<title>Gerar Matriz</title>
</head>
<body>
	<form method="post" action="">
		<label for="linhas">Quantidade de Linhas:</label>
		<input type="number" name="linhas" id="linhas">
		<br><br>
		<label for="colunas">Quantidade de Colunas:</label>
		<input type="number" name="colunas" id="colunas">
		<br><br>
		<input type="submit" value="Gerar Matriz">
	</form>

	<?php
		if(isset($_POST['linhas']) && isset($_POST['colunas'])){
			$linhas = $_POST['linhas'];
			$colunas = $_POST['colunas'];
			$n = 1;

			echo "<br><br>";
			echo "<table border='1'>";
			for($i=0; $i<$linhas; $i++){
				echo "<tr>";
				for($j=0; $j<$colunas; $j++){
					echo "<td>".$n."</td>";
					$n++;
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	?>
</body>
</html>
