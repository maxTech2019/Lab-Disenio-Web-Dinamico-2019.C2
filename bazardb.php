<?php
   /* creamos una conexión a la bd */
   $con = new mysqli("127.0.0.1","docente","sistemas","bazar");

/* verificar la conexión */
   if($con->connect_errno)
    echo "Se produjo un error: ". $con->connect_error;
   else
   {
     $consulta = "SELECT * FROM Articulos";

     $resultado = $con->query($consulta);

        if(!$resultado)
            echo "Error en la consulta: ". $con->error;
        else {
          $num=$resultado->num_rows;
          echo "<p>Total registros: ".$num."</p>";

          echo "<table border='1'><tr><td>Codigo</td><td>Producto</td><td>Precio</td><td>Estado</td></tr>";

          /* obtener un array asociativo */
          while($row = $resultado->fetch_assoc())
            echo "<tr><td>".   $row["IdArticulo"] . 
               "</td><td>" . $row["Descripcion"] . 
               "</td><td>" . $row["PrecioUnidad"] .
               "</td><td>" . $row["Estado"] ."</td></tr>";
            echo "</table>";

        /* liberar el conjunto de resultados */
        $resultado->free();
       }
    }

    /* cerrar la conexión */
    $con->close();

?>