<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $animal = $_POST["animal"];
        $edad = $_POST["edad"];
        echo "Su animal es un ".$animal." y tiene una edad de ".$edad."<br>";
        echo "<button> <a href='taller2php.php' style='text-decoration:none; color:black;'>Regresar</a></button>";

}
?>