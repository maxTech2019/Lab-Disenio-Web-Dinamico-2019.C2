<DOCTYPE HTML>
  <html>
   <head>
   </head>
   <body>
    <form name="form_datos" method="post" action="combobusqueda.php">
      <label for="categoria"> Seleccione una categoria: </label>
        <?php
          $con = new mysqli("127.0.0.1","docente","sistemas","bazar");
          if($con->connect_errno)
            echo "Se produjo un error: ". $con->connect_error;
          else
          {
            $consulta = "SELECT * FROM categorias";
            $resultado = $con->query($consulta);
            if(!$resultado)
              echo "Error en la consulta: ". $con->error;
            else
            {
              echo "<select id='categoria' name='categoria'>";
              echo "<option value='' selected>--Elija una categoria--</option>";
              while($row = $resultado->fetch_assoc())
                echo "<option value='".$row["IdCategoria"]."'>".$row["Nombre"]."</option>";
              $resultado->free();
            }
          }
        ?>
            </select></p>
            <p><input type="submit" name="btnBuscar" value="Buscar.."></p>
            </form>
        <?php
          if(isset($_POST["btnBuscar"]))
          {
            $codCategoria=$_POST["categoria"];
            echo "<p>Código de la categoria seleccionada es: ".$codCategoria."</p>";
            $consulta = "SELECT * FROM articulos WHERE IdCategoria=".$codCategoria;
            $resultado = $con->query($consulta);
            if(!$resultado)
              echo "Error en la consulta: ". $con->error;
            else
            {
              echo "<table border='1'><tr><td>Codigo</td><td>Producto</td><td>Precio</td><td>Estado</td></tr>";
              while($row = $resultado->fetch_assoc())
                 echo "<tr><td>".   $row["IdArticulo"] . 
                      "</td><td>" . $row["Descripcion"] . 
                      "</td><td>" . $row["PrecioUnidad"] .
                      "</td><td>" . $row["Estado"] ."</td></tr>";
              echo "</table>";
              $resultado->free();
            }
          }
          $con->close();
        ?>
    </body>
  </html>