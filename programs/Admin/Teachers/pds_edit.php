<?php 


session_start(); 	

if (!isset($_SESSION['authenticatedUser'])){
  header("Location: ../../login.php"); 
  exit; 
}


$ap=date('d/ m/ y');

include '../../Includes/Logindb.inc'; 
$connection=LoginToDB(); 
?> 
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ΑΙΤΗΣΕΙΣ ΕΚΠΑΙΔΕΥΤΙΚΩΝ - Επεξεργασία</title>

 
  <link type="text/css" rel="stylesheet" href="../../global/admin_styles.css">
 <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script--> 
  <script src="jquery.js"></script> 
 
    <!--script src="http://malsup.github.com/jquery.form.js"></script--> 
<script src="jquery.form.js"></script> 	
	
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
 <!--script src="http://code.jquery.com/jquery-1.9.1.js"></script-->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="jquery.validate.js"></script>
<!--script src="jquery.maskedinput.js"></script-->

<!--script src="jquery.mockjax.js"></script-->

<script src="messages_el.js"></script>

<script src="jquery.ui.datepicker.validation.js"></script>
    <script> 
	
	
	
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#stoixeia').ajaxForm(function() { 
                alert("Εγινε αποθήκευση της αίτησης σας!");
				window.location.replace('main.php');
            }); 
        }); 
    </script> 

</head>

<body>




<table width='100%' height="100%" border='0' cellpadding='0' cellspacing='0'>
<tr>
  <td width='200' height="60" valign='center' align='center'><img src="../../Images/logo_1.gif" /></td>
  <td class="top_banner" valign='center' align='center' ><b> ΔΙΕΥΘΥΝΣΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ ΑΝΑΤ. ΑΤΤΙΚΗΣ</b></td>
</tr>
<tr>
  <td class="top_row_left"></td>
  <td class="top_row_right"></td>
</tr>
<tr>
  <td class="left_column">

  <div class='nav_link'><a href='../../Admin/Teachers/main.php'>Αρχική Σελίδα</a></div><div class='nav_link'><a href='../../Admin/Teachers/egkyklios.doc' target="blank" >Εγκύκλιος</a></div><div class='nav_link'><a href='../../Admin/Teachers/logout.php'>Έξοδος</a></div>
  </td>
  <td class="main_content">
 
   

<?php 
//session_start(); 	
if (!isset($_GET['subid'])){
  header("Location: main.php"); 
  exit; 
}
//include '../../Includes/Logindb.inc'; 
$tid=$_GET['subid'];

//$connection=LoginToDB();

$QueryStr="SELECT submission_id,sch_id,programa,sch_name,date,ar_protocol, sxol_etos,ypeythinos_name,tel_ergasias,dimos,fax,e_mail,sch_teachers,sch_students,dieythintis_name,klados_dieythinti,program_title,ar_praksis,date_praksis,sch_orario,ypeythinos_amm,ypeythinos_klados,ypeythinos_wres,ypeythinos_again,ypeythinos_epimorfosi,
symetexwn1_name,symetexwn1_amm,symetexwn1_klados,symetexwn1_wres,symetexwn1_again,symetexwn1_epimorfosi,
 symetexwn2_name,symetexwn2_amm,symetexwn2_klados,symetexwn2_wres,symetexwn2_again,symetexwn2_epimorfosi,
 symetexwn3_name,symetexwn3_amm,symetexwn3_klados,symetexwn3_wres,symetexwn3_again,symetexwn3_epimorfosi,
 mathites_synolo,agoria,koritsia,amiges,meet_day,meet_hour,meet_place,arxeio,ypothemata,stoxoi,methodologia,syndeseis,month1,month2,month3,month4,month5,episkepseis
                   FROM ft_form_4 WHERE submission_id=".$tid."" ;   
         
	$result100=QueryDB($QueryStr,$connection);

$row=mysql_fetch_array($result100);


 if($_SESSION['sch_id']!=$row['sch_id']) {header("Location: main.php"); exit;}





?>  







<html>
<head>
<title>ΑΙΤΗΣΗ - ΔΗΛΩΣΗ </br>ΥΠΟΒΟΛΗΣ ΠΡΟΓΡΑΜΜΑΤΟΣ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<script>
$(function() {
 $.datepicker.regional['el'] = {
                closeText: 'Κλείσιμο',
                prevText: 'Προηγούμενος',
                nextText: 'Επόμενος',
                currentText: 'Τρέχων Μήνας',
                monthNames: ['Ιανουάριος','Φεβρουάριος','Μάρτιος','Απρίλιος','Μάιος','Ιούνιος',
                'Ιούλιος','Αύγουστος','Σεπτέμβριος','Οκτώβριος','Νοέμβριος','Δεκέμβριος'],
                monthNamesShort: ['Ιαν','Φεβ','Μαρ','Απρ','Μαι','Ιουν',
                'Ιουλ','Αυγ','Σεπ','Οκτ','Νοε','Δεκ'],
                dayNames: ['Κυριακή','Δευτέρα','Τρίτη','Τετάρτη','Πέμπτη','Παρασκευή','Σάββατο'],
                dayNamesShort: ['Κυρ','Δευ','Τρι','Τετ','Πεμ','Παρ','Σαβ'],
                dayNamesMin: ['Κυ','Δε','Τρ','Τε','Πε','Πα','Σα'],
                dateFormat: 'dd/mm/yy', firstDay: 1,
                isRTL: false};
        $.datepicker.setDefaults($.datepicker.regional['el']);

$( "#datepicker" ).datepicker({ dateFormat: "dd/mm/yy" });
$( "#datepicker2" ).datepicker({ dateFormat: "dd/mm/yy" });
});
</script>


</head>
<body  text="#336699" leftmargin="0" topmargin="0"> 

<!-- Κεντρικός Πίνακας -->
<table width="700" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#C64000" bgcolor="#FFFFFF">
<tr>
  <td align="center" bgcolor="#C64000"><img src="../../ethno.gif" width="84" height="71"></td>
</tr>
<tr> 
    <td bgcolor="#C64000"><div align="center" class="paragraph"> <font size="-1" color="#FFFFFF"><strong>ΔΙΕΥΘΥΝΣΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ ΑΝΑΤΟΛΙΚΗΣ ΑΤΤΙΚΗΣ      </strong></font><font color="#FFFFFF" size="-2"><br>


      </div></td>
</tr>
<tr><td align="center">
	  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script language="JavaScript" src="validation.js"></script>

<script type="text/javascript">
<!--
if (!String.prototype.trim) {
 String.prototype.trim = function() {
  return this.replace(/^\s+|\s+$/g,'');
 }
}


function Xhr(){
    try{return new XMLHttpRequest();}catch(e){}try{return new ActiveXObject("Msxml3.XMLHTTP");}catch(e){}try{return new ActiveXObject("Msxml2.XMLHTTP.6.0");}catch(e){}try{return new ActiveXObject("Msxml2.XMLHTTP.3.0");}catch(e){}try{return new ActiveXObject("Msxml2.XMLHTTP");}catch(e){}try{return new ActiveXObject("Microsoft.XMLHTTP");}catch(e){}return null;
}


function checkypeythinos()
{
document.getElementById('ypeythinos_wres').value="0";




var g_backgroundColor = "#F2F9FF";
var yp_amm = document.getElementById('ypeythinos_amm').value;
var a;
if(document.getElementById('symetexwn1_amm'))  a=document.getElementById('symetexwn1_amm').value;
var b;
 if(document.getElementById('symetexwn2_amm')) b=document.getElementById('symetexwn2_amm').value;
var c;
if(document.getElementById('symetexwn3_amm'))  c=document.getElementById('symetexwn3_amm').value;

var sub_id = document.getElementById('sub_id').value;
yp_amm =yp_amm + sub_id ;
//alert(yp_amm);
var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr =Xhr();
//data: "user_id=" + wall_user_id + "&symetexwn1_amm=" + a + "&symetexwn2_amm=" + b + "&symetexwn3_amm=" + c; 
var data = "ypeythinos_amm=" + yp_amm;
// + "&symetexwn1_amm=" + a + "&symetexwn2_amm=" + b + "&symetexwn3_amm=" + c; 
//var data1 ="symetexwn1_amm=" + a; 
//var data2="symetexwn2_amm=" + b;
//var data3="symetexwn3_amm=" + c;
     xhr.open("POST", "checkypeythinos2.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	// xhr.send(data1);
	//xhr.send(data2);
	// xhr.send(data3);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
	  //var res=xhr.responseText;
	 // alert(xhr.responseText);
	   if ((xhr.responseText)=="nok1") {	     
      alert('Ο εκπ/κος με αυτο το Α.Φ.Μ έχει δηλωθεί ως υπεύθυνος και σε άλλο πρόγραμμα. Δεν μπορεί να είναι υπεύθυνος σε 2 προγράμματα');	   
	
document.getElementById("ypeythinos_amm").style.background = g_backgroundColor;
document.getElementById('ypeythinos_amm').value="";
	document.getElementById("ypeythinos_amm").focus();
//	 document.getElementById("ypeythinos_amm").innerHTML = xhr.responseText;
      } 
	  
	  if ((xhr.responseText)=="nok2") {	     
      alert('Ο εκπ/κος με αυτο το Α.Φ.Μ δεν μπορεί να εμφανίζεται σε περισσότερα απο 3 προγράμματα');	   
	
document.getElementById("ypeythinos_amm").style.background = g_backgroundColor;
document.getElementById('ypeythinos_amm').value="";
	document.getElementById("ypeythinos_amm").focus();
//	 document.getElementById("ypeythinos_amm").innerHTML = xhr.responseText;
      } 

      } 
	  
	         else {
                alert('There was a problem with the request.');
                  }
     }
	}
}

