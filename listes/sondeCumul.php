<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include_once '../conexion/conexion.php';



//$a = 0;


echo '<h3 align="center">'.FRASE_6.'<br>
'.FRASE_7.'</h3><br>';
lireList('Z');

/*
$queryE = "select* from f9212 order by champ1";

$resultadoE = pg_query($conexion, $queryE) or die("Error en la Consulta SQL");

$numRegE = pg_num_rows($resultadoE);

if ($numRegE > 0) {
    echo "<table border='0' align='center'>
<tr bgcolor='skyblue'>
<th> </th>
<th> </th>
<th> </th>

</tr>";
    while ($filaE = pg_fetch_array($resultadoE)) {
        
        $val_6[] = $filaE['champ1'];
        $array_6 = devolverPosicion($val_6);
        
        sendValue($a, label($array_6,$filaE['champ1']), limpia_espacios($filaE['champ1']));
        
        echo "<tr><td><button onclick='setLbl(".label($array_6,$filaE['champ1']).")' id='btn" . $a . "'>" . $filaE['champ1'] . "</button></td>";
        echo "<td>&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>" . $filaE['champ2'] . "</td>";
        
        $a++;
     
        
    }
    echo "</table>";
} else {
    echo "<br>".NO_RESULTADOS."<br>";
}
pg_close($conexion);*/