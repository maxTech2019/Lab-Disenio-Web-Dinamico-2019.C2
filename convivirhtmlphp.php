<!DOCTYPE=HTML>
<html>
<head>
	<title>Embebiendo código HTML con PHP</title>
</head>
<body>
	<form name="form_datos" method="post"
	action="convivirhtmlphp.php">
	<label>
		Ingrese su peso (Kgs):
		<p><input type="text" name="txtPeso"
		size="7" maxlength="3"></p>
	</label>
	<label>
		Ingrese su altura (mts):
		<p><input type="text" name="txtAltura"
			size="7" maxlength="4"></p>
	</label>
	   <p><input type="submit" name="btnProcesar"
	   value="Calcular I.M.C."</p>
	</form>
	<?php
		if(isset($_POST["txtAltura"]))
		{
			$peso=$_POST["txtPeso"];
			$altura=$_POST["txtAltura"];
			echo "<p>Su Peso es: ".$peso. " Kilogramos</p>";
			echo "<p>Su Altura es: ".$altura." metros</p>";
			$masacorporal=$peso / (pow($altura,2));
			echo "<p>Su Indice de Masa Corporal es: ".$masacorporal."</p>";
		}
	?>
</body>
</html>