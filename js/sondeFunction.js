/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function setLbl(noChamp)
{
     
  var strEmpty = "";
  var clef = eval ("document.form1.sonde"+noChamp+".value");
  
  try
  {
    var str = item[clef];
    if (str === undefined )
    {
      eval ("document.form1.lbl"+noChamp+".value = "+strEmpty+"");
      
    }
      eval ("document.form1.lbl"+noChamp+".value = str");
      
     
  }
  catch(e)
  {
    //eval ("document.form1.sonde"+noChamp+".value = "+strEmpty+"");
   
    eval ("document.form1.lbl"+noChamp+".value = ''");
    
  }
  

}


function setDate()
{
  var agt=navigator.userAgent.toLowerCase();
  var today=new Date();
  var annee=today.getYear();
  var mois=today.getMonth();
  var jour=today.getDate();

  
  var resultat;
  if(agt.indexOf("inux") != -1) { resultat = annee+1900;}
  else                          { resultat = annee;}

  resultat += ((mois < 9) ? "0" : "") + (mois+1);
  resultat += ((jour < 10) ? "0" : "") + jour;
  document.form1.dateI.value=resultat;
  document.form1.lbl1.value="";
  document.form1.lbl2.value="";
  document.form1.lbl3.value="";
  document.form1.lbl4.value="";
  document.form1.lbl5.value="";
  document.form1.lbl6.value="";
  document.form1.lbl7.value="";
  document.form1.lbl8.value="";
  

  //init defaults
  //document.form1.txt1.value="S2000";
  //setLbl(1);

}





