<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web PHP</title>
</head>
<body>
    
</body>
</html>

<?php 
    //Iniciar variables
    $db_host = "localhost";
    $db_name = "hotel";
    $us_name = "root";
    $passwd = "Pract3cn04529**++{}";


    //Realizar la conexion de la base de datos
    $conexion = mysqli_connect($db_host, $us_name, $passwd, $db_name);


    //Revision de si hay algun error al conectar
    if(mysqli_connect_errno()) {
        echo "Fallo al conectar a la base de datos";

        exit();
    }

    //Consulta en base de datos
    $query = "select * from cliente";

    //ResultSet o RecordSet: Tabla en memoria donde se carga la informacion de la sentencia sql
    $resultados = mysqli_query($conexion, $query);

    //Revisar informacion del resultado fila por fila, se almacena en un array
    $fila = mysqli_fetch_row($resultados);

    echo $fila[0] . " ";
    echo $fila[1] . " ";
    echo $fila[2] . " ";
    echo $fila[3] . " ";
    echo $fila[4] . " ";
    echo $fila[5] . " ";
    echo $fila[6] . " ";






?>