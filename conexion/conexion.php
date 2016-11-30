<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$user = "damatex";
$password = "a1s2d3";
$dbname = "surveillant3";
$port = "5432";
$host = "192.168.0.65";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
//echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";


