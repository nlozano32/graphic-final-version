<?php

$_SESSION["Sonde1"] = "sonde1";
$_SESSION["Sonde2"] = "sonde2";
$_SESSION["Sonde3"] = "sonde3";
$_SESSION["Sonde4"] = "sonde4";
$_SESSION["Sonde5"] = "sonde5";

$info = detect();
$_SERVER['SERVER_SOFTWARE'];

//echo "SO: ".$info["os"];


/* Cette function lire le fichier qui correspond a un sensor */


ini_set('memory_limit', '-1');



function ejes($arr, $n) {

    if ($arr) {

        while ($row = array_shift($arr)) {

            if (isset($row[$n])) {

                $arr2 = $row[$n];
            } else {

                $arr2 = 1;
            }
        }
    }

    $a = array($arr2);

    foreach ($a as $key => $value) {

        $values = $value . " , ";
    }

    $ejX = array_filter(explode(" , ", $values));

    $var = implode('', $ejX) . ' ';
    //print_r($var);
    return $var;
}

//print_r(detect());

function array_combineV4($arr1, $arr2) {
    $out = array();
    foreach ($arr1 as $key1 => $value1) {
        $out[$value1] = $arr2[$key1];
    }
    return $out;
}

function leerString($sonde1X, $sonde1Y, $sonde12Y, $sonde2X, $sonde2Y, $sonde22Y, $sonde3X, $sonde3Y, $sonde32Y, $sonde4X, $sonde4Y, $sonde42Y, $sonde5X, $sonde5Y, $sonde52Y, $sonde6X, $sonde6Y, $sonde62Y, $sonde7X, $sonde7Y, $sonde72Y,$sonde8X, $sonde8Y, $sonde82Y,
                    $sonde9X, $sonde92X,$sonde9Y, $sonde92Y) {
    
    //print_r(count($sonde1X));
    //echo'</br>';
    //print_r(count($sonde9X));
    $s1 = SERVICIO_INFO_ME;
    $s2 = SERVICIO_INFO_ST;
    $g1 = "<"; 
    $g2 = "script src='js/graphic.js'><";
    $g3="/script>";
    $c1='
        
       function ejes(sonde1X, sonde1Y, sonde12Y, sonde2X, sonde2Y, sonde22Y, sonde3X, sonde3Y, sonde32Y, sonde4X, sonde4Y, sonde42Y, sonde5X, sonde5Y, sonde52Y, sonde6X, sonde6Y, sonde62Y, sonde7X, sonde7Y, sonde72Y, sonde8X, sonde8Y, sonde82Y, sonde9X, sonde92X, sonde9Y, sonde92Y, rangeMin, rangeMax) {
                
           
    esonde1X = sonde1X;
    esonde1Y = sonde1Y;
    esonde12Y = sonde12Y;
    esonde2X = sonde2X;
    esonde2Y = sonde2Y;
    esonde22Y = sonde22Y;
    esonde3X = sonde3X;
    esonde3Y = sonde3Y;
    esonde32Y = sonde32Y;
    esonde4X = sonde4X;
    esonde4Y = sonde4Y;
    esonde42Y = sonde42Y;
    esonde5X = sonde5X;
    esonde5Y = sonde5Y;
    esonde52Y = sonde52Y;
    esonde6X = sonde6X;
    esonde6Y = sonde6Y;
    esonde62Y = sonde62Y;
    esonde7X = sonde7X;
    esonde7Y = sonde7Y;
    esonde72Y = sonde72Y;
    esonde8X = sonde8X;
    esonde8Y = sonde8Y;
    esonde82Y = sonde82Y;
    esonde9X = sonde9X;
    esonde92X = sonde92X;
    esonde9Y = sonde9Y;
    esonde92Y = sonde92Y;

    erangeMin = rangeMin;
    erangeMax = rangeMax;


    if (erangeMax < erangeMin) {

        document.write(erangeMax);
        document.write(erangeMin);
        
        document.write("Range min. should be less than range max.");

    } else {
        
       document.write("'.$g1.'"+"'.$g2.'"+"'.$g3.'");
      
      
       console.log("'.$g1.'"+"'.$g2.'"+"'.$g3.'"+"--------------------Entra aca");
           
   
    }

}

function lireSonde() {


    var valS1 = [];
    var valS2 = [];
    var valS3 = [];
    var valS4 = [];
    var valS5 = [];
    var valS6 = [];
    var valS7 = [];
    var valS8 = [];
    var valS9 = [];
    var valS29 = [];
    

    for (var i = 0; i < 10000; i++)  
    {';
    
   $c2a = 'valS1.push({x: esonde1X[i], y: esonde1Y[i]});';
   $c2b = 'valS2.push({x: esonde2X[i], y: esonde2Y[i]});';
   $c2c = 'valS3.push({x: esonde3X[i], y: esonde3Y[i]});';
   $c2d = 'valS4.push({x: esonde4X[i], y: esonde4Y[i]});';
   $c2e = 'valS5.push({x: esonde5X[i], y: esonde5Y[i]});';
   $c2f = 'valS6.push({x: esonde6X[i], y: esonde6Y[i]});';
   $c2g = 'valS7.push({x: esonde7X[i], y: esonde7Y[i]});';
   $c2h = 'valS8.push({x: esonde8X[i], y: esonde8Y[i]});';
  

   $c3 = 'valS9.push({x: esonde9X[i], y: esonde9Y[i]});
          valS29.push({x:esonde92X[i], y: esonde92Y[i]});';
   
   $c4 = '}return [';
   
   $c5a = '{
       
            values: valS1,
            key:  "Sensor 1", 
            color: "#2222ff"
        },';
   
    $c5b = '{
            values: valS2,
            key: "Sensor 2", 
            color: "#2ca02c"
        },';
    
    $c5c = ' {
            values: valS3,
            key: "Sensor 3",
            color: "#2B9EA0"
        },';
    
    $c5d = ' {
            values: valS4,
            key: "Sensor 4",
            color: "#FF214B"
        },';
    
    $c5e = ' {
            values: valS5,
            key: "Sensor 5",
            color: "#D1D12F"
        },';
    
    $c5f = ' {
            values: valS6,
            key: "Sensor 6",
            color: "#DF16E4"
        },';
    
     $c5g = '{
            values: valS7,
            key: "Sensor 7",
            color: "#41BCCB"
        },';
    
    $c5h = '{
            values: valS8,
            key: "Sensor 8",
            color: "#0F0F0F"
        },';
     
        $c6 = '{
            values: valS9,
            key: "Service - '.$s1.'",
            color: "#cc99ff"
        },
        
        {
            values: valS29,
            key: "Service - '.$s2.'",
            color: "#cc6699"
        }';

    $rangeMin = $_POST['rangeMin'];
    $rangeMax = $_POST['rangeMax'];

    if (isset($_POST['rangeMin']) && isset($_POST['rangeMax'])) {

        echo "\n" . '<script type="text/javascript">';

        echo "\nvar sonde1X_js = new Array(" . implode(',', $sonde1X) . ");";
        echo "\nvar sonde1Y_js = new Array(" . implode(",", $sonde1Y) . ");";
        echo "\nvar sonde12Y_js = new Array(" . implode(",", $sonde12Y) . ");";
        echo "\nvar sonde2X_js = new Array(" . implode(",", $sonde2X) . ");";
        echo "\nvar sonde2Y_js = new Array(" . implode(",", $sonde2Y) . ");";
        echo "\nvar sonde22Y_js = new Array(" . implode(",", $sonde22Y) . ");";
        echo "\nvar sonde3X_js = new Array(" . implode(",", $sonde3X) . ");";
        echo "\nvar sonde3Y_js = new Array(" . implode(",", $sonde3Y) . ");";
        echo "\nvar sonde32Y_js = new Array(" . implode(",", $sonde32Y) . ");";
        echo "\nvar sonde4X_js = new Array(" . implode(",", $sonde4X) . ");";
        echo "\nvar sonde4Y_js = new Array(" . implode(",", $sonde4Y) . ");";
        echo "\nvar sonde42Y_js = new Array(" . implode(",", $sonde42Y) . ");";
        echo "\nvar sonde5X_js = new Array(" . implode(",", $sonde5X) . ");";
        echo "\nvar sonde5Y_js = new Array(" . implode(",", $sonde5Y) . ");";
        echo "\nvar sonde52Y_js = new Array(" . implode(",", $sonde52Y) . ");";
        echo "\nvar sonde6X_js = new Array(" . implode(",", $sonde6X) . ");";
        echo "\nvar sonde6Y_js = new Array(" . implode(",", $sonde6Y) . ");";
        echo "\nvar sonde62Y_js = new Array(" . implode(",", $sonde62Y) . ");";
        echo "\nvar sonde7X_js = new Array(" . implode(",", $sonde7X) . ");";
        echo "\nvar sonde7Y_js = new Array(" . implode(",", $sonde7Y) . ");";
        echo "\nvar sonde72Y_js = new Array(" . implode(",", $sonde72Y) . ");";
        echo "\nvar sonde8X_js = new Array(" . implode(",", $sonde8X) . ");";
        echo "\nvar sonde8Y_js = new Array(" . implode(",", $sonde8Y) . ");";
        echo "\nvar sonde82Y_js = new Array(" . implode(",", $sonde82Y) . ");";
        echo "\nvar sonde9X_js = new Array(" . implode(",", $sonde9X) . ");";
        echo "\nvar sonde92X_js = new Array(" . implode(",", $sonde92X) . ");";
        echo "\nvar sonde9Y_js = new Array(" . implode(",", $sonde9Y) . ");";
        echo "\nvar sonde92Y_js = new Array(" . implode(",", $sonde92Y) . ");";

        echo 'ejes(sonde1X_js,sonde1Y_js,sonde12Y_js,sonde2X_js,sonde2Y_js, sonde22Y_js,sonde3X_js,sonde3Y_js, sonde32Y_js,sonde4X_js,sonde4Y_js,sonde42Y_js,sonde5X_js,sonde5Y_js,sonde52Y_js,sonde6X_js,sonde6Y_js,sonde62Y_js,sonde7X_js,sonde7Y_js,sonde72Y_js,sonde8X_js,sonde8Y_js,sonde82Y_js,sonde9X_js,sonde92X_js, sonde9Y_js,sonde92Y_js,'
        . $rangeMin . ',' . $rangeMax . ');';
        
         $c1p = str_replace("<br/>", " ",$c1);
         echo ($c1p);

        if(count($sonde1X)>1){

          $c2pa = str_replace("<br/>", " ",$c2a);
          echo ($c2pa);
        }
        
        if(count($sonde2X)>1){

          $c2pb = str_replace("<br/>", " ",$c2b);
          echo ($c2pb);
        }
        
         if(count($sonde3X)>1){

          $c2pc = str_replace("<br/>", " ",$c2c);
          echo ($c2pc);
        }
        
         if(count($sonde4X)>1){

          $c2pd = str_replace("<br/>", " ",$c2d);
          echo ($c2pd);
        } 
        
         if(count($sonde5X)>1){

          $c2pe = str_replace("<br/>", " ",$c2e);
          echo ($c2pe);
        } 
        
         if(count($sonde6X)>1){

          $c2pf = str_replace("<br/>", " ",$c2f);
          echo ($c2pf);
        } 
        
        if(count($sonde7X)>1){

          $c2pg = str_replace("<br/>", " ",$c2g);
          echo ($c2pg);
        } 
        
          if(count($sonde8X)>1){

          $c2ph = str_replace("<br/>", " ",$c2h);
          echo ($c2ph);
        } 
    
    if(count($sonde9X)>1){
        
          $c3p = str_replace("<br/>", " ",$c3);
          echo ($c3p);      
        } 
    
    $c4p = str_replace("<br/>", " ",$c4);
    echo str_replace("<br/>", " ",$c4p);  
          
    if(count($sonde1X)>1){ 
          $c5pa = str_replace("<br/>", " ",$c5a);
          echo str_replace("<br/>", " ",$c5pa);
    }
    
    if(count($sonde2X)>1){ 
          $c5pb = str_replace("<br/>", " ",$c5b);
          echo str_replace("<br/>", " ",$c5pb);
    }
    
    if(count($sonde3X)>1){ 
          $c5pc = str_replace("<br/>", " ",$c5c);
          echo str_replace("<br/>", " ",$c5pc);
    }
    
     if(count($sonde4X)>1){ 
          $c5pd = str_replace("<br/>", " ",$c5d);
          echo str_replace("<br/>", " ",$c5pd);
    }
    
     if(count($sonde5X)>1){ 
          $c5pe = str_replace("<br/>", " ",$c5e);
          echo str_replace("<br/>", " ",$c5pe);
    }
    
     if(count($sonde6X)>1){ 
          $c5pf = str_replace("<br/>", " ",$c5f);
          echo str_replace("<br/>", " ",$c5pf);
    }
    
    if(count($sonde7X)>1){ 
          $c5pg = str_replace("<br/>", " ",$c5g);
          echo str_replace("<br/>", " ",$c5pg);
    }
    
     if(count($sonde8X)>1){ 
          $c5ph = str_replace("<br/>", " ",$c5h);
          echo str_replace("<br/>", " ",$c5ph);
    }
    
    if(count($sonde9X)>1){
    $c6p = str_replace("<br/>", " ",$c6);
          echo str_replace("<br/>", " ",$c6p); 
    }
    echo ' ]';
    
echo '}';

        echo "\n</script>";
    }
}

