<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function sendValue($a, $c, $v, $s) {

    $val = $a;
         echo  '<script>'
    
    . '
        
      var ser = "' . $s . '";
          
       function validerChamp(){
 
       
        //console.log("Test---------------------------------------------"+document.getElementById("tf0").value);
        if(document.getElementById("tf0").value == "" && ser != "S" ){
		console.log("You entered: " + document.getElementById("tf0").value);
                
                return 0;
               
                }
        if(document.getElementById("tf1").value == "" && ser != "S"){
		console.log("You entered: " + document.getElementById("tf1").value);
                
                return 1;
               
                }
        if(document.getElementById("tf2").value == "" && ser != "S"){
		console.log("You entered: " + document.getElementById("tf2").value);
                
                return 2;
               
                }
         if(document.getElementById("tf3").value == "" && ser != "S"){
		console.log("You entered: " + document.getElementById("tf3").value);
                
                return 3;
               
                }
        if(document.getElementById("tf4").value == "" && ser != "S"){
		console.log("You entered: " + document.getElementById("tf4").value);
                
                return 4;
               
                }
         if(document.getElementById("tf5").value == "" && ser != "S"){
		console.log("You entered: " + document.getElementById("tf5").value);
                
                return 5;
               
                }
         if(document.getElementById("tf6").value == "" && ser != "S"){
		console.log("You entered: " + document.getElementById("tf6").value);
                
                return 6;
               
                }
        if(document.getElementById("tf7").value == "" && ser != "S"){
		console.log("You entered: " + document.getElementById("tf7").value);
                
                return 7;
               
                }
        else if(ser === "S"){
		console.log("You entered: " + document.getElementById("tf8").value);
                
                return 8;
               
                }
	
        }

            function valeurChamp(){
                    
                    //console.log("textLabel---------"+validerChamp());
                    var tf;

                
                                    textField = "#tf"+validerChamp();
                                    //console.log("El textField---------"+textField+"----------------------Esta ocupado--------------------------");
                                    textLabel = "#lbl"+validerChamp();
	
        }

    ' . '</script>' .
    '<script>
                            $(document).ready(function () {                     
                             $("#btn' . $val . '").click(function(){
                                 
                                 var txt' . $val . ' = "' . $c . '";
                                 var tx' . $val . ' = ' . $v . ';
                                     
                                 var vc = "#tf"+validerChamp();
                                 var vb = "#lbl"+validerChamp();
                                 
                                    $(vc).val(txt' . $val . ');
                                    $(vb).val(tx' . $val . ');
                                    
                                    valeurChamp();
                                    return false;    
                                    
                                });
                        });
                          
             
                    </script>';
    
}



function limpia_espacios($cadena) {
    $cadena = str_replace(' ', '', $cadena);
    return $cadena;
}

function detect() {
    $os = array("WIN", "MAC", "LINUX");
    $info['os'] = "OTHER";

    foreach ($os as $val) {
        if (strpos(strtoupper($_SERVER['SERVER_SOFTWARE']), $val) !== false)
            $info['os'] = $val;
    }

    foreach ($info as $value) {

        $sisop = $value;
    }


    return $sisop;
}

function partition($list, $p) {
    $listlen = count($list);
    $partlen = floor($listlen / $p);
    $partrem = $listlen % $p;
    $partition = array();
    $mark = 0;
    for ($px = 0; $px < $p; $px++) {
        $incr = ($px < $partrem) ? $partlen + 1 : $partlen;
        $partition[$px] = array_slice($list, $mark, $incr);
        $mark += $incr;
    }
    return $partition;
}

function array_chunk_columns($data, $num_columns) {
    $n = count($data);
    $per_column = floor($n / $num_columns);
    $rest = $n % $num_columns;

    $columns = array();
    $index = 0;
    for ($i = 0; $i < $num_columns; $i++) {
        // Add an extra item to each column while the column number is less than the
        // remainder.
        $add_rest = ($rest && ($i < $rest)) ? 1 : 0;
        $number = $per_column + $add_rest;
        $columns[] = array_slice($data, $index, $number);
        $index += $number;
    }

    return $columns;
}

function break_array($array, $page_size) {

    $arrays = array();
    $i = 0;

    foreach ($array as $index => $item) {
        if ($i++ % $page_size == 0) {
            $arrays[] = array();
            $current = & $arrays[count($arrays) - 1];
        }
        $current[] = $item;
    }

    return $arrays;
}

/* function devolverPosicion($arrobj) {

  if ($arrobj) {

  $avPos = array_chunk($arrobj, 8);

  }
  return $avPos;
  } */

function label($array, $palabra_a_buscar) {
    foreach ($array as $key => $value) {
        $indice = array_search($palabra_a_buscar, $value);
    }

    return($indice);
}
