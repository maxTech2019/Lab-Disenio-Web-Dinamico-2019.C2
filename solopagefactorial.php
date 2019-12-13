<!DOCTYPE HTML>
<html>
 <head>
 	<title> Factorial de una Serie</title>
 	<meta charset="utf-8">
 </head>
 <body>
 	<form method="post" action="solopagefactorial.php">
 		<label>
 			<p>Seleccione Limite Serie:</p>
 			<input type="number" name="cdnumero" size="5" min="1" max="9" required>
 		</label>
 		<p><input type="submit" name="btnProcesar" value="Calcular"></p>
 	</form>
<?php
  if(isset($_POST["cdnumero"]))
  {
    $limite=$_POST["cdnumero"];
    for($s=1;$s<=$limite;$s++)
    {
    	$i=1;
    	$fact=1;
    	while($i<=$s)
    	{
    		$fact*=$i;
    		$i++;
    	}
    	echo "<p>".$s." su factorial es = ".$fact."</p>";
    }
    echo "<a href='solopagefactorial.php'>Ir Inicio</a>";
  }
?>
</body>
<html>