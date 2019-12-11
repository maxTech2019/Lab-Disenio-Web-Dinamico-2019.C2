<?php
 $edad=$_POST["txtEdad"];
 $number=$_POST["txtValor"];
 echo "Hola mi edad es: ".$edad;
 if($edad >= 18)
    echo "<p>Usted es mayor edad.</p>";
    else
        echo "<p>Usted es menor de edad</p>";
        echo "<p>El valor que ingreso es:</p>".$number;
        
        //Generando Tabla de multiplar de N numero
        $limite=1;
        $resul=0;
        while($limite<=12)
        {
            $resul=$number * $limite;
            echo "<p>".$number."x".$limite."=".$resul."</p>";
            $limite++;
        }
?>