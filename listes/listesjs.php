<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include_once '../utilities/utilities.php';
//lireList('Z');

function lireList($id) {


    $a = 0;
    $b = 0;
    $c = 0;
      if (detect() !== 'LINUX') {
          
          $pathList = 'js/sondeList.js';
          
      }else{
    
          $pathList = '/var/www/html/graph.js';
    
      }

    if ($pathList != null) {

        $fichierljs = $pathList;

        if (file_exists($fichierljs)) {

            $myfile1 = fopen($fichierljs, "rb") or die(NO_ARCHIVO);

            // Output one line until end-of-file

            if($id==='AFT'){
                
                $idd= substr($id, 0, -2);
                $iddd=substr($id, 1, 1);
                $idddd=substr($id, 2, 1); 
                
            }else{
                
                $idd= $id;
                $iddd=$id;
                $idddd=$id;
            }
	
	echo"<div class='container'>
                        <div class='row'>
                    <div class='box clearfix'>";
        
              echo"<script>
                    $(document).ready( function () {
                      $('#bootstrap-table').bdt();
                      });
                    </script>";
        
          

            echo "<table class='table table-hover' id='bootstrap-table'>
					
		 <thead>
                            <tr>
                            <th style='width:30px;'><span>ID</span></th>
                            <th style='width:250px;'><span>Description</span></th>
                            
                            </tr>
					</thead>
                                        <tbody>";
            

            while (!feof($myfile1)) {

                $str1 = ltrim(fgets($myfile1, 1024) . "<br>");
                $record1 = explode("=", $str1);

                $pos = strpos($record1[0], $idd);
                $poss = strpos($record1[0], $iddd);
                $posss = strpos($record1[0], $idddd);

                if ($pos||$poss||$posss) {

                    $resultado = str_replace("<br>", " ", $record1[1]);
                    $resultadof= str_replace(";", " ",$resultado);

                        sendValue($a, limpia_espacios(substr($record1[0], 7, -3)),$resultadof, $idd);
                        echo "<tr id='filter_global'><td class='sorting_1'><button  id='btn" . $a . "'>" . substr($record1[0], 7, -3) . "</button></td>";
                        //echo "<tbody><tr id='filter_global'><td class='sorting_1'><button  id='btn" . $a . "'>" . substr($record1[0], 7, -3) . "</button></td>";

                    echo "<td class='sorting_1'>".$record1[1] ."</tr></td>";

                    $a++;
                }
            }

            echo "</tbody></table>";
	    echo"</div></div></div>";

        } else {

            echo $fichierljs . " No existe";
        }
    }
}
