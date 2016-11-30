<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include_once '../conexion/conexion.php';



//$a = 0;


echo '<h3 align="center">'.FRASE_6.'<br>
'.FRASE_7.'<br>
</h3><br>';

lireList('AFT');



/*$queryD = "select* from f9211 order by champ1";

$resultadoD = pg_query($conexion, $queryD) or die("Error en la Consulta SQL");

$numRegD = pg_num_rows($resultadoD);

if ($numRegD > 0) {
    echo "<table border='0' align='center'>
<tr bgcolor='skyblue'>
<th> </th>
<th> </th>
<th> </th>

</tr>";
    while ($filaD = pg_fetch_array($resultadoD)) {
        
        $val_5[] = $filaD['champ1'];
        $array_5 = devolverPosicion($val_5);
        
        sendValue($a, label($array_5,$filaD['champ1']), limpia_espacios($filaD['champ1']));
        
        echo "<tr><td><button onclick='setLbl(".label($array_5,$filaD['champ1']).")' id='btn" . $a . "'>" . $filaD['champ1'] . "</button></td>";
        echo "<td>&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>" . $filaD['champ2'] . "</td>";
        
        $a++;
 
    }
    echo "</table>";
} else {
    echo "<br>".NO_RESULTADOS."<br>";
}

pg_close($conexion);*/