<?php

 session_start();
 
 if (!isset($_SESSION["logMessage"])) 
		$_SESSION['logMessage']="";
 
 

include 'Includes/Logindb.inc';

 

 $connection=LoginToDB(); 
 $QueryStr="SELECT sch_name,sch_id
                   FROM pschools ORDER BY  sch_id" ;   
         
	$result=QueryDB($QueryStr,$connection);   



//	$row=mysql_fetch_row($result);
 
  
 
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ΑΙΤΗΣΕΙΣ ΠΡΟΓΡΑΜΜΑΤΩΝ - ΔΔΕ ΑΝ. ΑΤΤΙΚΗΣ</title>

<link type="text/css" rel="stylesheet" href="global/admin_styles.css">
</head>
<body onload="document.login.formUsername.focus();">

<table width='100%' height="100%" border='0' cellpadding='0' cellspacing='0'>
<tr>
  <td width='200' height="60" valign='center' align='center'><img src="Images/logo_1.gif" /></td>
  <td class="top_banner" valign='center' align='center' ><b> ΔΙΕΥΘΥΝΣΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ ΑΝΑΤ. ΑΤΤΙΚΗΣ</b></td>

</tr>
<tr>
  <td class="top_row_left" height='18'>&nbsp;</td>
  <td class="top_row_right">&nbsp;</td>
</tr>
<tr>
  <td class="left_column">
  	<div class='nav_link_selected'>Είσοδος στο Σύστημα</div><div class='nav_link'><a href='Admin/Teachers/anaktisi.php'>Απόκτηση-Ανάκτηση Κωδικού Πρόσβασης</a></div>
  	&nbsp;</td>
  <td bgcolor="white" valign="top" style="padding: 20px;">

  <table>
  <tr>

    <td>

    <p class="title" align='center'>ΑΙΤΗΣΕΙΣ ΠΡΟΓΡΑΜΜΑΤΩΝ ΣΧΟΛΙΚΩΝ ΔΡΑΣΤΗΡΙΟΤΗΤΩΝ </br>(ΠΕΡΙΒΑΛΛΟΝΤΙΚΗ ΕΚΠΑΙΔΕΥΣΗ, ΠΟΛΙΤΙΣΤΙΚΑ ΘΕΜΑΤΑ, ΑΓΩΓΗ ΥΓΕΙΑΣ, ΑΓΩΓΗ ΣΤΑΔΙΟΔΡΟΜΙΑΣ) </br></br> </p>
 <p class="title" > ΕΙΣΟΔΟΣ ΣΤΟ ΣΥΣΤΗΜΑ</p>
    <p class="common_width">
      Παρακαλούμε επιλέξτε <b>το σχολείο σας από τη λίστα που ακολουθεί </b> και εισάγετε <b> Κωδικό Πρόσβασης(password)</b>  για να εισέλθετε στο σύστημα Υποβολής Αιτήσεων Προγραμμάτων.
     
    </p>
<p class="common_width"><b>ΟΔΗΓΙΕΣ:</b><br>
      Για να αποκτήσετε ή να ανακτήσετε τον <b>Κωδικό Πρόσβασης(password)</b> επιλέξτε απο το μενού αριστερά τον σύνδεσμο <b>Απόκτηση-Ανάκτηση Κωδικού Πρόσβασης"</b>.
     
    </p>

    
   <SCRIPT language=JavaScript type="">
function validateSubmit() {
  if(document.login.formUsername.value == "" || document.login.formPassword.value == ""){
    alert("Δεν συμπληρώσατε τα αναγνωριστικά εισόδου στο σύστημα!!!");
    document.login.formUsername.value = "";
    document.login.formPassword.value = "";
    return false;
    
  }
  
  return true;
}

</SCRIPT> 
    
    
    
    
    
       
    <form name="login" onsubmit="return validateSubmit()" method="POST" action="Scripts/WebPages/Admin/Authenticate.php">
    
       
    <table width="390" cellpadding="1" class="login_outer_table">

    <tr>
      <td colspan="1">

      <table width="100%" cellpadding="0" cellspacing="1" class="login_inner_table">
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
      <td>

      <table width="350" cellpadding="0" cellspacing="1">
      <tr>
        <td class="login_table_text">Επιλέξτε το σχολείο σας απο τη λίστα:</td>
        <td> <select name="formUsername" required="1"><option value="" >Επιλέξτε</option>
	<?php	 while ($row=mysql_fetch_row($result)){
	
                            ?><option value="<?php echo $row[0]; ?>" ><?php echo $row[0]; ?></option>
		<?php } ?></SELECT>
		
      </tr>
      <tr>  
        <td class="login_table_text">Εισάγετε Κωδικό Πρόσβασης (password)</td>
        <td><input type="Password" maxlength="8" size="25" name="formPassword" required="1" value=""></td>

      </tr>
      
      
      
      </table>

      </td>
      <td align='center'>
        <script type="text/javascript">
        <!--
        document.write('<input type="submit" value="ΕΙΣΟΔΟΣ">&nbsp;');
        -->
        </script>
      </td>
      </tr>
      
      <tr>

      <td colspan="2">&nbsp;</td>
      </tr>
      
      </table>
    
      </td>
    </tr>

    <tr> <td colspan="2" align=center ><b><span style='color: red'><?php ECHO $_SESSION["logMessage"]; ?></span></b></td>        
       
      </tr>
    
    
    
      
    </table>
    
    </form>

<?php

$_SESSION["logMessage"]="";

?>


  </td></tr>

  </table>

  <noscript>

    <br />
    <div class="error" style="margin:3px;">
      Για να χρησιμοποιήσετε την εφαρμογή, πρέπει να ενεργοποιήσετε τη javascript στο φυλλομετρητή σας. 
      Παρακαλούμε ενεργοποιήστε την τώρα και πατήστε το κουμπί ανανέωση στον φυλλομετρητή.
    </div>

  </noscript>
</td>
</tr>
<tr>
  <td colspan='4' class="footer"><font color='blue'><b>© <?php echo date('Y'); ?> </b> ΚΕΠΛΗΝΕΤ Δ.Δ.Ε ΑΝΑΤ. ΑΤΤΙΚΗΣ<BR>
      </font> </td>
</tr>
</table>

</body>

</html>
 
