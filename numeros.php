<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	/* Las funciones de nuestro script */

	function sumarElementos($listaNumeros) {
		$total = 0;

		if (count($listaNumeros) > 1) {
			/*
			for($i = 0;$i < count($listaNumeros);$i++) {
				$total = $total+$listaNumeros[$i];
			}
			*/
			/*
			$i = 0;
			while($i < count($listaNumeros)) {
				$total = $total+$listaNumeros[$i];
				$i++;
			}*/
			$i = 0;
			do {
				$total = $total+$listaNumeros[$i];
				$i++;
			} while($i < count($listaNumeros));
		} else {
			echo "No hay elementos en la lista<br/>";
		}
		return $total;
	}

	function mostrarArreglo($arr) {
		for($i=0;$i < count($arr);$i++) {
			echo $arr[$i]."<br/>";
		}
	}

	//Declaración de variables
	/*
	$numeroUno = $_REQUEST['numero1'];
	$numeroDos = $_REQUEST['numero2'];

	//Operadores matemáticos
	$suma = $numeroUno + $numeroDos;
	echo "<p>La suma es: $suma</p>";

	//Operadores matemáticos
	$resta = $numeroUno - $numeroDos;
	echo '<p>La resta es: '.$resta.'</p>';

	//Operadores matemáticos
	$multiplicacion = $numeroUno * $numeroDos;
	echo "<p>La multiplicación es: $multiplicacion</p>";

	//Operadores matemáticos
	$division = $numeroUno / $numeroDos;
	echo '<p>La division es: '.$division.'</p>';
	*/

	//Obtenemos la variable de tipo arreglo
	$listaNumeros = $_REQUEST['numero'];

	sumarElementos($listaNumeros);
	
	//Imprimimos la cantidad de elementos recibidos
	echo "El arreglo tiene ".count($listaNumeros).' elementos<br/>';

	//El primer elemento
	echo "El primero elemento es: ".$listaNumeros[0].'<br/>';
	echo "La suma de los elementos es: ".sumarElementos($listaNumeros).'<br/>';

	echo "La lista original:";
	mostrarArreglo($listaNumeros);
	//Volteamos el arreglo
	$listaNumerosReversa = array_reverse($listaNumeros);
	echo "La lista en reversa:";
	mostrarArreglo($listaNumerosReversa);
	//Agregar un elemento al final
	array_push($listaNumerosReversa,90);

	echo "La lista en reversa con un elemento adicional:";
	mostrarArreglo($listaNumerosReversa);

	//Agregar un elemento al inicio
	array_unshift($listaNumerosReversa,120);

	echo "La lista en reversa con un elemento adicional al inicio:";
	mostrarArreglo($listaNumerosReversa);


?>
</body>
</html>

