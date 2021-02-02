<?php 

$archivo = fopen('fichero_texto.txt', 'r');    // Abrir archivo 


// Leer contenido 

while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";

}




fclose($archivo);               // Cerrar archivo