<?php 
    echo '<form action="option2.php" method="post">';
    for ($i = 0; $i < $_POST["cantidad"]; $i++){
        
        echo "Ingrese la key del objeto: <input type='text' name='key{$i}'><br>";
        echo "Ingrese el valor de la key: <input type='text' name='value{$i}'><br>";
    }
    echo '<input type="submit" onclick="guardar()" value="Respuesta">';
    echo '</form>';
    echo $_POST["key1"];
    echo "<button> <a href='taller2php.php' style='text-decoration:none; color:black;'>Regresar</a></button>";

    function guardar(){
        for ($i = 0; $i < $_POST["cantidad"]; $i++){

        }
    }
?>