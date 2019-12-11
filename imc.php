<?php
	$nom = $_POST['txtNombres'];
	$peso = $_POST['txtPeso'];
	$altura = $_POST['txtAltura'];
	//Mostrar Información
	echo ("<p>Su nombre es:" . $nom ."</p>");
	echo ("<p>Tiene un Peso de: " . $peso . " kilogramos</p>");
	echo ("<p>Y su altura es de: ". $altura . " metros</p>");
	//Calcular IMC
	$imc = $peso / (pow($altura,2));
	echo ("<p>Su Indice de Masa Corporal es: ".number_format($imc,2)."</p>");
    $diagnostico = " ";
	switch ($imc) {
		case ($imc < 18.5):
			$diagnostico="Bajo peso";
			break;
		case ($imc >= 18.5 and $imc <=24.5):
			$diagnostico="Normal peso";
			break;
		case ($imc >= 25 and $imc <=29.9):
			$diagnostico="Sobrepeso";
			break;
		case ($imc >= 30 and $imc <=34.9):
			$diagnostico="Obesidad Moderada";
			break;
		case ($imc >= 35 and $imc <=35.9):
			$diagnostico="Obesidad Severa";
			break;
		default:
			$diagnostico="Obesidad Mórbida";
			break;
	}
	echo "<p>Su nivel de peso es: ".$diagnostico."</p>";
?>

