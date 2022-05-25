<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php 
		$nomes = ["Henrique", "Jonas", "Jarbas"];	
	?>
	<form action="#" method="POST">
		<label>Henrique</label>
		<input type="checkbox" name="opcoes[]" value="<?php echo array_search('Henrique', $nomes); ?>" >

		<label>Jonas</label>
		<input type="checkbox" name="opcoes[]" value="<?php echo array_search('Jonas', $nomes); ?>" >

		<label>Jarbas</label>
		<input type="checkbox" name="opcoes[]" value="<?php echo array_search('Jarbas', $nomes); ?>" >

		<input type="submit">
	</form>
	<ul>
		<?php 
			$nomesPost = $_POST["opcoes"];

			$quantidadeNomes = is_array($nomesPost) ? count($nomesPost) : 0;

			if($quantidadeNomes == 0){
				echo "Nenhum nome enviado";
			}
			else{
				foreach($nomesPost as $indiceNome):		
					echo "<li>".$nomes[$indiceNome]."</li>";
				endforeach;
			}
		?>

	</ul>
	
	
</body>
</html>
