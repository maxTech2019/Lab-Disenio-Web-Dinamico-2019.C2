<?php
	//Leer datos del Formulario
	$nom = $_POST['txtNombres'];
	$peso = $_POST['txtPeso'];
	$altura = $_POST['txtAltura'];

	//Mostrar Información
	echo ("<p>Su nombre es:" . $nom ."</p>");
	echo ("<p>Tiene un Peso de: " . $peso . " kilogramos</p>");
	echo ("<p>Y su altura es de: ". $altura . " metros</p>");

	//Calcular IMC
	$imc = $peso / (pow($altura,2));
	echo ("<p>Su Indice de Masa Corporal es: ".number_format($imc,4)."</p>");

    $diagnostico = " ";
	
	if ($imc < 18.5)
	    $diagnostico="Bajo peso";
    else if ($imc >= 18.5 and $imc <=24.5)
		     $diagnostico="Normal peso";
        else if ($imc >= 25 and $imc <=29.9) 
            	 $diagnostico="Sobrepeso";
            else if ($imc >= 30 and $imc <=34.9)
			         $diagnostico="Obesidad Moderada";
			    else if ($imc >= 35 and $imc <=35.9)
			    		$diagnostico="Obesidad Severa";
			    	 else 
			    		$diagnostico="Obesidad Mórbida";
	
	echo "<p>Su nivel de peso es: ".$diagnostico."</p>";
?>

