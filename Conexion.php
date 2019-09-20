<?php
    function conectarBD(){
        $host="localhost";
        $port="5432";
        $dbname= "Multas";
        $user = "postgres";
        $password = "mineria";


        $conexion = "host=$host port=$port dbname=$dbname user=$user password=$password";
        $bd = pg_connect($conexion);
        if(!$bd){
            echo "Error: ".pg_last_error;
        } else {
            echo "<h3> Conexion bien </h3><hr>";
            return $bd;
        }
    }

?>