function getSonde() {

    if (isset($_POST['sonde0'])) {

            $fichierS1 = $_POST['sonde0'];
 
        if(strlen($fichierS1) > 0){
            
            $fichierS1 = $_POST['sonde0'];
            
            $arrays1 =lireFichier($fichierS1);

            $ejexs1 = $arrays1[0];
            $ejeys1 = $arrays1[1];
            $ejeys21 = $arrays1[2];
            
        }else{
            
            $ejexs1 = array(0);
            $ejeys1 = array(0);
            $ejeys21 = array(0);
          
        }

        $fichierS2 = $_POST['sonde1'];

        if (strlen($fichierS2) > 0) {

            $fichierS2 = $_POST['sonde1'];

            $arrays2 = lireFichier($fichierS2);

            $ejexs2 = $arrays2[0];
            $ejeys2 = $arrays2[1];
            $ejeys22 = $arrays2[2];
            
        } else {

            $ejexs2 = array(0);
            $ejeys2 = array(0);
            $ejeys22 = array(0);
        }

        $fichierS3 = $_POST['sonde2'];

        if (strlen($fichierS3) > 0) {

            $fichierS3 = $_POST['sonde2'];

            $arrays3 = lireFichier($fichierS3);

            $ejexs3 = $arrays3[0];
            $ejeys3 = $arrays3[1];
            $ejeys23 = $arrays3[2];
        } else {

            $ejexs3 = array(0);
            $ejeys3 = array(0);
            $ejeys23 = array(0);
        }

        $fichierS4 = $_POST['sonde3'];

        if (strlen($fichierS4) > 0) {

            $fichierS4 = $_POST['sonde3'];

            $arrays4 = lireFichier($fichierS4);

            $ejexs4 = $arrays4[0];
            $ejeys4 = $arrays4[1];
            $ejeys24 = $arrays4[2];
        } else {

            $ejexs4 = array(0);
            $ejeys4 = array(0);
            $ejeys24 = array(0);
        }

        $fichierS5 = $_POST['sonde4'];
      
        if (strlen($fichierS5) > 0) {

            $fichierS5 = $_POST['sonde4'];

            $arrays5 = lireFichier($fichierS5);

            $ejexs5 = $arrays5[0];
            $ejeys5 = $arrays5[1];
            $ejeys25 = $arrays5[2];
            
        } else {

            $ejexs5 = array(0);
            $ejeys5 = array(0);
            $ejeys25 = array(0);
        }

        $fichierS6 = $_POST['sonde5'];

        if (strlen($fichierS6) > 0) {

            $fichierS6 = $_POST['sonde5'];

            $arrays6 = lireFichier($fichierS6);

            $ejexs6 = $arrays6[0];
            $ejeys6 = $arrays6[1];
            $ejeys26 = $arrays6[2];
        } else {

            $ejexs6 = array(0);
            $ejeys6 = array(0);
            $ejeys26 = array(0);
        }

        $fichierS7 = $_POST['sonde6'];

        if (strlen($fichierS7) > 0) {

            $fichierS7 = $_POST['sonde6'];

            $arrays7 = lireFichier($fichierS7);

            $ejexs7 = $arrays7[0];
            $ejeys7 = $arrays7[1];
            $ejeys27 = $arrays7[2];
        } else {

            $ejexs7 = array(0);
            $ejeys7 = array(0);
            $ejeys27 = array(0);
        }

        $fichierS8 = $_POST['sonde7'];

        if (strlen($fichierS8) > 0) {

            $fichierS8 = $_POST['sonde7'];

            $arrays8 = lireFichier($fichierS8);

            $ejexs8 = $arrays8[0];
            $ejeys8 = $arrays8[1];
            $ejeys28 = $arrays8[2];
        } else {

            $ejexs8 = array(0);
            $ejeys8 = array(0);
            $ejeys28 = array(0);
        }
        
        $fichierS9 = $_POST['sonde8'];

        if (strlen($fichierS9) > 0) {

            $fichierS8 = $_POST['sonde8'];

            $arrays9 = lireFichier($fichierS8);

            $ejexs9 = $arrays9[0];
            $ejexs29 = $ejexs9;
            $ejeys9 = $arrays9[1];
            $ejeys29 = $arrays9[2];
            
        } else {

            $ejexs9 = array(0);
            $ejexs29 = array(0);
            $ejeys9 = array(0);
            $ejeys29 = array(0);
        }

        leerString($ejexs1, $ejeys1, $ejeys21, $ejexs2, $ejeys2, $ejeys22, $ejexs3, $ejeys3, $ejeys23, $ejexs4, $ejeys4, $ejeys24, $ejexs5, $ejeys5, $ejeys25, $ejexs6, $ejeys6, $ejeys26, $ejexs7, $ejeys7, $ejeys27,$ejexs8, $ejeys8,  $ejeys28, $ejexs9, $ejexs29, $ejeys9,  $ejeys29);
    }
}

