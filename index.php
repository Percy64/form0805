<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<title>validacion formulario</title>
</head>
<body>
	<main class="row">
		<section class="col_12 flex flex-j-c">
			<form class="col_3 flex flex-flox-c flex-a-c form_01" action="" method="post">
				<input type="text" name="producto" placeholder="Nombre de producto"><br><br>
				<input type="text" name="codigo" placeholder="Codigo de producto"><br><br>
				<button type="submit" name="ok">ok</button>
			</form>
		</section>
	</main>
	
</body>
</html>


<?php 
	// var_dump(isset($_POST['producto']));
	if (isset($_POST['producto']) === true) {
		echo 'Producto existe <br>';

		$producto = trim($_POST['producto']);
		if (empty($producto)) {
			echo 'Producto esta vacio <br>';
		}else{
			echo 'Producto NO esta vacio <br>';
			// var_dump(strlen($producto));
			if (strlen($producto) >= 3 && strlen($producto) <= 6) {
				echo 'La cantidad  de caracteres esta bien<br>';
			}else{
				echo 'La cantidad de caracteres debe ser entre 3 a 6 como max<br>';
			}
		}
	}else{
		echo 'Producto NO existe <br>';
		// var_dump($_POST);
	}



	// var_dump(isset($_POST['producto']));
	// la función isset() se utiliza para verificar si una variable está definida y 
	// no es null. Es decir, devuelve true si la variable existe y tiene un valor distinto 
	// de null, y devuelve false en caso contrario.
	if (isset($_POST['codigo']) === true) {
		echo 'codigo existe <br>';
		//la función trim() se utiliza para eliminar los espacios en blanco
		//  del inicio y el final de una cadena.
		$codigo = trim($_POST['codigo']);
		//la función empty() se utiliza para verificar si una variable está vacía. 
		if (empty($codigo)) {
			echo 'codigo esta vacio <br>';
		}else{
			echo 'codigo NO esta vacio <br>';
			//la función is_numeric() se utiliza para verificar si una variable 
			// es un número o una cadena numérica.
			if (is_numeric($codigo) === true) {
				echo 'codigo es un número <br>';
				//la función strlen() se utiliza para obtener la longitud de una cadena.
				//es decir, el número de caracteres que contiene.
				if (strlen($codigo) < 4) {
					echo 'cantidad de caracteres MAL <br>';
				}else{
					echo 'cantidad de caracteres OK <br>';
					if ($codigo > 5000) {
						echo 'No puede ser mayor a 5000 <br>';
					}
				}
			}else{
				echo 'codigo NO ES un número <br>'; 
			}
		}
	}else{
		echo 'codigo NO existe <br>';
		// var_dump($_POST);
	}

 ?>