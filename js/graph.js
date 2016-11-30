/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var esonde1X = [];
var esonde1Y = [];
var esonde12Y = [];
var esonde2X = [];
var esonde2Y = [];
var esonde22Y = [];
var esonde3X = [];
var esonde3Y = [];
var esonde32Y = [];
var esonde4X = [];
var esonde4Y = [];
var esonde42Y = [];
var esonde5X = [];
var esonde5Y = [];
var esonde52Y = [];
var esonde6X = [];
var esonde6Y = [];
var esonde62Y = [];
var esonde7X = [];
var esonde7Y = [];
var esonde72Y = [];
var esonde8X = [];
var esonde8Y = [];
var esonde82Y = [];
var esonde9X = [];
var esonde92X = [];
var esonde9Y = [];
var esonde92Y = [];
var esonde1;
var esonde2;
var esonde3;
var esonde4;
var esonde5;
var esonde6;
var esonde7;
var esonde8;
var graphD;
var erangeMin;
var rangeMax;


function ejes(sonde1X, sonde1Y, sonde12Y, sonde2X, sonde2Y, sonde22Y, sonde3X, sonde3Y, sonde32Y, sonde4X, sonde4Y, sonde42Y, sonde5X, sonde5Y, sonde52Y, 
                sonde6X, sonde6Y, sonde62Y, sonde7X, sonde7Y, sonde72Y, sonde8X, sonde8Y, sonde82Y, sonde9X, sonde92X, sonde9Y, sonde92Y, rangeMin, rangeMax) {

    //S.mesureCONV      = mesure convertie ATTENUEE et PRECEDENTE (s'il y a lieu)...
    //MNC               = mesure non-convertie ACTUELLE... 
    //MC                = mesure convertie NON-ATTENUEE ACTUELLE...
    //flag_bonne_mesure = indique si la mesure est valide pour les graphiques...
    //0= La mesure est bonne par defaut...
    //1= Mesure en dehors du MIN-MAX...
    //2= Mesure depasse la tolerance aux variations...

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

    if (erangeMax > erangeMin) {

        //console.log(esonde1X);
        document.write("<" + "script type='text/javascript' src='js/graphic.js'><" + "/script>");

        

    } else {
        
        document.write(erangeMax);
        document.write(erangeMin);
        
        document.write('Range min. should be less than range max.');
        
        
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
    

    for (var i = 0; i < 10000; i++) {
        
        
        
            valS1.push({x: esonde1X[i], y: esonde1Y[i]});
      
        valS2.push({x: esonde2X[i], y: esonde2Y[i]});
        valS3.push({x: esonde3X[i], y: esonde3Y[i]});
        valS4.push({x: esonde4X[i], y: esonde4Y[i]});
        valS5.push({x: esonde5X[i], y: esonde5Y[i]});
        valS6.push({x: esonde6X[i], y: esonde6Y[i]});
        valS7.push({x: esonde7X[i], y: esonde7Y[i]});
        valS8.push({x: esonde8X[i], y: esonde8Y[i]});
        valS9.push({x: esonde9X[i], y: esonde9Y[i]});
        valS29.push({x:esonde92X[i], y: esonde92Y[i]});
        
    }
    
   

    return [
        
        { 

            values: valS1,
            key:  'Sensor 1', 
            color: "#2222ff"
     
        },


        {
            values: valS2,
            key: "Sensor 2", 
            color: "#2ca02c"
        },
        {
            values: valS3,
            key: "Sensor 3",
            color: "#2B9EA0"
        },
        {
            values: valS4,
            key: "Sensor 4",
            color: "#FF214B"
        },
        {
            values: valS5,
            key: "Sensor 5",
            color: "#D1D12F"
        },
        {
            values: valS6,
            key: "Sensor 6",
            color: "#DF16E4"
        },
        {
            values: valS7,
            key: "Sensor 7",
            color: "#41BCCB"
        },
        {
            values: valS8,
            key: "Sensor 8",
            color: "#0F0F0F"
        },
        
         {
            values: valS9,
            key: "Service1",
            color: "#993300"
        },
        
        {
            values: valS29,
            key: "Service2",
            color: "#993300"
        }

      ];
    
}
