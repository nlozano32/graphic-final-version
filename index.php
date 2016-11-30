<?php
session_start();

if (isset($_GET['idioma'])) {

    $_SESSION['idiomas'] = $_GET['idioma'];
} else {

    $_SESSION['idiomas'] = 'EN';
}

include 'utilities/languajes/lang_' . $_SESSION['idiomas'] . '.php';


if (isset($_GET['id'])) {

    $_SESSION['id'] = $_GET['id'];
} else {

    $_SESSION['id'] = '0';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Damatex inc. Graphic</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
        <script src="js/jquery-1.11.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed --> 
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/lib/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/lib/holderjs/holder.js"></script>
        <script>
            Holder.add_theme("white", {background: "#fff", foreground: "#a7a7a7", size: 10});
        </script>
        <script type="text/javascript" src="assets/lib/keen-js/dist/keen.min.js"></script>
        <script type="text/javascript" src="assets/js/meta.js"></script>
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <link href="css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
            <link href="css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
                <link href="css/fonts.css" rel="stylesheet" type="text/css">
                    <script src="js/vendor/jquery.sortelements.js" type="text/javascript"></script>
                    <link href="css/style.css" type="text/css" rel="stylesheet">
                        <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                        <link href="assets/css/keen-dashboards.css" rel="stylesheet" type="text/css"/>
                        <link href="build/nv.d3.css" rel="stylesheet" type="text/css"/>
                        <link rel='stylesheet' type='text/css' href='css/jquery.dataTables.css'>
                            <script src="js/d3.min.js" charset="utf-8"></script>
                            <script src="build/nv.d3.js"></script>
                            <script src="js/sondeFunction.js"></script>
                             <?php 
                            
                                        include_once 'utilities/utilities.php';
                            
                                        if (detect() !== 'LINUX') {
          
                                        echo '<script src="js/sondeList.js"></script>';

                                    }else{

                                        echo '<script src="/graph.js"></script>';
    
                                }?>
                           
                            <script src="js/jquery.bdt.js" type="text/javascript"></script>
                            <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet"></link>
                          
                            </head>

   
    
                        <body class="application">
                                
                                    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                                        <div class="container-fluid">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    
                                                </button>
                                                <div class="navbar-brand">
                                                    <img src="images/Damatex_logo_pag_principal.png" alt="Logo" width="240" height="66" />
                                                    <p><?php echo SISTEMAS_CONTROL; ?></p>
                                                </div>
                                            </div>

                                            <!--<a class="navbar-brand" href="./">Damatex control systems</a> -->
                                            <form  name="form1" method="post" > <!--onsubmit="return valeurChamp()"-->
                                            <div style="margin-top:40px">
                                                <div class="navbar-collapse collapse">
                                                    <ul class="nav navbar-nav navbar-left">

                                                        <li><button class='button' formmethod="post" formaction=<?php echo 'index.php?id=1&idioma=' . $_SESSION['idiomas']; ?>> <i class="fa fa-list-alt"></i> <?php echo SERVICIOS; ?></button></li>
                                                        <li><button class='button' formmethod="post" formaction=<?php echo 'index.php?id=2&idioma=' . $_SESSION['idiomas']; ?>> <i class="fa fa-list-alt"></i> <?php echo SENSORES; ?></button></li>
                                                        <li><button class='button' formmethod="post" formaction=<?php echo 'index.php?id=3&idioma=' . $_SESSION['idiomas']; ?>> <i class="fa fa-list-alt"></i> <?php echo SENSORES . '-Cumul'; ?></li>
                                                        
                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    </div>
                                    

                                    <div class="container-fluid">

                                        <div class="row">
                                            
                                          
                                            <div class="col-sm-3">
                                                <div class="chart-wrapper">
                                                     <div class="chart-title">
                                                        <input type="submit" class='buttonL' formmethod="post" value= "English" formaction= <?php echo 'index.php?id=' . $_SESSION['id'] . '&idioma=EN'; ?>> 
                                                        <input type="submit" class='buttonL' formmethod="post" value= "Francais" formaction= <?php echo 'index.php?id=' . $_SESSION['id'] . '&idioma=FR'; ?>>
                                                        <input type="submit" class='buttonL' formmethod="post" value= "Espa&ntilde;ol" formaction= <?php echo 'index.php?id=' . $_SESSION['id'] . '&idioma=ES'; ?>>
                                                     </div> 
                                                    <div class="chart-stage">
                                                        <div style="padding-top:10px;">

                                                            <p><h4><?php echo MEDIDA; ?></h4></p>
                                                            <input type="hidden" value = '1' name="sondeS"/> 
                                                            <p><button type="submit" class="buttonExe"  formmethod="post" formaction=<?php echo 'index.php?id=4&idioma=' . $_SESSION['idiomas']; ?>   ><i class="fa fa-area-chart"></i> <?php echo EJECUTAR ; ?></button></p>
                                                            <table width="223" height="78" border="0" cellpadding="0" cellspacing="0" class="table_a">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="97" height="37"><h5>*
<?php
echo RANGO;
echo ' ' . MINIMO;
?>
                                                                            </h5></td>
                                                                        <td width="10">&nbsp;</td>
                                                                        <td width="122" height="37"><h5>*
<?php
echo RANGO;
echo ' ' . MAXIMO;
?>
                                                                            </h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="41"><strong>
                                                                                <input type="text"  class="form-control" name="rangeMin" maxlength="4" size="6" value = '<?php
                                                                                $rmin = 0;
                                                                                if (isset($_POST['rangeMin'])) {
                                                                                    $rmin = $_POST['rangeMin'];
                                                                                    echo $rmin;
                                                                                } else {
                                                                                    echo $rmin;
                                                                                }
?>' />
                                                                            </strong></td>
                                                                        <td>&nbsp;</td>
                                                                        <td><strong>
                                                                                <input type="text"  class="form-control" name="rangeMax" maxlength="4" size="6" value = '<?php
                                                                                $rmax = 10;
                                                                                if (isset($_POST['rangeMax'])) {
                                                                                    $rmax = $_POST['rangeMax'];
                                                                                    echo $rmax;
                                                                                } else {
                                                                                    echo $rmax;
                                                                                }
?>'/>
                                                                            </strong></td>
                                                                    </tr>
                                                                </tbody>

                                                            </table>
                                                            <p>&nbsp;</p>
                                                            <table width="218" border="0" cellspacing="0" cellpadding="0" class="table_a">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="218" ><h5 style="font-size:8;">*
<?php
echo FECHA_INICIO;

?>
                                                                                :</h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><h5 style="font-size:8;">
                                                                                <input type="date" class="form-control" name="dateI" maxlength="10" size="11"  placeholder='<?php echo  aaaa_mm_dd ; ?>' value = '<?php
                                                                                if (isset($_POST['dateI'])) {
                                                                                    $d1 = $_POST['dateI'];
                                                                                    echo $d1;
                                                                                }
?>' />
                                                                            </h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><h5 style="font-size:8;">
<?php
echo FECHA_FINAL;

?>
                                                                                :</h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><h5 style="font-size:8;">
                                                                                <input type="date" class="form-control" name="dateF" maxlength="10" size="11" placeholder='<?php echo aaaa_mm_dd ; ?>' value = '<?php
                                                                                if (isset($_POST['dateF'])) {
                                                                                    $d2 = $_POST['dateF'];
                                                                                    echo $d2;
                                                                                }
?>' />
                                                                            </h5></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <p style="font-style:italic">&nbsp;</p>
                                                            <br>
                                                                <!-- <div id="test3"></div> -->

                                                                <table width="223" border="0" cellspacing="0" cellpadding="0" class="table_a">
                                                                       <tbody>
                                                                           <tr>
                                                                               <input type="hidden" name="sondeoc" value="4"></input>
                                                                       <td colspan="3"><h5 style="color:#993300;"><?php echo SERVICIO; ?> :</h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80"><span style="color:#993300;">
                                                                                <input type="text"  class="form-control" name="sonde8" maxlength="5" size="5" value = '<?php
                                                                                $s8 = " ";
                                                                                if (isset($_POST['sonde8'])) {
                                                                                    $s8 = $_POST['sonde8'];
                                                                                    echo $s8;
                                                                                }else{
                                                                                    
                                                                                    $lbl8 = " ";
                                                                                }
                                                                                ?>' onchange="setLbl(8)" id="tf8" onblur="validerChamp(8);"><div></input>
                                                                            </span></td>
                                                                        <td width="4">&nbsp;</td>
                                                                        <td width="139"><span style="color:#2222ff;">
                                                                                <input type="text" id="lbl8" name="lbl8" size="15"  placeholder=<?php echo DESCRIPCION; ?> class="form-control" value = '<?php
                                                                                if (isset($_POST['lbl8'])) {
                                                                                    $lbl8 = $_POST['lbl8'];
                                                                                    echo $lbl8;
                                                                                }
?>' readonly />
                                                                            </span></td>
                                                                    </tr>
                                                                       <tr>
                                                                       <td colspan="3"><h5 style="color:#2222ff;"><?php echo SENSOR; ?> 1: </h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80"><span style="color:#2222ff;">
                                                                                <input type="text"  class="form-control" name="sonde0" maxlength="5" size="5" value = '<?php
                                                                                $s0 = " ";
                                                                                if (isset($_POST['sonde0'])) {
                                                                                    $s0 = $_POST['sonde0'];
                                                                                    echo $s0;
                                                                                }else{
                                                                                    
                                                                                    $lbl0 = " ";
                                                                                }
                                                                                ?>' onchange="setLbl(0)" id="tf0" onblur="validerChamp(0);"><div></input>
                                                                            </span></td>
                                                                        <td width="4">&nbsp;</td>
                                                                        <td width="139"><span style="color:#2222ff;">
                                                                                <input type="text" id="lbl0" name="lbl0" size="15"  placeholder=<?php echo DESCRIPCION; ?> class="form-control" value = '<?php
                                                                                if (isset($_POST['lbl0'])) {
                                                                                    $lbl0 = $_POST['lbl0'];
                                                                                    echo $lbl0;
                                                                                }
?>' readonly />
                                                                            </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3"><h5 style="color:#2ca02c;"><?php echo SENSOR; ?> 2:&nbsp;</h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span style="color:#2ca02c;">
                                                                                <input type="text"  class="form-control" name="sonde1" maxlength="5" size="5" value = '<?php
                                                                                $s1 = " ";
                                                                                if (isset($_POST['sonde1'])) {
                                                                                    $s1 = $_POST['sonde1'];
                                                                                    echo $s1;
                                                                                }else{
                                                                                    
                                                                                    $s1 = " ";
                                                                                }
?>'onchange="setLbl(1)"id="tf1" onblur="validerChamp(1);"/>
                                                                            </span></td>
                                                                        <td>&nbsp;</td>
                                                                        <td><span style="color:#2ca02c;">
                                                                                <input type="text" id="lbl1" name="lbl1" size="15"  placeholder=<?php echo DESCRIPCION; ?> class="form-control" value = '<?php
                                                                                if (isset($_POST['lbl1'])) {
                                                                                    $lbl1 = $_POST['lbl1'];
                                                                                    echo $lbl1;
                                                                                    
                                                                                }
?>' readonly />
                                                                            </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3"><h5 style="color:#2B9EA0;"><?php echo SENSOR; ?> 3:</h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span style="color:#2B9EA0;">
                                                                                <input type="text" class="form-control" name="sonde2" maxlength="5" size="5" value = '<?php
                                                                                $s2 = " ";
                                                                                if (isset($_POST['sonde2'])) {
                                                                                    $s2 = $_POST['sonde2'];
                                                                                    echo $s2;
                                                                                }else{
                                                                                    
                                                                                    $s2 = " ";
                                                                                }
?>' onchange="setLbl(2)" id="tf2" onblur="validerChamp(2);"/>
                                                                            </span></td>
                                                                        <td>&nbsp;</td>
                                                                        <td><span style="color:#2B9EA0;">
                                                                                <input type="text" id="lbl2" name="lbl2" size="15"  placeholder=<?php echo DESCRIPCION; ?> class="form-control" value = '<?php
                                                                                if (isset($_POST['lbl2'])) {
                                                                                    $lbl2 = $_POST['lbl2'];
                                                                                    echo $lbl2;
                                                                                }
?>' readonly />
                                                                            </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3"><h5 style="color:#FF214B;"><?php echo SENSOR; ?> 4:&nbsp; </h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span style="color:#FF214B;">
                                                                                <input type="text" class="form-control" name="sonde3" maxlength="5" size="5" value = '<?php
                                                                                $s3 = " ";
                                                                                if (isset($_POST['sonde3'])) {
                                                                                    $s3 = $_POST['sonde3'];
                                                                                    echo $s3;
                                                                                }else{
                                                                                    
                                                                                    $s3 = " ";
                                                                                }
?>'onchange="setLbl(3)" id="tf3" onblur="validerChamp(3);"/>
                                                                            </span></td>
                                                                        <td>&nbsp;</td>
                                                                        <td><span style="color:#FF214B;">
                                                                                <input type="text" id="lbl3" name="lbl3" size="15"  placeholder=<?php echo DESCRIPCION; ?> class="form-control" value = '<?php
                                                                                if (isset($_POST['lbl3'])) {
                                                                                    $lbl3 = $_POST['lbl3'];
                                                                                    echo $lbl3;
                                                                                }
?>'readonly />
                                                                            </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3"><h5 style="color:#D1D12F;">&nbsp;<?php echo SENSOR; ?> 5:&nbsp; </h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span style="color:#D1D12F;">
                                                                                <input type="text" class="form-control" name="sonde4" maxlength="5" size="5" value = '<?php
                                                                                
                                                                                $s4 = " ";
                                                                                if (isset($_POST['sonde4'])) {
                                                                                    $s4 = $_POST['sonde4'];
                                                                                    echo $s4;
                                                                                }else{
                                                                                    
                                                                                    $s4 = " ";
                                                                                }
?>'onchange="setLbl(4)" id="tf4" onblur="validerChamp(4);"/>
                                                                            </span></td>
                                                                        <td>&nbsp;</td>
                                                                        <td><span style="color:#D1D12F;">
                                                                                <input type="text" id="lbl4" name="lbl4" size="15"  placeholder=<?php echo DESCRIPCION; ?> class="form-control" value = '<?php
                                                                                if (isset($_POST['lbl4'])) {
                                                                                    $lbl4 = $_POST['lbl4'];
                                                                                    echo $lbl4;
                                                                                }
?>'readonly />
                                                                            </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3"><h5 style="color:#DF16E4"><?php echo SENSOR; ?> 6:&nbsp; </h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span style="color:#DF16E4">
                                                                                <input type="text" class="form-control" name="sonde5" maxlength="5" size="5" value = '<?php
                                                                                
                                                                                $s5 = " ";
                                                                                
                                                                                if (isset($_POST['sonde5'])) {
                                                                                    $s5 = $_POST['sonde5'];
                                                                                    echo $s5;
                                                                                }else{
                                                                                    
                                                                                    $s5 = " ";
                                                                                }
?>'onchange="setLbl(5)" id="tf5" onblur="validerChamp(5);"/>
                                                                            </span></td>
                                                                        <td>&nbsp;</td>
                                                                        <td><span style="color:#DF16E4">
                                                                                <input type="text" id="lbl5" name="lbl5" size="15"  placeholder=<?php echo DESCRIPCION; ?> class="form-control" value = '<?php
                                                                                if (isset($_POST['lbl5'])) {
                                                                                    $lbl5 = $_POST['lbl5'];
                                                                                    echo $lbl5;
                                                                                }
?>'readonly />
                                                                            </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3"><h5 style="color:#41BCCB">&nbsp;&nbsp;<?php echo SENSOR; ?> 7:&nbsp; </h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span style="color:#41BCCB">
                                                                                <input type="text" class="form-control" name="sonde6" maxlength="5" size="5" value = '<?php
                                                                                
                                                                                $s6 = " ";
                                                                                
                                                                                if (isset($_POST['sonde6'])) {
                                                                                    $s6 = $_POST['sonde6'];
                                                                                    echo $s6;
                                                                                }else{
                                                                                    
                                                                                    $s6 = " ";
                                                                                }
?>'onchange="setLbl(6)" id="tf6" onblur="validerChamp(6);"/>
                                                                            </span></td>
                                                                        <td>&nbsp;</td>
                                                                        <td><span style="color:#41BCCB">
                                                                                <input type="text" id="lbl6" name="lbl6" size="15"  placeholder=<?php echo DESCRIPCION; ?> class="form-control" value = '<?php
                                                                                if (isset($_POST['lbl6'])) {
                                                                                    $lbl6 = $_POST['lbl6'];
                                                                                    echo $lbl6;
                                                                                }
?>'readonly />
                                                                            </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3"><h5 style="color:#0F0F0F">&nbsp;&nbsp;<?php echo SENSOR; ?> 8:&nbsp; </h5></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="text" class="form-control" name="sonde7" maxlength="5" size="5" value = '<?php
                                                                                
                                                                        $s7 = " ";
                                                                        
                                                                        if (isset($_POST['sonde7'])) {
                                                                                    $s7 = $_POST['sonde7'];
                                                                                    echo $s7;
                                                                                }else{
                                                                                    
                                                                                    $s7 = " ";
                                                                                }
?>'onchange="setLbl(7)" id="tf7" onblur="validerChamp(7); "/></td>
                                                                        <td>&nbsp;</td>
                                                                        <td><input type="text" id="lbl7" name="lbl7" size="15"  placeholder=<?php echo DESCRIPCION; ?> class="form-control" value = '<?php
                                                                                   if (isset($_POST['lbl7'])) {
                                                                                       $lbl7 = $_POST['lbl7'];
                                                                                       echo $lbl7;
                                                                                   }
?>'readonly /></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p  style="font-size:8;" >&nbsp;</p>
                                                                <p style="color:#2222ff;">&nbsp; 

                                                                    <button type="submit" class="buttonExe"  formmethod="post" formaction=<?php echo 'index.php?id=4&idioma=' . $_SESSION['idiomas']; ?>   ><i class="fa fa-area-chart"></i> <?php echo EJECUTAR ; ?></button>
                                                                </p>
                                                                <p style="color:#DF16E4">&nbsp;</p>
                                                        </div>
                                                    </div>
                                                    
                                                    <!--  <div class="chart-notes">
                                                        This is a sample text region to describe this chart.
                                                      </div> -->
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="chart-wrapper">
                                                    <!--  <div class="chart-title">
                                                        Pageviews by browser (past 5 days)
                                                      </div> -->
                                                    <div class="chart-stage">
                                                        
                                                        
                                                       
                                                        <p><?php
                                                                            include_once 'utilities/utilities.php';
                                                                            include_once 'listes/listesjs.php';

                                                                            if (empty($_GET['id'])) {

                                                                                $id = 'id';
                                                                            } else {

                                                                                $id = $_GET['id'];
                                                                            }

                                                                            switch ($id) {

                                                                                case 0:

                                                                                    include_once 'utilities/navbar.php';
                                                                                    include 'nvd3.php';
                                                                                    //getSonde();

                                                                                    break;


                                                                                case 1:
                                                                                    //include 'conexion/conexion.php';

                                                                                    include_once 'listes/services.php';
                                                                                   
                                                                                    break;

                                                                                case 2:
                                                                                    //include 'conexion/conexion.php';
                                                                                    include_once 'listes/sonde.php';
                                                                              
                                                                                    break;

                                                                                case 3:
                                                                                    //include 'conexion/conexion.php';
                                                                                    include_once 'listes/sondeCumul.php';
                                                                              
                                                                                    break;

                                                                                case 4:

                                                                                    include_once 'utilities/navbar.php';
                                                                                    include 'nvd3.php';
                                                                                    //echo ' <script src="js/graphic.js" type="text/javascript"></script>';
                                                                                    getSonde();

                                                                                    break;


                                                                                default:

                                                                                    include_once 'utilities/navbar.php';
                                                                                    include 'nvd3.php';
                                                                                    
                                                                                    getSonde();

                                                                                    break;
                                                                            }
?></p>
                                                                                                            </form>



                                                        <div id="chart1" class='with-transitions'>
                                                            <svg> </svg>
                                                        </div>
                                                        <!--  <div class="chart-notes">
                                                            Notes go down here
                                                          </div>  -->
                                                    </div>
                                                </div>

                                            </div>

                                            <hr>

                                                <p class="small text-muted"> &#174;  <a href="https://www.damatex.ca">Damatex inc.</a></p>

                                        </div>


                                

                            </body>
                            </html>
