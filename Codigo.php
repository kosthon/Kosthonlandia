<?php

function consultas(){
        // Consulta de total de datros en la BD
        $resultados = pg_query("select count(*) from Multas
        where tipo_violacion like 'Warning'");

        while ($columnas = pg_fetch_row($resultados)){
            echo "cantidad:".$columnas[0];
        }
    }
function warning($param){
    $resultados = pg_query("select count(*) from Multas
    where tipo_violacion like '$param'");

    while ($columnas = pg_fetch_row($resultados)){
        echo "cantidad:".$columnas[0];
    }
    return $columnas[0];
}

function infraccion(){
    $resultados = pg_query("select distinct tipo_violacion from Multas 
    order by tipo_violacion");

    while ($columnas = pg_fetch_row($resultados)){
        echo "Violaciones:".$columnas[0];
    }
    return $columnas;
}

?>