function checkypeythinos_old()
{

var g_backgroundColor = "#F2F9FF";
var yp_amm = document.getElementById('ypeythinos_amm').value;
var a;
if(document.getElementById('symetexwn1_amm'))  a=document.getElementById('symetexwn1_amm').value;
var b;
 if(document.getElementById('symetexwn2_amm')) b=document.getElementById('symetexwn2_amm').value;
var c;
if(document.getElementById('symetexwn3_amm'))  c=document.getElementById('symetexwn3_amm').value;


var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr =Xhr();

var data = "ypeythinos_amm=" + yp_amm; 
//var data1 ="symetexwn1_amm=" + a; 
//var data2="symetexwn2_amm=" + b;
//var data3="symetexwn3_amm=" + c;
     xhr.open("POST", "checkypeythinos2.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	// xhr.send(data1);
	//xhr.send(data2);
	// xhr.send(data3);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
	  //var res=xhr.responseText;
	  //alert(xhr.responseText);
	   if ((xhr.responseText)=="nok2") {	     
      alert('Ο εκπ/κος με αυτο το Α.Φ.Μ έχει δηλωθεί ως υπεύθυνος και σε άλλο πρόγραμμα. Δεν μπορεί να είναι υπεύθυνος σε 2 προγράμματα');	   
	
document.getElementById("ypeythinos_amm").style.background = g_backgroundColor;
document.getElementById('ypeythinos_amm').value="";
	document.getElementById("ypeythinos_amm").focus();
//	 document.getElementById("ypeythinos_amm").innerHTML = xhr.responseText;
      } else { return true;  }

      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}


function checksym1()
{
document.getElementById('symetexwn1_wres').value="0";
var g_backgroundColor = "#F2F9FF";
//var yp_amm = document.getElementById('ypeythinos_amm').value;
var a;
if(document.getElementById('symetexwn1_amm'))  a=document.getElementById('symetexwn1_amm').value;
//var b;
 //if(document.getElementById('symetexwn2_amm')) b=document.getElementById('symetexwn2_amm').value;
//var c;
//if(document.getElementById('symetexwn3_amm'))  c=document.getElementById('symetexwn3_amm').value;

var sub_id = document.getElementById('sub_id').value;
a = a + sub_id;
//alert(a);
var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr =Xhr();

//var data = "ypeythinos_amm=" + yp_amm; 
var data ="symetexwn1_amm=" + a; 
//var data2="symetexwn2_amm=" + b;
//var data3="symetexwn3_amm=" + c;
     xhr.open("POST", "checkypeythinos2.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	// xhr.send(data1);
	//xhr.send(data2);
	// xhr.send(data3);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
	  //var res=xhr.responseText;
	  //alert(xhr.responseText);
	   if ((xhr.responseText)=="nok2") {	     
      alert('Ο εκπ/κος με αυτο το Α.Φ.Μ δεν μπορεί να εμφανίζεται σε περισσότερα απο 3 προγράμματα');	   
	
document.getElementById("symetexwn1_amm").style.background = g_backgroundColor;
document.getElementById('symetexwn1_amm').value="";
	document.getElementById("symetexwn1_amm").focus();
//	 document.getElementById("symetexwn1_amm").innerHTML = xhr.responseText;
      } else { return true;  }

      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}


function checksym2()
{
document.getElementById('symetexwn2_wres').value="0";
var g_backgroundColor = "#F2F9FF";
var yp_amm = document.getElementById('ypeythinos_amm').value;
var a;
if(document.getElementById('symetexwn1_amm'))  a=document.getElementById('symetexwn1_amm').value;
var b;
 if(document.getElementById('symetexwn2_amm')) b=document.getElementById('symetexwn2_amm').value;
var c;
if(document.getElementById('symetexwn3_amm'))  c=document.getElementById('symetexwn3_amm').value;
var sub_id = document.getElementById('sub_id').value;
 b=b + sub_id ;
//alert(b);
var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr =Xhr();

//var data = "ypeythinos_amm=" + yp_amm; 
//var data1 ="symetexwn1_amm=" + a; 
var data="symetexwn2_amm=" + b;
//var data3="symetexwn3_amm=" + c;
     xhr.open("POST", "checkypeythinos2.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	// xhr.send(data1);
	//xhr.send(data2);
	// xhr.send(data3);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
	  //var res=xhr.responseText;
	  //alert(xhr.responseText);
	   if ((xhr.responseText)=="nok2") {	     
      alert('Ο εκπ/κος με αυτο το Α.Φ.Μ δεν μπορεί να εμφανίζεται σε περισσότερα απο 3 προγράμματα');	   
	
document.getElementById("symetexwn2_amm").style.background = g_backgroundColor;
document.getElementById('symetexwn2_amm').value="";
	document.getElementById("symetexwn2_amm").focus();
//	 document.getElementById("symetexwn2_amm").innerHTML = xhr.responseText;
      } else { return true;  }

      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}


function checksym3()
{
document.getElementById('symetexwn3_wres').value="0";
var g_backgroundColor = "#F2F9FF";
var yp_amm = document.getElementById('ypeythinos_amm').value;
var a;
if(document.getElementById('symetexwn1_amm'))  a=document.getElementById('symetexwn1_amm').value;
var b;
 if(document.getElementById('symetexwn2_amm')) b=document.getElementById('symetexwn2_amm').value;
var c;
if(document.getElementById('symetexwn3_amm'))  c=document.getElementById('symetexwn3_amm').value;

var sub_id = document.getElementById('sub_id').value;
 c=c + sub_id ;
 //alert(c);
var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr =Xhr();

//var data = "ypeythinos_amm=" + yp_amm; 
//var data1 ="symetexwn1_amm=" + a; 
//var data2="symetexwn2_amm=" + b;
var data="symetexwn3_amm=" + c;
     xhr.open("POST", "checkypeythinos2.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	// xhr.send(data1);
	//xhr.send(data2);
	// xhr.send(data3);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
	  //var res=xhr.responseText;
	  //alert(xhr.responseText);
	   if ((xhr.responseText)=="nok2") {	     
       alert('Ο εκπ/κος με αυτο το Α.Φ.Μ δεν μπορεί να εμφανίζεται σε περισσότερα απο 3 προγράμματα');	  	   
	
document.getElementById("symetexwn3_amm").style.background = g_backgroundColor;
document.getElementById('symetexwn3_amm').value="";
	document.getElementById("symetexwn3_amm").focus();
//	 document.getElementById("symetexwn3_amm").innerHTML = xhr.responseText;
      } else { return true;  }

      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}










 function checkwresyp()
{

var g_backgroundColor = "#F2F9FF";
var yp_amm = document.getElementById('ypeythinos_amm').value;
var yp_wres = document.getElementById('ypeythinos_wres').value;

var a;
if(document.getElementById('symetexwn1_amm'))  a=document.getElementById('symetexwn1_amm').value;
var b;
 if(document.getElementById('symetexwn2_amm')) b=document.getElementById('symetexwn2_amm').value;
var c;
if(document.getElementById('symetexwn3_amm'))  c=document.getElementById('symetexwn3_amm').value;

var sub_id = document.getElementById('sub_id').value;
yp_amm =yp_amm + sub_id ;
//alert(yp_amm);


var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr =Xhr();

var data = "ypeythinos_amm=" + yp_amm; 
//var data1 ="symetexwn1_amm=" + a; 
//var data2="symetexwn2_amm=" + b;
//var data="symetexwn3_amm=" + c;
     xhr.open("POST", "checkwres2.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	// xhr.send(data1);
	//xhr.send(data2);
	// xhr.send(data3);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
	 
	 // alert(xhr.responseText);
	   var res=xhr.responseText;
	var fres=eval(res)+eval(yp_wres);
	//alert(fres);
	
	   if (fres>2) {	     
       alert('Ο εκπ/κος με αυτο το Α.Φ.Μ δεν μπορεί να συμπληρώνει αθροιστικά πάνω απο δύο ώρες σε όλα τα προγράμματα που συμμετέχει');	  	   
	
document.getElementById("ypeythinos_wres").style.background = g_backgroundColor;
document.getElementById('ypeythinos_wres').value="0";
	document.getElementById("ypeythinos_wres").focus();
//	 document.getElementById("symetexwn3_amm").innerHTML = xhr.responseText;
      } else { return true;  }

      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}


 
 function checkwresyp1()
{

var g_backgroundColor = "#F2F9FF";
var yp_amm;
if(document.getElementById('symetexwn1_amm')) yp_amm = document.getElementById('symetexwn1_amm').value;
var yp_wres;
if(document.getElementById('symetexwn1_wres'))  yp_wres = document.getElementById('symetexwn1_wres').value;

var a;
if(document.getElementById('symetexwn1_amm'))  a=document.getElementById('symetexwn1_amm').value;
var b;
 if(document.getElementById('symetexwn2_amm')) b=document.getElementById('symetexwn2_amm').value;
var c;
if(document.getElementById('symetexwn3_amm'))  c=document.getElementById('symetexwn3_amm').value;

var sub_id = document.getElementById('sub_id').value;
yp_amm =yp_amm + sub_id ;

var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr =Xhr();

var data = "symetexwn1_amm=" + yp_amm; 
//var data1 ="symetexwn1_amm=" + a; 
//var data2="symetexwn2_amm=" + b;
//var data="symetexwn3_amm=" + c;
     xhr.open("POST", "checkwres2.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	// xhr.send(data1);
	//xhr.send(data2);
	// xhr.send(data3);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
	 
	 // alert(xhr.responseText);
	   var res=xhr.responseText;
	var fres=eval(res)+eval(yp_wres);
	//alert(fres);
	
	   if (fres>2) {	     
       alert('Ο εκπ/κος με αυτο το Α.Φ.Μ δεν μπορεί να συμπληρώνει αθροιστικά πάνω απο δύο ώρες σε όλα τα προγράμματα που συμμετέχει');	  	   
	
document.getElementById("symetexwn1_wres").style.background = g_backgroundColor;
document.getElementById('symetexwn1_wres').value="0";
	document.getElementById("symetexwn1_wres").focus();
//	 document.getElementById("symetexwn3_amm").innerHTML = xhr.responseText;
      } else { return true;  }

      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}

 
 function checkwresyp2()
{

var g_backgroundColor = "#F2F9FF";

var yp_amm;
 if(document.getElementById('symetexwn2_amm'))  yp_amm = document.getElementById('symetexwn2_amm').value;
var yp_wres;
if(document.getElementById('symetexwn2_wres')) yp_wres = document.getElementById('symetexwn2_wres').value;

var a;
if(document.getElementById('symetexwn1_amm'))  a=document.getElementById('symetexwn1_amm').value;
var b;
 if(document.getElementById('symetexwn2_amm')) b=document.getElementById('symetexwn2_amm').value;
var c;
if(document.getElementById('symetexwn3_amm'))  c=document.getElementById('symetexwn3_amm').value;

var sub_id = document.getElementById('sub_id').value;
yp_amm = yp_amm + sub_id ;

var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr =Xhr();

var data = "symetexwn2_amm=" + yp_amm; 
//var data1 ="symetexwn1_amm=" + a; 
//var data2="symetexwn2_amm=" + b;
//var data="symetexwn3_amm=" + c;
     xhr.open("POST", "checkwres2.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	// xhr.send(data1);
	//xhr.send(data2);
	// xhr.send(data3);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
	 
	 // alert(xhr.responseText);
	   var res=xhr.responseText;
	var fres=eval(res)+eval(yp_wres);
	//alert(fres);
	
	   if (fres>2) {	     
       alert('Ο εκπ/κος με αυτο το Α.Φ.Μ δεν μπορεί να συμπληρώνει αθροιστικά πάνω απο δύο ώρες σε όλα τα προγράμματα που συμμετέχει');	  	   
	
document.getElementById("symetexwn2_wres").style.background = g_backgroundColor;
document.getElementById('symetexwn2_wres').value="0";
	document.getElementById("symetexwn2_wres").focus();
//	 document.getElementById("symetexwn3_amm").innerHTML = xhr.responseText;
      } else { return true;  }

      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}

 function checkwresyp3()
{

var g_backgroundColor = "#F2F9FF";
var yp_amm;
if(document.getElementById('symetexwn3_amm')) yp_amm=document.getElementById('symetexwn3_amm').value;
var yp_wres;
if(document.getElementById('symetexwn3_wres'))  yp_wres = document.getElementById('symetexwn3_wres').value;

var a;
if(document.getElementById('symetexwn1_amm'))  a=document.getElementById('symetexwn1_amm').value;
var b;
 if(document.getElementById('symetexwn2_amm')) b=document.getElementById('symetexwn2_amm').value;
var c;
if(document.getElementById('symetexwn3_amm'))  c=document.getElementById('symetexwn3_amm').value;

var sub_id = document.getElementById('sub_id').value;
yp_amm =yp_amm + sub_id;
var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr =Xhr();

var data = "symetexwn3_amm=" + yp_amm; 
//var data1 ="symetexwn1_amm=" + a; 
//var data2="symetexwn2_amm=" + b;
//var data="symetexwn3_amm=" + c;
     xhr.open("POST", "checkwres2.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	// xhr.send(data1);
	//xhr.send(data2);
	// xhr.send(data3);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
	 
	 // alert(xhr.responseText);
	   var res=xhr.responseText;
	var fres=eval(res)+eval(yp_wres);
	//alert(fres);
	
	   if (fres>2) {	     
       alert('Ο εκπ/κος με αυτο το Α.Φ.Μ δεν μπορεί να συμπληρώνει αθροιστικά πάνω απο δύο ώρες σε όλα τα προγράμματα που συμμετέχει');	  	   
	
document.getElementById("symetexwn3_wres").style.background = g_backgroundColor;
document.getElementById('symetexwn3_wres').value="0";
	document.getElementById("symetexwn3_wres").focus();
//	 document.getElementById("symetexwn3_amm").innerHTML = xhr.responseText;
      } else { return true;  }

      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}




function checkproghours() { 
var yp; 
var a,b,c,sum=0;
a=0; b=0; c=0; yp=0;
if(document.getElementById('ypeythinos_amm')) yp1=document.getElementById('ypeythinos_amm').value;
if (yp1=="") { 
 alert('Συμπληρώστε Α.Φ.Μ Εκπ/κου');
 document.getElementById("ypeythinos_amm").style.background = g_backgroundColor;
document.getElementById('ypeythinos_wres').value='0'; 
document.getElementById('ypeythinos_amm').focus(); 

}

if(document.getElementById('ypeythinos_wres')) yp=document.getElementById('ypeythinos_wres').value;
if(document.getElementById('symetexwn1_wres')) a=document.getElementById('symetexwn1_wres').value;
if(document.getElementById('symetexwn2_wres')) b=document.getElementById('symetexwn2_wres').value;
if(document.getElementById('symetexwn3_wres')) c=document.getElementById('symetexwn3_wres').value;
//alert(a,b,c,sum);
sum=eval(a)+eval(b)+eval(c)+eval(yp);
//alert(sum);
if (sum>2) { 
 alert('Οι ώρες συμπλήρωσης του προγράμματος δεν μπορούν να ξεπερνούν αθροιστικά τις 2 ώρες');
document.getElementById('ypeythinos_wres').value='0'; 
 return false;
 }else checkwresyp();
 
}

function checkproghours1() { 
var yp; 
var a,b,c,sum=0;
a=0; b=0; c=0; yp=0;
if(document.getElementById('symetexwn1_amm')) yp1=document.getElementById('symetexwn1_amm').value;
if (yp1=="") { 
 alert('Συμπληρώστε Α.Φ.Μ Εκπ/κου');
 document.getElementById("symetexwn1_amm").style.background = g_backgroundColor;
document.getElementById('symetexwn1_wres').value='0'; 
document.getElementById('symetexwn1_amm').focus(); 

}


if(document.getElementById('ypeythinos_wres')) yp=document.getElementById('ypeythinos_wres').value;
if(document.getElementById('symetexwn1_wres')) a=document.getElementById('symetexwn1_wres').value;
if(document.getElementById('symetexwn2_wres')) b=document.getElementById('symetexwn2_wres').value;
if(document.getElementById('symetexwn3_wres')) c=document.getElementById('symetexwn3_wres').value;
//alert(a,b,c,sum);
sum=eval(a)+eval(b)+eval(c)+eval(yp);
//alert(sum);
if (sum>2) { 
 alert('Οι ώρες συμπλήρωσης του προγράμματος δεν μπορούν να ξεπερνούν αθροιστικά τις 2 ώρες');
document.getElementById('symetexwn1_wres').value='0'; 
 return false;
 }else checkwresyp1();
 


}


function checkproghours2() { 
var yp; 
var a,b,c,sum=0;
a=0; b=0; c=0; yp=0;

if(document.getElementById('symetexwn2_amm')) yp1=document.getElementById('symetexwn2_amm').value;
if (yp1=="") { 
 alert('Συμπληρώστε Α.Φ.Μ Εκπ/κου');
 document.getElementById("symetexwn2_amm").style.background = g_backgroundColor;
document.getElementById('symetexwn2_wres').value='0'; 
document.getElementById('symetexwn2_amm').focus(); 

}
if(document.getElementById('ypeythinos_wres')) yp=document.getElementById('ypeythinos_wres').value;
if(document.getElementById('symetexwn1_wres')) a=document.getElementById('symetexwn1_wres').value;
if(document.getElementById('symetexwn2_wres')) b=document.getElementById('symetexwn2_wres').value;
if(document.getElementById('symetexwn3_wres')) c=document.getElementById('symetexwn3_wres').value;
//alert(a,b,c,sum);
sum=eval(a)+eval(b)+eval(c)+eval(yp);
//alert(sum);
if (sum>2) { 
 alert('Οι ώρες συμπλήρωσης του προγράμματος δεν μπορούν να ξεπερνούν αθροιστικά τις 2 ώρες');
document.getElementById('symetexwn2_wres').value='0'; 
 return false;
 }else checkwresyp2();
 


}


function checkproghours3() { 
var yp; 
var a,b,c,sum=0;
a=0; b=0; c=0; yp=0;
if(document.getElementById('symetexwn3_amm')) yp1=document.getElementById('symetexwn3_amm').value;
if (yp1=="") { 
 alert('Συμπληρώστε Α.Φ.Μ Εκπ/κου');
 document.getElementById("symetexwn3_amm").style.background = g_backgroundColor;
document.getElementById('symetexwn3_wres').value='0'; 
document.getElementById('symetexwn3_amm').focus(); 

}

if(document.getElementById('ypeythinos_wres')) yp=document.getElementById('ypeythinos_wres').value;
if(document.getElementById('symetexwn1_wres')) a=document.getElementById('symetexwn1_wres').value;
if(document.getElementById('symetexwn2_wres')) b=document.getElementById('symetexwn2_wres').value;
if(document.getElementById('symetexwn3_wres')) c=document.getElementById('symetexwn3_wres').value;
//alert(a,b,c,sum);
sum=eval(a)+eval(b)+eval(c)+eval(yp);
//alert(sum);
if (sum>2) { 
 alert('Οι ώρες συμπλήρωσης του προγράμματος δεν μπορούν να ξεπερνούν αθροιστικά τις 2 ώρες');
document.getElementById('symetexwn3_wres').value='0'; 
 return false;
 }else checkwresyp3();
 


}

function signature() { var a=document.getElementById('ypeythinos_name').value; html2=""; html2+=('<p>'+a+'</p>');document.getElementById('sign1').innerHTML=html2; }

function signature2() { var a=document.getElementById('dieythintis_name').value; html2=""; html2+=('<p>'+a+'</p>');document.getElementById('sign2').innerHTML=html2; }

var ln1,ln2,ln3,ln4,ln5,ln6;

function symetexon1_del() {
html="";	
 document.getElementById('level4').innerHTML =html;	 
//for(var i=ln1; i<ln1+7; i++){ fieldInfo.pop(); }

 
}




function symetexon1() {
html="";	
		
		
var i=1;
			html += ('   <table width="100%" cellpadding="1" cellspacing="1" border="1">  <tr> ');
			
                  html += ('        <td width="200" height="30" class="maintext" align="center">');
			
				html += (' ΕΠΩΝΥΜΟ ΟΝΟΜΑ*</BR><input name ="symetexwn1_name" type="text" value="<?php echo $row['symetexwn1_name'] ?>"');
				//html +=('<?php echo ($_SESSION['symetexwn1_name']); unset($_SESSION['symetexwn1_name']);  ?>');
				html += (' size="25" maxlength="35" required="true" loginRegex=true"></td>');
 
             
				
				html += ('  <td width="100" height="30" class="maintext" align="center">Α.Φ.Μ*</BR> 	<input id="symetexwn1_amm" class="amm" name ="symetexwn1_amm" type="text" onchange="checksym1();" value="<?php echo $row['symetexwn1_amm'] ?>" size="9" maxlength="9" valign="center" required="true" digits="true" minlength="9" duplicate="true"></td>');
 
             
				html += ('  <td width="100" height="30" class="maintext" align="center">ΠΕ*</BR><select name="symetexwn1_klados" required>');
                 html += ('            <option value="<?php echo $row['symetexwn1_klados'] ?>" selected><?php echo $row['symetexwn1_klados'] ?></option>');
                 html += ('            <option value="ΠΕ 60" >ΠΕ 60</option>');
 html += ('<option value="ΠΕ 70" >ΠΕ 70</option>');
 html += ('<option value="ΠΕ 01" >ΠΕ 01</option>');
 html += ('<option value="ΠΕ 02" >ΠΕ 02</option>');
  html += ('<option value="ΠΕ 03" >ΠΕ 03</option>');
 html += ('<option value="ΠΕ 04" >ΠΕ 04</option>');
 html += (' <option value="ΠΕ 05" >ΠΕ 05</option>');
 html += (' <option value="ΠΕ 05" >ΠΕ 06</option>');
 html += (' <option value="ΠΕ 07" >ΠΕ 07</option>');
 html += (' <option value="ΠΕ 08" >ΠΕ 08</option>');
 html += (' <option value="ΠΕ 09" >ΠΕ 09</option>');
 html += (' <option value="ΠΕ 10" >ΠΕ 10</option>');
 html += (' <option value="ΠΕ 11" >ΠΕ 11</option>');
 html += (' <option value="ΠΕ 12" >ΠΕ 12</option>');
 html += (' <option value="ΠΕ 13" >ΠΕ 13</option>');
 html += (' <option value="ΠΕ 14" >ΠΕ 14</option>');
 html += (' <option value="ΠΕ 15" >ΠΕ 15</option>');
 html += (' <option value="ΠΕ 16" >ΠΕ 16</option>');
 html += (' <option value="ΠΕ 17" >ΠΕ 17</option>');
 html += (' <option value="ΠΕ 18" >ΠΕ 18</option>');
 html += (' <option value="ΠΕ 19" >ΠΕ 19</option>');
 html += (' <option value="ΠΕ 20" >ΠΕ 20</option>');
 html += (' <option value="Αλλη" >Αλλη</option>');
                        html += ('    </select> </td>');                        
						  html += ('  <td width="100" height="30" class="maintext" align="center">      ΩΡΕΣ ΣΥΜΠΛΗΡΩΣΗΣ ΩΡΑΡΙΟΥ </BR>  <select id="symetexwn1_wres" name="symetexwn1_wres" onchange="checkproghours1();">');
                           html += ('   <option value="<?php echo $row['symetexwn1_wres'] ?>" selected><?php echo $row['symetexwn1_wres'] ?></option>');
                            html += ('  <option value="0" >0 ώρες</option>');
 html += (' <option value="1" >1 ώρα</option>');
 html += (' <option value="2" >2 ώρες</option>');
                        html += ('    </select></td>');
                                             
                      html += ('  <td width="150" height="30" class="maintext" align="center"> ΥΛΟΠΟΙΗΣΗ ΠΡΟΓΡΑΜΜΑΤΩΝ ΣΕ ΠΡΟΗΓΟΥΜΕΝΑ ΕΤΗ*</BR><select name="symetexwn1_again" required> ');
                        html += ('  <option value="<?php echo $row['symetexwn1_again'] ?>" selected><?php echo $row['symetexwn1_again'] ?></option><option value="ΝΑΙ" >ΝΑΙ</option><option value="ΟΧΙ" >ΟΧΙ</option></td>');
						
						 html += ('  <td width="" height="30" class="maintext" align="center">ΣΧΕΤΙΚΗ ΕΠΙΜΟΡΦΩΣΗ(ΦΟΡΕΑΣ ΕΠΙΜΟΡΦΩΣΗΣ)*</BR><textarea cols="25" rows="5" name="symetexwn1_epimorfosi" ><?php echo $row['symetexwn1_epimorfosi'] ?></textarea> </td></tr></table>  ');
						  
               
			
			
		//document.write(html);
		 
		 document.getElementById('level4').innerHTML =html;	 
		
}

function symetexon2_del() {
html="";	
 document.getElementById('sym2').innerHTML =html;	 
		
}
function symetexon2() {
html="";	
		
		
var i=1;
			html += ('   <table width="100%" cellpadding="1" cellspacing="1" border="1">  <tr> ');
			
                  html += ('        <td width="200" height="30" class="maintext" align="center">');
			
				html += (' ΕΠΩΝΥΜΟ ΟΝΟΜΑ*</BR><input name ="symetexwn2_name" type="text" value="<?php echo $row['symetexwn2_name'] ?>" size="25" maxlength="35" required="true" loginRegex=true"></td>');
 
             
				
				html += ('  <td width="100" height="30" class="maintext" align="center">Α.Φ.Μ*</BR> 	<input id="symetexwn2_amm" class="amm" name ="symetexwn2_amm" type="text" onchange="checksym2();" value="<?php echo $row['symetexwn2_amm'] ?>" size="9" maxlength="9" valign="center" required="true" digits="true" minlength="9" duplicate="true"></td>');
 
             
				html += ('  <td width="100" height="30" class="maintext" align="center">ΠΕ*</BR><select name="symetexwn2_klados" required>');
                 html += ('            <option value="<?php echo $row['symetexwn2_klados'] ?>" selected>Επιλέξτε</option>');
                 html += ('            <option value="ΠΕ 60" >ΠΕ 60</option>');
 html += ('<option value="ΠΕ 70" >ΠΕ 70</option>');
 html += ('<option value="ΠΕ 01" >ΠΕ 01</option>');
 html += ('<option value="ΠΕ 02" >ΠΕ 02</option>');
  html += ('<option value="ΠΕ 03" >ΠΕ 03</option>');
 html += ('<option value="ΠΕ 04" >ΠΕ 04</option>');
 html += (' <option value="ΠΕ 05" >ΠΕ 05</option>');
 html += (' <option value="ΠΕ 05" >ΠΕ 06</option>');
 html += (' <option value="ΠΕ 07" >ΠΕ 07</option>');
 html += (' <option value="ΠΕ 08" >ΠΕ 08</option>');
 html += (' <option value="ΠΕ 09" >ΠΕ 09</option>');
 html += (' <option value="ΠΕ 10" >ΠΕ 10</option>');
 html += (' <option value="ΠΕ 11" >ΠΕ 11</option>');
 html += (' <option value="ΠΕ 12" >ΠΕ 12</option>');
 html += (' <option value="ΠΕ 13" >ΠΕ 13</option>');
 html += (' <option value="ΠΕ 14" >ΠΕ 14</option>');
 html += (' <option value="ΠΕ 15" >ΠΕ 15</option>');
 html += (' <option value="ΠΕ 16" >ΠΕ 16</option>');
 html += (' <option value="ΠΕ 17" >ΠΕ 17</option>');
 html += (' <option value="ΠΕ 18" >ΠΕ 18</option>');
 html += (' <option value="ΠΕ 19" >ΠΕ 19</option>');
 html += (' <option value="ΠΕ 20" >ΠΕ 20</option>');
 html += (' <option value="Αλλη" >Αλλη</option>');
                        html += ('    </select> </td>');                        
						  html += ('  <td width="100" height="30" class="maintext" align="center">      ΩΡΕΣ ΣΥΜΠΛΗΡΩΣΗΣ ΩΡΑΡΙΟΥ* </BR>  <select id="symetexwn2_wres" name="symetexwn2_wres" onchange="checkproghours2();">');
                           html += ('   <option value="<?php echo $row['symetexwn2_wres'] ?>" selected><?php echo $row['symetexwn2_wres'] ?></option>');
                            html += ('  <option value="0" >0 ώρες</option>');
 html += (' <option value="1" >1 ώρα</option>');
 html += (' <option value="2" >2 ώρες</option>');
                        html += ('    </select></td>');
                                             
                       html += ('  <td width="150" height="30" class="maintext" align="center"> ΥΛΟΠΟΙΗΣΗ ΠΡΟΓΡΑΜΜΑΤΩΝ ΣΕ ΠΡΟΗΓΟΥΜΕΝΑ ΕΤΗ*</BR><select name="symetexwn2_again" required> ');
                        html += ('  <option value="<?php echo $row['symetexwn2_again'] ?>" selected><?php echo $row['symetexwn2_again'] ?></option><option value="ΝΑΙ" >ΝΑΙ</option><option value="ΟΧΙ" >ΟΧΙ</option></td>');
										
						 html += ('  <td width="" height="30" class="maintext" align="center">ΣΧΕΤΙΚΗ ΕΠΙΜΟΡΦΩΣΗ(ΦΟΡΕΑΣ ΕΠΙΜΟΡΦΩΣΗΣ)*</BR><textarea cols="25" rows="5" name="symetexwn2_epimorfosi" ><?php echo $row['symetexwn2_epimorfosi'] ?></textarea> </td></tr></table>  ');
						  
               
			
			
		//document.write(html);
		 
		 document.getElementById('sym2').innerHTML =html;	 
		
}

function symetexon3_del() {
html="";	
 document.getElementById('sym3').innerHTML =html;	 
		
}
function symetexon3() {
html="";	
		
		
var i=1;
			html += ('   <table width="100%" cellpadding="1" cellspacing="1" border="1">  <tr> ');
			
                  html += ('        <td width="200" height="30" class="maintext" align="center">');
			
				html += ('ΕΠΩΝΥΜΟ ΟΝΟΜΑ*</BR><input name ="symetexwn3_name" type="text" value="<?php echo $row['symetexwn3_name'] ?>" size="25" maxlength="35" required="true" loginRegex=true"></td>');
 
             
				
				html += ('  <td width="100" height="30" class="maintext" align="center">Α.Φ.Μ</BR> 	<input id="symetexwn3_amm" class="amm" name="symetexwn3_amm" type="text" onchange="checksym3();" value="<?php echo $row['symetexwn3_amm'] ?>" size="9" maxlength="9" valign="center" required="true" digits="true" minlength="9" duplicate="true"></td>');
 
             
				html += ('  <td width="100" height="30" class="maintext" align="center">ΠΕ*</BR><select name="symetexwn3_klados" required>');
                 html += ('            <option value="<?php echo $row['symetexwn3_klados'] ?>" selected><?php echo $row['symetexwn3_klados'] ?></option>');
                 html += ('            <option value="ΠΕ 60" >ΠΕ 60</option>');
 html += ('<option value="ΠΕ 70" >ΠΕ 70</option>');
 html += ('<option value="ΠΕ 01" >ΠΕ 01</option>');
 html += ('<option value="ΠΕ 02" >ΠΕ 02</option>');
  html += ('<option value="ΠΕ 03" >ΠΕ 03</option>');
 html += ('<option value="ΠΕ 04" >ΠΕ 04</option>');
 html += (' <option value="ΠΕ 05" >ΠΕ 05</option>');
 html += (' <option value="ΠΕ 05" >ΠΕ 06</option>');
 html += (' <option value="ΠΕ 07" >ΠΕ 07</option>');
 html += (' <option value="ΠΕ 08" >ΠΕ 08</option>');
 html += (' <option value="ΠΕ 09" >ΠΕ 09</option>');
 html += (' <option value="ΠΕ 10" >ΠΕ 10</option>');
 html += (' <option value="ΠΕ 11" >ΠΕ 11</option>');
 html += (' <option value="ΠΕ 12" >ΠΕ 12</option>');
 html += (' <option value="ΠΕ 13" >ΠΕ 13</option>');
 html += (' <option value="ΠΕ 14" >ΠΕ 14</option>');
 html += (' <option value="ΠΕ 15" >ΠΕ 15</option>');
 html += (' <option value="ΠΕ 16" >ΠΕ 16</option>');
 html += (' <option value="ΠΕ 17" >ΠΕ 17</option>');
 html += (' <option value="ΠΕ 18" >ΠΕ 18</option>');
 html += (' <option value="ΠΕ 19" >ΠΕ 19</option>');
 html += (' <option value="ΠΕ 20" >ΠΕ 20</option>');
 html += (' <option value="Αλλη" >Αλλη</option>');
                        html += ('    </select> </td>');                        
						  html += ('  <td width="100" height="30" class="maintext" align="center">      ΩΡΕΣ ΣΥΜΠΛΗΡΩΣΗΣ ΩΡΑΡΙΟΥ* </BR>  <select id="symetexwn3_wres" name="symetexwn3_wres" onchange="checkproghours3();">');
                           html += ('   <option value="<?php echo $row['symetexwn3_wres'] ?>" selected><?php echo $row['symetexwn3_wres'] ?></option>');
                            html += ('  <option value="0" >0 ώρες</option>');
 html += (' <option value="1" >1 ώρα</option>');
 html += (' <option value="2" >2 ώρες</option>');
                        html += ('    </select></td>');
                                             
                       html += ('  <td width="150" height="30" class="maintext" align="center"> ΥΛΟΠΟΙΗΣΗ ΠΡΟΓΡΑΜΜΑΤΩΝ ΣΕ ΠΡΟΗΓΟΥΜΕΝΑ ΕΤΗ*</BR><select name="symetexwn3_again" required> ');
                        html += ('  <option value="<?php echo $row['symetexwn3_again'] ?>" selected><?php echo $row['symetexwn3_again'] ?></option><option value="ΝΑΙ" >ΝΑΙ</option><option value="ΟΧΙ" >ΟΧΙ</option></td>');
										
						 html += ('  <td width="" height="30" class="maintext" align="center">ΣΧΕΤΙΚΗ ΕΠΙΜΟΡΦΩΣΗ(ΦΟΡΕΑΣ ΕΠΙΜΟΡΦΩΣΗΣ)*</BR><textarea cols="25" rows="5" name="symetexwn3_epimorfosi" ><?php echo $row['symetexwn3_epimorfosi'] ?></textarea> </td></tr></table>  ');
						  
               
			
			
		//document.write(html);
		 
		 document.getElementById('sym3').innerHTML =html;	 
		
}

var fieldInfo = new Array();




fieldInfo.push("letters_only,ypeythinos_name,Παρακαλούμε συμπληρώστε το πεδίο με Κεφαλαία Ελληνικά.");


-->
</script>


<!--form name="stoixeia"  onsubmit="return validateFields(stoixeia,fieldInfo);" action="http://users.sch.gr/vapapado/administration/process.php" method="post" enctype="multipart/form-data"-->

<!--form action="http://localhost/formtools/process.php" method="post"-->
<form id="stoixeia" name="stoixeia"  onsubmit="return validateFields(stoixeia,fieldInfo);" action="process_edit.php" method="post" enctype="multipart/form-data">
<!--input type="hidden" name="form_tools_form_id" value="4" /-->
 
<table width="98%" border="0" cellpadding="0" cellspacing="0" >
<tr><td  height="30"></td></tr>
				
 <tr>

   <td>
       <table width="100%" cellpadding="0" cellspacing="0">
	      <tr>
		     <td width="60%">&nbsp;</td>
			 <td width="40%" class="maintext">
			      <strong>Προς<br>Δ/ΝΣΗ Δ.Ε. ΑΝ. ΑΤΤΙΚΗΣ<br>Τμήμα Εκπαιδευτικών Θεμάτων</strong></td> 
		  </tr>
	   </table>

   </td>
 </tr> 
  <tr><td height="50"  align="center"  valign="bottom" class="paragraph"><strong>Α Ι Τ Η Σ Η - Δ Η Λ Ω Σ Η </br>  Υ Π Ο Β Ο Λ Η Σ  Π Ρ Ο Γ Ρ Α Μ Μ Α Τ Ο Σ </br> Σ Χ Ο Λ. Δ Ρ Α Σ Τ Η Ρ Ι Ο Τ Η Τ Ω Ν</strong></td>
  <tr>
      <td align="center" valign="top" class="maintext">(επέχει θέση Υπεύθυνης Δήλωσης του Ν. 1599/86)<br>
        </td>
    </tr>
    </tr> 
  <tr><td height="10"></td></tr>

  <tr>
      <td class="maintext"><font color="#990000" >Η συμπλήρωση των Ονομάτων γίνεται 
        με κεφαλαία ελληνικά με το Επώνυμο να προηγείται του Ονόματος .<br>Τα πεδία με (*) είναι υποχρεωτικά.</font></td>
    </tr>
	 <tr><td height="10"></td></tr>
  <tr><td height="1" bgcolor="#336699" ></td></tr>
  <tr><td height="10"></td></tr>
      <!-- Κύρια Στοιχεία -->
  <tr><td>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><td>
	     <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000066">
                <tr> 
                  <td> <table width="100%" border="0" cellpadding="0" cellspacing="0"  cols="2">
                      <tr valign="middle">                         
                        <td width="150" height="10" class="maintext" valign="middle">
                          <input  type="hidden" id="sub_id" name="sub_id" value="<?php echo $tid ?>"> 
                                                  </td>

                      </tr>

                       <tr valign="middle"> 
                       <td width="180" height="30" class="maintext" valign="middle"> ΣΧΟΛΙΚΗ ΔΡΑΣΤΗΡΙΟΤΗΤΑ:*  </td>
					   <td> 
					   <select name="programa" required>
                            <option value="<?php echo $row['programa'] ?>" selected><?php echo $row['programa'] ?></option>
                            <option value="ΑΓΩΓΗ ΣΤΑΔΙΟΔΡΟΜΙΑΣ" >ΑΓΩΓΗ ΣΤΑΔΙΟΔΡΟΜΙΑΣ</option>
<option value="ΠΕΡΙΒΑΛΛΟΝΤΙΚΗ ΑΓΩΓΗ" >ΠΕΡΙΒΑΛΛΟΝΤΙΚΗ ΑΓΩΓΗ</option>
<option value="ΑΓΩΓΗ ΥΓΕΙΑΣ" >ΑΓΩΓΗ ΥΓΕΙΑΣ</option>
<option value="ΠΟΛΙΤΙΣΤΙΚΑ ΘΕΜΑΤΑ" >ΠΟΛΙΤΙΣΤΙΚΑ ΘΕΜΑΤΑ</option>
<option value="E-twinning-Comenius" >E-twinning-Comenius</option>

                          </select>
							   
                       
                        </td>
                      <tr> 
                      
					  <tr> <TD></TD><TD></TD>
                  <td height="30" align="LEFT" class="maintext">Ημερομηνία Πρωτοκόλλου(Σχολείου):* 
                    <input name="date" type="text" id="datepicker2" value="<?php echo $row['date'] ?>" size="15" maxlength="20" required="true" dpDate="true"></td>
                </tr>
				
				<tr> <TD></TD><TD></TD>
                  <td height="30" align="LEFT" class="maintext">Αριθ. Πρωτοκόλλου(Σχολείου):* 
                    <input name="ar_protocol" type="text" value="<?php echo $row['ar_protocol'] ?>" size="15" maxlength="20" required="true" digits="true">
                           </td>
                </tr>
					<tr> 
                        <td height="30" class="maintext">Σχ. Έτος:*
						<input name="sxol_etos" type="text" value="<?php echo $row['sxol_etos'] ?>" size="15" maxlength="30" readonly="true">
                          </td>
                      </tr>

<tr valign="middle"> 
                        <td width="150" height="30" class="maintext" valign="middle"> Δ/ΝΣΗ ΕΚΠΑΙΔΕΥΣΗΣ:*          : </td>
                        <td><input name="dide_name" type="text" value="ΔΔΕ ΑΝ. ΑΤΤΙΚΗΣ" size="30" maxlength="30" readonly="true">
                          * </td>
                      </tr>

					
                      <tr valign="middle"> 
                        <td width="150" height="30" class="maintext" valign="middle"> ΣΧΟΛΙΚΗ ΜΟΝΑΔΑ:*        : </td>
                        <td><input name="sch_name" type="text" value="<?php echo $row['sch_name'] ?>" size="30" maxlength="300" readonly="true" required>
                          * </td>
                      </tr>
                      
			 
			


                    </table></td>
                </tr>
                <!-- Διεύθυνη Αλληλογραφίας -->
                <tr> 
                  <td height="10"></td>
                </tr>
                
                <tr> 
                  <td height="10"></td>
                </tr>
                <tr valign="middle"> 
                  <td> <table width="100%" cellpadding="0" cellspacing="0">
				  
				  <tr valign="middle"> 
                        <td width="200" height="30" class="maintext" valign="middle">Τηλ σταθερό:* 
                          <input name="tel_ergasias" type="text" value="<?php echo $row['tel_ergasias'] ?>" size="10" maxlength="10" readonly="true" required> </td>
                        <td>Δήμος:*  
                          <input  name="dimos" type="text" value="<?php echo $row['dimos'] ?>" size="25"readonly="true" required> </td>
                      </tr>
				  <tr valign="middle"> 
                        <td width="200" height="30" class="maintext" valign="middle"> Fax : 
                          <input name="fax" type="text" value="<?php echo $row['fax'] ?>" size="10" maxlength="10" minlength="10" digits="true"> </td>
                        <td>e-mail:*  
                          <input name ="e_mail" type="text" value="<?php echo $row['e_mail'] ?>" size="25" maxlength="40" readonly="true" required> </td>
                      </tr>
				  
				  <tr valign="middle"> 
                        <td width="200" height="30" class="maintext" valign="middle"> ΑΡΙΘΜΟΣ ΕΚΠΑΙΔΕΥΤΙΚΩΝ ΣΧΟΛΕΙΟΥ:* </td>
                        <td><input name ="sch_teachers" type="text" value="<?php echo $row['sch_teachers'] ?>" size="6" maxlength="3" required="true" digits="true"> </td>
                      </tr>
				  
                   <tr valign="middle"> 
                        <td width="200" height="30" class="maintext" valign="middle">ΑΡΙΘΜΟΣ ΜΑΘΗΤΩΝ ΣΧΟΛΕΙΟΥ:* </td>
                        <td><input name ="sch_students" type="text" value="<?php echo $row['sch_students'] ?>" size="6" maxlength="4" required="true" digits="true"> </td>
                      </tr>   
                     
                   <tr valign="middle"> 
                        <td width="200" height="30" class="maintext" valign="middle"> ΕΠΩΝΥΜΟ ΟΝΟΜΑ ΔΙΕΥΘΥΝΤΗ:* </td>
                        <td><input name ="dieythintis_name" type="text" value="<?php echo $row['dieythintis_name'] ?>" size="25" maxlength="35" required="true" loginRegex="true"> </td>
						<td height="30" class="maintext"> ΚΛΑΔΟΣ:*
                          <select name="klados_dieythinti" required>*
                            <option value="<?php echo $row['klados_dieythinti'] ?>" selected><?php echo $row['klados_dieythinti'] ?></option>
                            <option value="ΠΕ 60" >ΠΕ 60</option>
<option value="ΠΕ 70" >ΠΕ 70</option>
<option value="ΠΕ 01" >ΠΕ 01</option>
<option value="ΠΕ 02" >ΠΕ 02</option>

<option value="ΠΕ 03" >ΠΕ 03</option>
<option value="ΠΕ 04" >ΠΕ 04</option>
<option value="ΠΕ 05" >ΠΕ 05</option>
<option value="ΠΕ 05" >ΠΕ 06</option>
<option value="ΠΕ 07" >ΠΕ 07</option>
<option value="ΠΕ 08" >ΠΕ 08</option>
<option value="ΠΕ 09" >ΠΕ 09</option>
<option value="ΠΕ 10" >ΠΕ 10</option>
<option value="ΠΕ 11" >ΠΕ 11</option>

<option value="ΠΕ 12" >ΠΕ 12</option>
<option value="ΠΕ 13" >ΠΕ 13</option>
<option value="ΠΕ 14" >ΠΕ 14</option>
<option value="ΠΕ 15" >ΠΕ 15</option>
<option value="ΠΕ 16" >ΠΕ 16</option>
<option value="ΠΕ 17" >ΠΕ 17</option>
<option value="ΠΕ 18" >ΠΕ 18</option>
<option value="ΠΕ 19" >ΠΕ 19</option>
<option value="ΠΕ 20" >ΠΕ 20</option>

<option value="other" >'Αλλη</option>
                          </select>
                          * &nbsp;&nbsp;</td>
                      </tr>    
					 
					  
					  
                    </table>
                    <!-- Επαγγελματικά Στοιχεία -->
                <tr> 
                  <td height="10"></td>
                </tr>

               
                <tr> 
                  <td height="1" bgcolor="#336699" ></td>
                </tr>
                <tr> 
                  <td height="10"></td>
                </tr>
                <tr> 
                  <td> <table width="100%" cellpadding="0" cellspacing="0">

				   <tr> 
                  <td class="maintext"><strong>Ο ΤΙΤΛΟΣ ΤΟΥ ΠΡΟΓΡΑΜΜΑΤΟΣ ΜΑΣ:*</strong></td>
                </tr>
				  <tr valign="middle"> 
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="75" rows="2" name="program_title" required><?php echo $row['program_title'] ?></textarea>
						</td>
                        
                      </tr>
				  
				   <tr> 
				   
                  <td> <table width="100%" cellpadding="0" cellspacing="0">
<tr> 
                  <td height="10"></td>
                </tr>
				   <tr> 
                  <td width="300" class="maintext"><strong>ΠΡΑΞΗ ΑΝΑΘΕΣΗΣ ΤΟΥ ΣΥΛΛΟΓΟΥ ΔΙΔΑΣΚΟΝΤΩΝ:</strong></td>
                </tr>
				  
				  <tr> 
                        <td width="200" height="30" class="maintext" valign="middle">  Αρ. Πράξης:* 
                          <input name="ar_praksis" type="text" value="<?php echo $row['ar_praksis'] ?>" size="10" maxlength="10" required="true" digits="true"> </td>
                        <td>Ημερομηνία Πράξης:* 
                          <input name ="date_praksis" type="text" id="datepicker" value="<?php echo $row['date_praksis'] ?>" size="25" maxlength="35" required="true" dpDate="true"> </td>
                      </tr>
				  <tr> 
                  <td height="10"></td>
                </tr>
				  <tr valign="middle"> 
                       <td width="180" height="30" class="maintext" valign="middle"><strong>  ΤΟ ΣΧΟΛΕΙΟ ΛΕΙΤΟΥΡΓΕΙ:*</strong>  </td>
					   <td> <select name="sch_orario" required>
                            <option value="<?php echo $row['sch_orario'] ?>" selected><?php echo $row['sch_orario'] ?></option>
                            <option value="ΜΟΝΟ ΠΡΩΙ" >ΜΟΝΟ ΠΡΩΙ</option>
<option value="ΠΕΡΙΒΑΛΛΟΝΤΙΚΗΣ ΑΓΩΓΗΣ" >ΠΡΩΙ ΚΑΙ ΑΠΟΓΕΥΜΑ</option>
<option value="ΑΓΩΓΗΣ ΥΓΕΙΑΣ" >ΜΟΝΟ ΑΠΟΓΕΥΜΑ</option>


                          </select>

					                          			               
                           
                        </td>
                      <tr> 
				   <tr> 
                  <td height="10"></td>
                </tr>
				  </table>
				  <table width="100%" cellpadding="1" cellspacing="1" border="1">
				  <tr> 
                        <td width="80" height="30" class="maintext" align="center"> ΕΠΩΝΥΜΟ ΟΝΟΜΑ ΕΚΠΑΙΔΕΥΤΙΚΟΥ ΠΟΥ ΑΝΑΛΑΜΒΑΝΕΙ ΤΟ ΠΡΟΓΡΑΜΜΑ*
 
                           </td>
						  <td width="80" height="30" class="maintext" align="center">Α.Φ.Μ*
 
                           </td> 
						   
                        <td width="80" height="30" class="maintext" align="center">(ΠΕ)* 
                           </td>
						  <td width="80" height="30" class="maintext" align="center" >ΩΡΕΣ ΣΥΜΠΛΗΡΩΣΗΣ ΩΡΑΡΙΟΥ 
                           </td> 
						  <td width="80" height="30" class="maintext" align="center">ΥΛΟΠΟΙΗΣΗ ΠΡΟΓΡΑΜΜΑΤΩΝ ΣΕ ΠΡΟΗΓΟΥΜΕΝΑ ΕΤΗ (ΝΑΙ/ΟΧΙ)* 
                           </td>
						   <td width="80" height="30" class="maintext" align="center">ΣΧΕΤΙΚΗ ΕΠΙΜΟΡΦΩΣΗ(ΦΟΡΕΑΣ ΕΠΙΜΟΡΦΩΣΗΣ)

                           </td> 
						   
                      </tr>
				  
				  <tr> 
                        <td width="80" height="30" class="maintext" align="center"> 
						<input id="ypeythinos_name" name ="ypeythinos_name" type="text"  onchange="signature();"  value="<?php echo $row['ypeythinos_name'] ?>" size="25" maxlength="35" required="true" loginRegex="true">
 
                           </td>
						   <td width="80" height="30" class="maintext" align="center"> 
						<input id ="ypeythinos_amm" class="amm" name ="ypeythinos_amm" type="text" value="<?php echo $row['ypeythinos_amm'] ?>" size="9" maxlength="9" onchange="checkypeythinos(); " required="true" digits="true" minlength="9" duplicate="true">
 
                           </td>
                        <td width="80" height="30" class="maintext" align="center">
						       <select name="ypeythinos_klados" required>
                            <option value="<?php echo $row['ypeythinos_klados'] ?>" selected><?php echo $row['ypeythinos_klados'] ?></option>
                            <option value="ΠΕ 60" >ΠΕ 60</option>
<option value="ΠΕ 70" >ΠΕ 70</option>
<option value="ΠΕ 01" >ΠΕ 01</option>
<option value="ΠΕ 02" >ΠΕ 02</option>

<option value="ΠΕ 03" >ΠΕ 03</option>
<option value="ΠΕ 04" >ΠΕ 04</option>
<option value="ΠΕ 05" >ΠΕ 05</option>
<option value="ΠΕ 05" >ΠΕ 06</option>
<option value="ΠΕ 07" >ΠΕ 07</option>
<option value="ΠΕ 08" >ΠΕ 08</option>
<option value="ΠΕ 09" >ΠΕ 09</option>
<option value="ΠΕ 10" >ΠΕ 10</option>
<option value="ΠΕ 11" >ΠΕ 11</option>

<option value="ΠΕ 12" >ΠΕ 12</option>
<option value="ΠΕ 13" >ΠΕ 13</option>
<option value="ΠΕ 14" >ΠΕ 14</option>
<option value="ΠΕ 15" >ΠΕ 15</option>
<option value="ΠΕ 16" >ΠΕ 16</option>
<option value="ΠΕ 17" >ΠΕ 17</option>
<option value="ΠΕ 18" >ΠΕ 18</option>
<option value="ΠΕ 19" >ΠΕ 19</option>
<option value="ΠΕ 20" >ΠΕ 20</option>

<option value="other" >'Αλλη</option>
                          </select> 
                           </td>
						  <td width="100" height="30" class="maintext" align="center" >
						      <select id="ypeythinos_wres" name="ypeythinos_wres" onchange="checkproghours();">
                            <option value="<?php echo $row['ypeythinos_wres'] ?>" selected><?php echo $row['ypeythinos_wres'] ?></option>
                            <option value="0" >0 ώρες</option>
<option value="1" >1 ώρα</option>
<option value="2" >2 ώρες</option>

                          </select>
                           </td> 
						  <td width="100" height="30" class="maintext" align="center">
						  <select name="ypeythinos_again" required>
                            <option value="<?php echo $row['ypeythinos_again'] ?>" selected><?php echo $row['ypeythinos_again'] ?></option>
                            <option value="ΝΑΙ" >ΝΑΙ</option>
<option value="ΟΧΙ" >ΟΧΙ</option>


                          </select>
						  
						
                           </td>
						   <td width="100" height="30" class="maintext" align="center">
						  
                       <textarea cols="25" rows="5" name="ypeythinos_epimorfosi"><?php echo $row['ypeythinos_epimorfosi'] ?></textarea>
                           </td> 
						   
                      </tr>
				  </table>
				  
				  </TD></TR>
				  </TABLE>
				  
				  


				  <table width="100%"  cellpadding="1" cellspacing="1" border="1">
					  
					   <tr>
				 
				 <td width="100%">  <table width="100%" cellpadding="1" cellspacing="1" border="1">
				  <tr> 
                        <td width="200" height="30" class="maintext" align="center"><strong>ΑΛΛΟΙ ΕΚΠΑΙΔΕΥΤΙΚΟΙ</BR> ΠΟΥ ΣΥΜΜΕΤΕΧΟΥΝ ΣΤΟ ΠΡΟΓΡΑΜΜΑ:</strong>
 
                           </td>			 
				                  				 
						 						  
						   
                      </tr></table>  <td >
					</tr>
					  
					<tr><td width="550">
				 <input type="button" value=" Πατήστε για εισαγωγή 1ου συμμετέχοντα " onclick="symetexon1();">
					  
				   <input type="button" value="Ακύρωση εισαγωγής 1ου συμμετέχοντα" onclick="symetexon1_del();">
					  </td></tr> 
				
					  
					  <tr>
				 
				 <td width="100%"> <DIV id='level4' > <DIV><td >
					</tr>
					<tr><td>
					
					
					
					</td></tr>
					  

                   <tr><td>
				  
					  </td></tr>
					 
                 <tr><td width="100%">
				 <input type="button" value=" Πατήστε για εισαγωγή 2ου συμμετέχοντα " onclick="symetexon2();">
					 
				 <input type="button" value="Ακύρωση εισαγωγής 2ου συμμετέχοντα" onclick="symetexon2_del();">
					  </td></tr> 

                   <tr>
				 
				 <td width="100%"> <DIV id='sym2' > <DIV><td >
					</tr>
					  
					  
					
					  
					 <tr><td>
				  
					  </td></tr>
					 
               <tr><td width="100%">
				 <input type="button" value=" Πατήστε για εισαγωγή 3ου συμμετέχοντα " onclick="symetexon3();">
					  
				  <input type="button" value="Ακύρωση εισαγωγής 3ου συμμετέχοντα" onclick="symetexon3_del();">
					  </td></tr> 

                   <tr>
				 
				 <td width="100%"> <DIV id='sym3' > <DIV><td >
					</tr>
					  
					  
					
					  
					  
					 
					  </table> 
				  
				  		  			 
				 

				 <tr> 
                  <td height="10"></td>
                </tr>
				
				<table width="100%" cellpadding="0" cellspacing="0">
<tr> 
                  <td height="10"></td>
                </tr>
				   <tr> 
                  <td width="300" class="maintext"><strong>ΜΑΘΗΤΕΣ ΠΟΥ ΣΥΜΜΕΤΕΧΟΥΝ ΣΤΟ ΠΡΟΓΡΑΜΜΑ:</strong></td>
                </tr>
				  
				  <tr> 
                        <td width="200" height="30" class="maintext" valign="middle">ΣΥΝΟΛΟ ΜΑΘΗΤΩΝ ΤΗΣ ΟΜΑΔΑΣ:*  
                          <input name="mathites_synolo" type="text" value="<?php echo $row['mathites_synolo'] ?>" size="10" maxlength="10" required="true" digits="true"> </td>
                        <td>ΑΓΟΡΙΑ: *  
                          <input name ="agoria" type="text" value="<?php echo $row['agoria'] ?>" size="10" maxlength="10" required="true" digits="true"> </td>
						  <td>ΚΟΡΙΤΣΙΑ:*  
                          <input name ="koritsia" type="text" value="<?php echo $row['koritsia'] ?>" size="10" maxlength="10" required="true" digits="true"> </td>
                      </tr>
				  <tr> 
                  <td height="10"></td>
                </tr>
				  <tr valign="middle"> 
                      
					   <td>                          
                         
						   Σύνθεση ομάδας:
                         <select name="amiges" required>
                            <option value="<?php echo $row['amiges'] ?>" selected><?php echo $row['amiges'] ?></option>
                            <option value="ΑΜΙΓΕΣ ΤΜΗΜΑ" >ΑΜΙΓΕΣ ΤΜΗΜΑ</option>
<option value="ΜΕΙΚΤΗ ΟΜΑΔΑ" >ΜΕΙΚΤΗ ΟΜΑΔΑ</option>


                          </select> 
						               
                           
                        </td>
                      <tr> 
				   <tr> 
                  <td height="10"></td>
                </tr>
				  </table>
				
				<table width="100%" cellpadding="0" cellspacing="0">
<tr> 
                  <td height="10"></td>
                </tr>
				   <tr> 
                  <td width="200" class="maintext"><strong>ΣΥΝΑΝΤΗΣΗ ΟΜΑΔΑΣ:</strong></td>
                </tr>
				  
				  <tr> 
                        <td width="100" height="30" class="maintext" valign="middle"> ΗΜΕΡΑ/ΕΣ:* (π.χ ΔΕΥΤΕΡΑ-ΤΕΤΑΡΤΗ)</br> 
                         <input name ="meet_day" type="text" value="<?php echo $row['meet_day'] ?>" size="20" maxlength="25" required> </td>

						  
                       
                        <td>ΩΡΑ/ΕΣ ΕΝΑΡΞΗΣ:* (π.χ 15:30)
                          <input name ="meet_hour" type="text" value="<?php echo $row['meet_hour'] ?>" size="20" maxlength="20" required> </td>
						  <td>ΤΟΠΟΣ: * 
                          <input name ="meet_place" type="text" value="<?php echo $row['meet_place'] ?>" size="20" maxlength="25" required> </td>
                      </tr>
				  <tr> 
                  <td height="10"></td>
                </tr>
				
				<tr> 
                  <td><strong>ΥΠΑΡΧΕΙ ΣΤΟ ΣΧΟΛΕΙΟ ΑΡΧΕΙΟ ΤΩΝ ΣΧΟΛΙΚΩΝ ΔΡΑΣΤΗΡΙΟΤΗΤΩΝ;*
				 </strong></td>
                
                      
					   <td>                          
                         						   
                          <select name="arxeio" required>
                            <option value="<?php echo $row['arxeio'] ?>" selected><?php echo $row['arxeio'] ?></option>
                            <option value="ΝΑΙ" >ΝΑΙ</option>
                            <option value="ΟΧΙ" >ΟΧΙ</option>


                          </select>
						               
                           
                        </td>
                      <tr> 
				   <tr> 
                  <td height="10"></td>
                </tr>
				  </table>
				  
              <tr> 
                  <td height="10"></td>
                </tr>
                <tr> 
                  <td> <table width="100%" cellpadding="0" cellspacing="0">

				   <tr> 
                  <td class="maintext"><strong>ΠΑΙΔΑΓΩΓΙΚΗ ΔΙΑΔΙΚΑΣΙΑ:</strong></td>
                </tr>
				<tr> 
                  <td class="maintext"><strong>A.ΥΠΟΘΕΜΑΤΑ (ΠΟΙΕΣ ΔΙΑΣΤΑΣΕΙΣ-ΟΨΕΙΣ ΤΟΥ ΘΕΜΑΤΟΣ ΘΑ ΠΡΟΣΕΓΓΙΣΕΤΕ):</strong> *</td>
                </tr>
				
				  <tr valign="middle"> 
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="100" rows="5" name="ypothemata" required><?php echo $row['ypothemata'] ?></textarea>
						</td>
                        
                      </tr>
				<tr> 
                  <td class="maintext"><strong>Β. ΠΟΙΟΥΣ ΠΑΙΔΑΓΩΓΙΚΟΥΣ ΣΤΟΧΟΥΣ ΒΑΛΑΤΕ; (γράψτε συνοπτικά τους πιο σημαντικούς):</strong> *</td>
                </tr>
				
				  <tr valign="middle"> 
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="100" rows="5" name="stoxoi" required><?php echo $row['stoxoi'] ?></textarea>
						</td>
                        
                      </tr>	  
				<tr> 
                  <td class="maintext"><strong>Γ. ΜΕΘΟΔΟΛΟΓΙΑ ΥΛΟΠΟΙΗΣΗΣ – ΣΥΝΕΡΓΑΣΙΕΣ ΜΕ ΑΛΛΟΥΣ ΦΟΡΕΙΣ:</strong> *</td>
                </tr>
				
				  <tr valign="middle"> 
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="100" rows="5" name="methodologia" required><?php echo $row['methodologia'] ?></textarea>
						</td>
                        
                      </tr>	  
<tr> 
                  <td class="maintext"><strong>Δ. ΠΕΔΙΑ ΣΥΝΔΕΣΗΣ ΜΕ ΤΑ ΠΡΟΓΡΑΜΜΑΤΑ ΣΠΟΥΔΩΝ ΤΩΝ ΑΝΤΙΣΤΟΙΧΩΝ ΓΝΩΣΤΙΚΩΝ ΑΝΤΙΚΕΙΜΕΝΩΝ:</strong> *</td>
                </tr>
				
				  <tr valign="middle"> 
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="100" rows="5" name="syndeseis" required><?php echo $row['syndeseis'] ?></textarea>
						</td>
                        
                      </tr>	 
					  
					  
</table>					  

<table width="100%" cellpadding="0" cellspacing="0">

				  
				<tr> 
                  <td class="maintext"><strong>Ε. ΚΑΤΑΓΡΑΨΤΕ ΣΥΝΟΠΤΙΚΑ ΤΗΝ ΧΡΟΝΙΚΗ ΕΞΕΛΙΞΗ ΤΟΥ ΠΡΟΓΡΑΜΜΑΤΟΣ ΣΑΣ 
ΚΑΤΑ ΤΗ ΣΧΟΛΙΚΗ ΧΡΟΝΙΑ (20- 25 ΔΙΩΡΑ)
Η χρονική εξέλιξη του προγράμματος
( διερεύνηση θέματος, επεξεργασία, υλοποίηση δράσεων, επισκέψεων, παρουσίαση κλπ)
</strong></td>
                </tr></table>
				<table width="100%" cellpadding="1" cellspacing="1"border="1">
				<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>1ος Μήνας</strong> *</td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="100" rows="5" name="month1" required><?php echo $row['month1'] ?></textarea>
						</td>
                        
                      </tr>	 
				<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>2ος Μήνας</strong> *</td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="100" rows="5" name="month2" required><?php echo $row['month2'] ?></textarea>
						</td>
                        
                      </tr>	
				<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>3ος Μήνας</strong> *</td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="100" rows="5" name="month3" required><?php echo $row['month3'] ?></textarea>
						</td>
                        
                      </tr>	
				<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>4ος Μήνας</strong> *</td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="100" rows="5" name="month4" required><?php echo $row['month4'] ?></textarea>
						</td>
                        
                      </tr>	
			<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>5ος Μήνας</strong> *</td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<textarea cols="100" rows="5" name="month5" required><?php echo $row['month5'] ?></textarea>
						</td>
                        
                      </tr>			  
				</table>
				
				 <tr> 
                  <td height="10"></td>
                </tr>
			<tr valign="middle"> 
			<td   class="maintext"  >Αριθμός προβλεπόμενων επισκέψεων: *<input name="episkepseis" type="text" value="<?php echo $row['episkepseis'] ?>" size="5" maxlength="5" required="true" digits="true">
                          </td>

                      </tr>
					  
					   <tr> 
                  <td height="10"></td>
                </tr>
			
                      
                     
                      
                      
                     
                       
<tr> 
                  <td height="1" bgcolor="#336699" ></td>
                </tr>
			<tr> 
                        <td height="30" class="maintext"></br><strong>Η παρούσα επέχει θέση Υπεύθυνης Δήλωσης του Ν. 1599/86</strong>

                          &nbsp; </td>

                      </tr>


                      </tr>
                    </table></td>
                </tr>
                <!-- Πίνακας Προσόντων -->
                <tr> 
                  <td height="10"></td>
                </tr>
                <tr> 
                  <td height="10"></td>
                </tr>

                <tr> 
                  <td> <table width="100%" cellpadding="0" cellspacing="0">
                      <tr> 
                        
                      </tr>
                    </td>
                </tr> 
</table><table width="100%" cellpadding="0" cellspacing="0">
                <tr> 
                  <td height="10"></td>
                </tr>
                <tr> 
                  <td height="1" bgcolor="#336699" ></td>
                </tr>
                <tr> 
                  <td height="10"></td>
                </tr></table>
				
				
				<table width="90%">
                <tr> 
                  <td class="maintext">Ο ΕΚΠΑΙΔΕΥΤΙΚΟΣ   


                  </td><td class="maintext">Ο ΔΙΕΥΘΥΝΤΗΣ  
 	

                  </td>
               
				 <tr> 
                  <td class="maintext"><div id="sign1"><?php echo $row['ypeythinos_name'] ?></div>
				</td>
				<td class="maintext">
				<div id="sign2"><?php echo $row['dieythintis_name'] ?></div>
				</td>
				 </tr>
				
				</table>
				
				
				
				
				
				
                                <tr> 
                  <td > <table width="60%" cellpadding="0" cellspacing="5" align="center">
                      <tr> 
                        <td  height="10" width="30" class="maintext" align="right">&nbsp;</td>
                        <td> </td>
                      </tr>
                    </table></td>
                </tr>
                <tr> 
                  <td height="30" class="maintext">Δηλώνω υπεύθυνα ότι  τα  ανωτέρω στοιχεία είναι ακριβή.</td>

                </tr>
                <tr> 
                  <td height="30" align="right" class="maintext">Ημερομηνία τροποποίησης: 
                     <strong><?php echo $ap ?></strong>&nbsp;&nbsp;</td>
                </tr>
                <!--   Καταχώρηση   -->
                <tr> 
                  <td height="10"></td>
                </tr>
                <tr> 
                  <td height="1" bgcolor="#336699" ></td>

                </tr>
                <tr> 
                  <td height="10"></td>
                </tr>
                <tr> 
                  <td  align="center"><br> 
                                        <input type="submit" name="save" value="Καταχώρηση"  > 
                     
					                       &nbsp;
										<input type="button" name="arxi" value="Αρχική σελίδα" onClick="window.location.replace('main.php')">
<!--input type="hidden" name="submit" value="Καταχώρηση"  -->
                  </td>

</tr>              </table>
			   </td>
			</tr>
			</table>
	  </td></tr>
    </table>

            </td>
        </tr>

</table>
</form>

<script>

$.validator.addMethod("loginRegex", function(value, element) {
        return this.optional(element) || /^[Α-Ω\ ]+$/i.test(value);
    }, "Κεφαλαία Ελληνικά.");

$.validator.addMethod("duplicate", function(value, element) {
       var parentForm = $(element).closest('form');
            var timeRepeated = 0;
            $(parentForm.find('.amm')).each(function () {
                if ($(this).val() === value) {
                    timeRepeated++;
                }
           });
            if (timeRepeated === 1 || timeRepeated === 0) {
                return true
            }
            else { 
                return false
            }	
 } , "Διπλή εγγραφή Α.Φ.Μ.");

	  
	
	
	
$("#stoixeia").validate({

rules: {    symetexwn1_amm: {      required: true,      digits: true    },  

		
		
				// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("checked");
		},
		highlight: function(element, errorClass) {
			$(element).parent().next().find("." + errorClass).removeClass("checked");
		}


}

});
//$("#stoixeia2").validate();
</script> 





 </td>
 </tr>
</table>
 </body>
</html>


  </tr>
</td>
</tr>



</table>
 <noscript>

    <br />
    <div class="error" style="margin:3px;">
      Για να χρησιμοποιήσετε την εφαρμογή, πρέπει να ενεργοποιήσετε τη javascript στο φυλλομετρητή σας. 
      Παρακαλούμε ενεργοποιήστε την τώρα και πατήστε το κουμπί ανανέωση στον φυλλομετρητή.
    </div>

  </noscript>



<?php if (($row['symetexwn1_amm'])!="") { ?>  <script> symetexon1(); </script> <?php } ?>
<?php if (($row['symetexwn2_amm'])!="") { ?>  <script> symetexon2(); </script> <?php } ?>
<?php if (($row['symetexwn3_amm'])!="") { ?>  <script> symetexon3(); </script> <?php } ?>

</body>
</html> 
