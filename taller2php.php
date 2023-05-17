<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="taller2php.php" method="POST">
        <label for="">MENU</label>
        <select name="menu" id="">
            <option value="" selected>Elija una opcion</option>
            <option value="1">Lectura de datos</option>
            <option value="2">Crear Objeto</option>
            <option value="3">Mostrar Objeto</option>
            <option value="4">Crear Array</option>
            <option value="5">Mostrar Array</option>
            <option value="6">Eliminar primer elemento del Array</option>
            <option value="7">Eliminar el ultimo elemento del Array</option>
            <option value="8">Eliminar cualquier elemento del Array</option>
            <option value="9">Agregar elemento al comienzo del Array</option>
            <option value="10">Agregar elemento al final del Array</option>
            <option value="11">Crear Array con objetos</option>
            <option value="12">Iterar Array con FOR</option>
            <option value="13">Iterar Array con ForEach</option>
            <option value="14">Iterar objetos con Map y crear copia</option>
            <option value="15">proceso personal</option>
            <option value="0">Salir</option>
        </select>



        <button type="submit">Elegir</button>
    </form>

    <div>
        <?php 
            switch ($_POST["menu"]) {
                case '1':
                    lectura();
                    break;
                case '2':
                    crear();
                    break;
                default:
                    
                    break;
            }

            function lectura(){
                echo '<form action="option1.php" method="post">';
                echo 'Ingrese el animal: <input type="text" name="animal"><br>';
                echo 'Ingrese la edad: <input type="text" name="edad"><br>';
                echo '<input type="submit" value="Respuesta">';
                echo '</form>';
            }
            function crear(){
                echo '<form action="option2.php" method="post">';
                echo 'Ingrese cantidad de atributos: <input type="number" name="cantidad"><br>';
                echo '<input type="submit" value="Crear">';
                echo '</form>';
            }

        ?>
    </div>
    
</body>
</html>

<!-- let option
alert("Para acceder al proceso personal primero crear un array")
while(option!=0){
    alert(`------MENU------
    Lectura de datos
    
    Mostrar Objeto
    Crear Array
    Mostrar Array
    Eliminar primer elemento del Array
    Eliminar el ultimo elemento del Array
    Eliminar cualquier elemento del Array
    Agregar elemento al comienzo del Array
    Agregar elemento al final del Array
    Crear Array con objetos 
    Iterar Array con FOR 
    Iterar Array con ForEach
    Iterar objetos con Map y crear copia
    proceso personal
    Salir`)
    option=parseInt(prompt("Ingrese una opcion")) -->