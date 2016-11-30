<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include_once '../conexion/conexion.php';




//$a = 0;

echo '<h3 align="center">'.FRASE_1.'<br>
'.FRASE_2.'</h3><br>';

lireList('S','0','0');



//echo '<p><strong>================= '.FRASE_3.'==================</strong></p>';

/*$queryA = "select* from f9231 order by champ1";

$resultadoA = pg_query($conexion, $queryA) or die("Error en la Consulta SQL");

$numRegA = pg_num_rows($resultadoA);

if ($numRegA > 0) {
    echo "<table border='0' align='center'>
<tr bgcolor='skyblue'>
<th> </th>
<th> </th>
<th> </th>
</tr>";


    while ($filaA = pg_fetch_array($resultadoA)) {
        
        $val_1[] = $filaA['champ1'];
        $array_1 = devolverPosicion($val_1);
        
        sendValue($a, label($array_1,$filaA['champ1']), limpia_espacios($filaA['champ1']));
         
        echo "<tr><td><button onclick='setLbl(".label($array_1,$filaA['champ1']).")' id='btn" . $a . "'>" .$filaA['champ1']. "</button></td>";
        echo "<td>&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>" . $filaA['champ2'] . "</td>";

        $a++;
 
    } 
    echo "</table>";
    

} else {
    echo "<br>".NO_RESULTADOS."<br>";
}

echo'<p><strong>============ '.FRASE_4.' ===============</strong></p>';

$queryB = "select* from f9238 order by champ1";

$resultadoB = pg_query($conexion, $queryB) or die("Error en la Consulta SQL");

$numRegB = pg_num_rows($resultadoB);

if ($numRegB > 0) {
    echo "<table border='0' align='center'>
<tr bgcolor='skyblue'>
<th> </th>
<th> </th>
<th> </th>

</tr>";

    while ($filaB = pg_fetch_array($resultadoB)) {
        
        $val_2[] = $filaB['champ1'];
        $array_2 = devolverPosicion($val_2);

        sendValue($a, label($array_2,$filaB['champ1']), limpia_espacios($filaB['champ1']));


        echo "<tr><td><button onclick='setLbl(".label($array_2,$filaB['champ1']).")' id='btn" . $a . "'>" . $filaB['champ1'] . "</button></td>";
        echo "<td>&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>" . $filaB['champ2'] . "</td>";

        $a++;

    }
    echo "</table>";
} else {
    echo "<br>".NO_RESULTADOS."<br>";
}


echo'<p><strong>================= '.FRASE_4.' ==================</strong></p>';

$queryC = "select* from f9271 order by champ1";

$resultadoC = pg_query($conexion, $queryC) or die("Error en la Consulta SQL");

$numRegC = pg_num_rows($resultadoC);

if ($numRegC > 0) {
    echo "<table border='0' align='center'>
<tr bgcolor='skyblue'>
<th> </th>
<th> </th>
<th> </th>

</tr>";

    
    while ($filaC = pg_fetch_array($resultadoC)) {
        
        $val_3[] = $filaC['champ1'];
        $array_3 = devolverPosicion($val_3);

        sendValue($a, label($array_3,$filaB['champ1']), limpia_espacios($filaC['champ1']));

        echo "<tr><td><button onclick='setLbl(".label($array_3,$filaC['champ1']).")' id='btn" . $a . "'>" . $filaC['champ1'] . "</button></td>";
        echo "<td>&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>" . $filaC['champ2'] . "</td>";

        $a++;
       
    }
    echo "</table>";
} else {
    echo "<br>".NO_RESULTADOS."<br>";
}


echo '<p><strong>============ '.FRASE_5.' ================</strong></p>';

$queryD = "select* from f9275 order by champ1";

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
        
        $val_4[] = $filaD['champ1'];
        $array_4 = devolverPosicion($val_4);

        sendValue($a, label($array_4,$filaD['champ1']), limpia_espacios($filaD['champ1']));

        echo "<tr><td><button onclick='setLbl(".label($array_4,$filaD['champ1']).")' id='btn" . $a . "'>" . $filaD['champ1'] . "</button></td>";
        echo "<td>&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>" . $filaD['champ2'] . "</td>";

        $a++;
       
    }
    echo "</table>";
} else {
    echo "<br>".NO_RESULTADOS."<br>";
}


pg_close($conexion);*/