function lireFichier($fichierS) {

    //Environnement de travail

    if (detect() !== 'LINUX') {


        $path = 'C:\\HIST\\';
    } else {

        $path = '/home/surv3/HIST/';
    }

    //Vrai vie
    //$path = '/home/surv3/HIST/';
    //$pathtest = 'C:\\Users\\benoit\\Desktop\\Web\\HIST\\';
    //$path = '/home/surv3/HIST/';

    if (isset($_POST['dateI'])) {

        $dateFormI = $_POST['dateI'];
    
        //echo 'date avec apple----------------------------'.$dateFormI.'<br>';

        $dateLabelI = '';
        $dateLabelF = '';

        $anne = substr($dateFormI, 0, 4);
        $mois = substr($dateFormI, 5, -3);
        $jour = substr($dateFormI, 8);

        $dateFormIC = $anne . $mois . $jour;

        /* echo 'Anne----------------------------'.$anne.'<br>';
          echo 'Mois----------------------------'.$mois.'<br>';
          echo 'jour----------------------------'.$jour.'<br>'; */


        if (isset($_POST['dateF'])) {

            $dateFormF = $_POST['dateF'];


            if (strlen($dateFormF) == 0) {

                $dateFormFC = $dateFormIC;
            } else {

                $dateFormF = $_POST['dateF'];

                $anneF = substr($dateFormF, 0, 4);
                $moisF = substr($dateFormF, 5, -3);
                $jourF = substr($dateFormF, 8);

                $dateFormFC = $anneF . $moisF . $jourF;
            }
        }

        if ($fichierS != null) {

            //$fichierA1 = $pathtest . 'A' . $anne . '\\' . 'M' . $mois . '\\' . $fichierS1;
            $fichierA1 = $path . 'A' . $anne . '/' . 'M' . $mois . '/' . $fichierS;

            //print_r($fichierA1);
            echo '<br>';

            if (file_exists($fichierA1)) {

                //echo "Le fichier " . $fichierS . " EXIST!!!!\n</br>";

                $myfile1 = fopen($fichierA1, "rb") or die(NO_ARCHIVO);

                // Output one line until end-of-file

                while (!feof($myfile1)) {

                    //$str1 = fgets($myfile1) . "<br>";

                    $str1 = ltrim(fgets($myfile1, 1024) . "<br>");

                    $record1 = explode(" ", $str1);


                    if ($record1[0] >= $dateFormIC && $record1[0] <= $dateFormFC) {

                        $arrayS = (array($record1));
                        $dateLabelI = $dateFormIC;
                        $dateLabelF = $dateFormFC;

                        if(substr($fichierS, 0, -4)==="S"){
                            
                            $ejeXi1 = ejes($arrayS, 0);
                            //$sondeArrayXi1 = array($ejeXi1);

                            $ejeX1 = ejes($arrayS, 1);
                            //$sondeArrayX1 = array($ejeX1);

                            $sondex[] = $ejeXi1.$ejeX1;

                            $ejeY1 = ejes($arrayS, 2);
                            $sondeArrayY1 = array($ejeY1);

                            foreach ($sondeArrayY1 as $key => $value) {

                                 $sondey1[] = $value;
                                }
                                
                            $ejeY2 = ejes($arrayS, 3);
                            $sondeArrayY2 = array($ejeY2);

                            foreach ($sondeArrayY2 as $key => $value) {

                                 $sondey2[] = $value;
                                }
 
                        }else{
                            
                           $ejeXi1 = ejes($arrayS, 0);
                            //$sondeArrayXi1 = array($ejeXi1);

                            $ejeX1 = ejes($arrayS, 1);
                            //$sondeArrayX1 = array($ejeX1);

                            $sondex[] = $ejeXi1.$ejeX1;

                            $ejeY1 = ejes($arrayS, 4);
                            $sondeArrayY1 = array($ejeY1);

                            foreach ($sondeArrayY1 as $key => $value) {

                                 $sondey1[] = $value;
                                 $sondey2 = array(0);
                                }

                        }
                    } else {

                        $dateLabelI === NULL;
                    }
                }

                foreach ($sondex as $key => $value) {
    
                   
                   // print_r($sondex[2]);

                    $out = $sondex[$key];


                        $anne = intval(substr($out, 0, 4));
                        $mois = intval(substr($out, 4, -10));
                        $jour = intval(substr($out, 6, -8));

                        $heure = intval(substr($out, 8, -5));
                        $min = intval(substr($out, 11, -3));
                        $sec = intval(substr($out, 13));
                        
                        //print_r(gettype($anne).'/'.gettype($mois).'/'.gettype($jour).' T '.gettype($heure).':'.gettype($min).':'.gettype($sec).'</br>');

                    $sondexdateA[] = (mktime($heure, $min, $sec, $mois, $jour, $anne)) * 1000;
                    }

                    //print_r($sondexdateA);*/

                if (isset($sondexdateA)) {

                    //print_r($sondexdateA);

                    $sonde = array($sondexdateA, $sondey1, $sondey2);

                    return $sonde;
                } else {

                    $dateLabelI = $fichierS . ' ' . "---" . ' ' . ARCHIVO_3;
                    echo $dateLabelI;
                }

                fclose($myfile1);
            } else {

                $dateLabelI = $fichierS . ' ' . "---" . ' ' . ARCHIVO_4;
                
                echo $dateLabelI;
            }
        } else {

            echo ARCHIVO_1 . ' ' . $fichierS . ' ' . ARCHIVO_2 . "\n</br>";
        }
    } else {

        echo VALIDACION_1;
    }
}
?>




