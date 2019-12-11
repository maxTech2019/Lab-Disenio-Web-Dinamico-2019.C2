<!DOCTYPE HTML>
<HTML>
<head>
 <title>Conectar MariaDB con PHP en Eclipse</title>
 <meta charset="utf-8">
</head>
</HTML>
<?php
   $mysqli = new mysqli("localhost","docente","sistemas","bazar");
   
   if($mysqli->connect_errno)
    echo "Se produjo un error: ". $mysqli->connect_error;
   else
   {
     $consulta = "SELECT * FROM Articulos";
     $resultado = $mysqli->query($consulta);
        if(!$resultado)
            echo "Error en la consulta: ". $mysqli->error;
        echo "<ul>";
        while($row = $resultado->fetch_assoc())
          echo " <li>". $row["IdArticulo"] . " " . $row["Descripcion"] . " " . $row["PrecioUnidad"] ."</li>";
        echo "</ul>";
    }
    $resultado->close();
?>