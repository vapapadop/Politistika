<?php 
session_start(); 	

if (!isset($_SESSION['authenticatedUser'])){
  header("Location: ../../login.php"); 
  exit; 
}

include '../../Includes/Logindb.inc'; 
$connection=LoginToDB(); 


?> 
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ΑΙΤΗΣΕΙΣ ΠΡΟΓΡΑΜΜΑΤΩΝ ΣΧΟΛΙΚΩΝ ΔΡΑΣΤΗΡΙΟΤΗΤΩΝ - Αρχική σελίδα</title>

  
  <link type="text/css" rel="stylesheet" href="../../global/admin_styles.css">
  

</head>

<body>

<?php

$connection=LoginToDB(); 
       $appUsername3 =$_SESSION["authenticatedUser"];
       $QueryStr="SELECT sch_id,sch_name FROM pschools WHERE sch_name='".$appUsername3."'";
       $result5=QueryDB($QueryStr,$connection);
       $row5=mysql_fetch_row($result5);
      
	  //to id tou sxoleiou pou ekane login
	  $tid=$row5[0];

	
        $_SESSION['sch_id']=$tid;
       

$QueryStr="SELECT sch_id,submited, sch_perioxi,sch_name,sch_dimos,sch_phone,fax,email 
                   FROM pschools WHERE sch_id=".$tid."" ;   
         
	$result30=QueryDB($QueryStr,$connection);   


$QueryStr="SELECT submission_id,sch_id,programa,sch_name,submission_date,ar_protocol, sxol_etos,ypeythinos_name,is_finalized,last_modified_date 
                   FROM ft_form_4 WHERE sch_id=".$tid."" ;   
         
	$result100=QueryDB($QueryStr,$connection);   	
	
	
	$QueryStr="SELECT active, trexon_sxol_etos
                   FROM settings " ;   
         
	$result70=QueryDB($QueryStr,$connection);   
        $row70=mysql_fetch_row($result70);
        $active=$row70[0];
        $sxol_etos=$row70[1];

?>


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

  <div class='nav_link_selected'>Αρχική Σελίδα</div><div class='nav_link'><a href='../../Admin/Teachers/egkyklios.doc' target="blank" >Εγκύκλιος</a></div><div class='nav_link'><a href='../../Admin/Teachers/logout.php'>Έξοδος</a></div>
  </td>
  <td class="main_content">
 
    <table cellpadding="0" cellspacing="0" height="35">
    <tr>
      <td width="45"><img src="../../Images/icon_personal.jpg" /></td>

      <td class="title">Στοιχεία Σχολείου.</td>
    </tr>
    </table>

       
    
    

    <form action="" method="post">

    <div id='page_1' style='display: block;'>
                <table class='list_table' width='650' cellpadding='0' cellspacing='1'>
                <tr style='height: 20px;'>
                  <th width='25'>ID</th>
                  <th>Περιοχή</th>
                  <th>Ονομασία </td>
                  <th width='80'>Δήμος</th>
		          
                  <th width='85'>Τηλέφωνο</th>
                  <th width='70'>fax</th>
                  <th width='20'>E-mail</th>
		
                </tr>

<?php
	while ($row30=mysql_fetch_row($result30)){
$subtid=$row30[1];
$_SESSION['submited']=$subtid;

$ap=date('d/ m/ y');
$ip=$_SERVER['REMOTE_ADDR'];
?>


		
	<tr style='height: 20px;'>
              <td align='center'><?php echo $row30[0] ?></td>
              <td align='center'><?php echo $row30[2] ?></td>
              <td align='center'><?php echo $row30[3] ?></td>
              
              <td align='center'><?php echo $row30[4] ?></td>              
	      <td align='center'><?php echo $row30[5] ?></td>
              <td align='center'> <?php echo $row30[6] ?>   </td>
			   <td align='center'>  <?php echo $row30[7] ?>  </td>
	     
            </tr>

<?php } ?>
		</table></div>
    </form>
	<p class="common_width">
    
    </p>
<table cellpadding="0" cellspacing="0" height="35">
    <tr>
      <td width="45"><img src="../../Images/icon_application.jpg" /></td>

      <td class="title">Νέα Αίτηση Προγράμματος.</td>
    </tr>
    </table>
<p class="common_width"><b>ΟΔΗΓΙΕΣ:</b><br>
      Εδώ μπορείτε να υποβάλετε αίτηση για ένα ή περισσότερα προγράμματα επιλέγοντας τον σύνδεσμο <b>ΝΕΑ ΑΙΤΗΣΗ</b>.</br>
	  Κάθε νέα αίτηση προγράμματος που υποβάλετε αποθηκεύεται και εμφανίζεται παρακάτω όπου και μπορείτε να την επεξεργαστείτε ή να τη διαγράψετε.</br> 
	  <b>ΠΡΟΣΟΧΗ:</b>Οι αιτήσεις προγραμμάτων θα ληφθούν υπόψη όταν υποβληθούν οριστικά εντός της προθεσμίας που έχει οριστεί και τους αποδοθεί Αριθμός ηλεκτρονικής καταχώρησης</br>
	  <b>Η οριστική υποβολή θα γίνει μια φορά συνολικά για όλα τα προγράμματα</b> 
    </p>

 <div id='page_2' style='display: block;'>
                <table class='list_table' width='600' cellpadding='0' cellspacing='1'>
                <tr style='height: 20px;'>
                  <th width='5%'></th>
                  <th width='25%'>Τύπος Αίτησης</th>
                 <th width='10%'></th>
                  <th width='60%'>ΝΕΑ ΑΙΤΗΣΗ</th>                  
           	 
			 
                </tr><tr style='height: 20px;'>
              <td align='center' class='form_id'></td>
              <td>Αίτηση Προγράμματος</td>
              <th width='10%' ><img src="../../Images/r_hand.gif" /></th>
              <?php 
       		if (($subtid==1) || ($active==1)){
		?>	
		<td align='center'>--ΝΕΑ ΑΙΤΗΣΗ--</td>
	<?php }else {?>
         <td align='center'><a href='editform.php' >ΝΕΑ ΑΙΤΗΣΗ</a> </td>      
		
		<?php } ?>


		  
            </tr></table></div>	
	
	<p class="common_width">
    
    </p>
	
	
	
<table cellpadding="0" cellspacing="0" height="35">
    <tr>
      <td width="45"><img src="../../Images/icon_application.jpg" /></td>

      <td class="title">Αιτήσεις για προγράμματα που έχουν υποβληθεί.</td>
    </tr>
    </table>
 
    
	 <form action="" method="post">

    <div id='page_1' style='display: block;'>
                <table class='list_table' width='650' cellpadding='0' cellspacing='1'>
                <tr style='height: 20px;'>
                  <th width='25'>ID</th>
                  <th>Πρόγραμμα</th>
                  <th width='80' >Σχολείο </td>
                  <th></th>
		          <th></th>
                  <th width='85'>Αρ.Ηλ.Καταχώρησης</th>
                  <th width='70'>Σχολ. Ετος</th>
                  <th width='70'>Υπεύθυνος</th>
				  <th width='20'></th>
				  <th width='20'"></th>
				  <th width='20'></th>
		
                </tr>

<?php
$i=0;
	while ($row100=mysql_fetch_row($result100)){
$i=$i+1;
$isfinalized=$row100[8];
$diakopi_date=$row100[9];		
	
?>


		
	<tr style='height: 20px;'>
              <td align='center'><?php echo $i ?></td>
              <td align='center'><?php echo $row100[2] ?></td>
              <td align='center'><?php echo $row100[3] ?></td>
              <td align='center'></td>
              <td align='center'></td>
			  <?php  if (($subtid==1) || ($active==1)){
			  
			     if ($subtid==1){
		?>
			  
              <td align='center'><?php echo $row100[0]; echo '--'; echo $row100[4]; ?></td>  
 <?php } else { ?><td align='center'>Δεν έγινε εμπρόθεσμη οριστική υποβολή</td> <?php } ?>
 <?php } else { ?><td align='center'>Όταν υποβληθεί οριστικά</td> <?php } ?>
			  
	      <td align='center'><?php echo $sxol_etos ?></td>
              <td align='center'>  <?php echo $row100[7] ?>  </td>
			  	<?php 
					
       		if (($subtid==1) || ($active==1)){
		?>
			  <td align='center'>--</td>
			  <?php } else { ?>
			   <td align='center'>  <a href='pds_edit.php?subid=<?php echo $row100[0] ?>' >ΕΠΕΞΕΡΓΑΣΙΑ</a>  </td>
			  <?php } ?>
			  <?php 
			  if (($subtid==1) || ($active==1)){
			  
			     if ($subtid==1){
		?>
			  
			  <td align='center'>  <a href='print.php?subid=<?php echo $row100[0] ?>'>ΕΚΤΥΠΩΣΗ</a>  </td>
			      <?php } else { ?><td align='center'>Δεν έγινε εμπρόθεσμη οριστική υποβολή</td> <?php } ?>
			  
			 <?php } else { ?><td align='center'><a href='print.php?subid=<?php echo $row100[0] ?>'>ΕΚΤΥΠΩΣΗ </a></td> <?php } ?>
			  <?php 
					
       		if (($subtid==1) || ($active==1)){
		         if ($subtid==1){
				  if ($isfinalized=="yes"){
		?>
			  <td align='center'>Ηλ. Καταχώρηση ΔΙΑΚΟΠΗΣ ΠΡΟΓΡΑΜΜΑΤΟΣ:</br> <?php echo $row100[0]; echo '--';echo $diakopi_date ?></td> 
			  <?php } else {?>
			  
			  <td align='center'>  <a href='diakopi.php?subid=<?php echo $row100[0] ?>' onclick="if(confirm('ΠΡΟΣΟΧΗ! ΘΕΛΕΤΕ ΝΑ ΥΠΟΒΑΛΕΤΕ ΑΙΤΗΜΑ ΔΙΑΚΟΠΗΣ ΤΟΥ ΠΡΟΓΡΑΜΜΑΤΟΣ ? ΘΑ ΚΑΤΑΧΩΡΗΘΕΙ ΣΤΟ ΣΥΣΤΗΜΑ ΟΤΙ ΤΟ ΠΡΟΓΡΑΜΜΑ ΔΙΕΚΟΠΗ ΚΑΙ ΘΑ ΣΑΣ ΑΠΟΔΟΘΕΙ ΑΡ.ΗΛ.ΚΑΤΑΧΩΡΗΣΗΣ ΔΙΑΚΟΠΗΣ ΠΡΟΓΡΑΜΜΑΤΟΣ'))
form.submit();
else ;return false">ΔΙΑΚΟΠΗ ΤΟΥ ΠΡΟΓΡΑΜΜΑΤΟΣ</a>  </td>
<?php } ?>

             <?php } else { ?><td align='center'></td> <?php } ?>
             <?php } else { ?>

  <td align='center'>  <a href='delete.php?subid=<?php echo $row100[0] ?>' onclick="if(confirm('Προσοχή! ΘΕΛΕΤΕ ΝΑ ΔΙΑΓΡΑΨΕΤΕ ΟΡΙΣΤΙΚΑ ΤΗΝ ΑΙΤΗΣΗ?'))
form.submit();
else ;return false">ΔΙΑΓΡΑΦΗ</a>  </td>
 
  <?php } ?>

	     
            </tr>

<?php } ?>
		</table></div>
    </form>
	
	
		
	 <p class="common_width">
     
    </p>


<table cellpadding="0" cellspacing="0" height="35">
    <tr>
      <td width="45"><img src="../../Images/icon_application.jpg" /></td>

      <td class="title">ΟΡΙΣΤΙΚΗ ΥΠΟΒΟΛΗ ΑΙΤΗΣΕΩΝ.</td>
    </tr>
    </table>

<p class="common_width"><b>ΟΔΗΓΙΕΣ:</b><br>
      Εδώ μπορείτε να υποβάλετε οριστικά την αίτηση ή τις αιτήσεις προγραμμάτων που έχετε καταχωρήσει προσωρινά παραπάνω επιλέγοντας το κουμπί <b>"Οριστική Υποβολή Αιτήσεων" </b>.</br>
	 Όταν υποβάλετε οριστικά δεν θα έχετε πλέον τη δυνατότητα να επεξεργαστείτε τις αιτήσεις σας ή να υποβάλετε νέα αίτηση. Θα μπορείτε μόνο να τις Τυπώσετε.</br>
	  <b>ΠΡΟΣΟΧΗ:</b>Οι αιτήσεις προγραμμάτων θα ληφθούν υπόψη όταν υποβληθούν οριστικά εντός της προθεσμίας που έχει οριστεί</br>
	  <b>Η οριστική υποβολή θα γίνει ΜΙΑ ΦΟΡΑ ΣΥΝΟΛΙΚΑ για όλα τα προγράμματα και θα τους αποδοθεί Αριθμός ηλεκτρονικής καταχώρησης</b> 
    </p>



  
  <?php 
       if ($subtid==0){
	$status='ΔΕΝ ΕΓΙΝΕ ΟΡΙΣΤΙΚΗ ΥΠΟΒΟΛΗ';
      }else  $status='ΕΓΙΝΕ ΟΡΙΣΤΙΚΗ ΥΠΟΒΟΛΗ'; 
 ?>

    <form action="final_submit.php" method="post">

    <div id='page_2' style='display: block;'>
                <table class='list_table' width='600' cellpadding='0' cellspacing='1'>
                <tr style='height: 20px;'>
                  <th width='5%'></th>
                  <th width='5%'></th>
                  <th width='35%'>Κατάσταση υποβολής</th>
                                  
           	  <th width='10%'></th>
			  <th width='45%'>ΟΡΙΣΤΙΚΗ ΥΠΟΒΟΛΗ ΑΙΤΗΣΕΩΝ</th>
                </tr><tr style='height: 20px;'>
              <td align='center' class='form_id'></td>
              <td></td>
              <td align='center'><span style='color: red'><b><?php echo "$status" ?></b></span></td>
              
	      
           <th width='10%' ><img src="../../Images/r_hand.gif" /></th>
                  <th width='90' height='30' align='center'>
                  	<?php 
				$epil=mysql_num_rows($result100);	
       		if (($epil<1)||($subtid==1)|| ($active==1)){
		?>
                  	
                  	<input type="button"  disabled="disable" style="width: 155px"  value="Οριστική Υποβολή Αίτησης" name="cmdInsert" /></th>
                  
        <?php }else { ?> 
       <input  type="hidden" name="sch_id" value="<?php echo $tid ?>"> 
        <input type="button" name="cmdInsert" style="width: 155px" align='center' onclick="if(confirm('Προσοχή! Η οριστική υποβολή σημαίνει οτι δεν θα έχετε τη δυνατότητα να επεξεργαστείτε ξανά τις αιτήσεις σας ή να υποβάλετε νέα αίτηση. Θα μπορείτε μόνο να τις Τυπώσετε! Nα Γίνει Οριστική υποβολή?'))
form.submit();
else alert('Δεν έγινε οριστική υποβολή της αίτησης σας!')" value="Οριστική Υποβολή Αιτήσεων"  />
        
        
        <!--input type="submit"   style="width: 155px" onclick="javascript: alert('Θα Γίνει Οριστική υποβολή της αίτησης σας. Όταν ολοκληρωθεί θα μεταφερθείτε στην Αρχική σελίδα Για να την Εκτυπώσετε.')" value="Οριστική Υποβολή Αίτησης" name="cmdInsert" /--></th>
         <?php } ?>      


		  
            </tr></table></div>
    </form>
  
  
<br>
</b>




<table cellpadding="0" cellspacing="0" height="35">
    <tr>
      <td width="45"></td>

      
    </tr>
    </table>	
<table cellpadding="0" cellpadding="1">
   <tr>
    <td></td>
    <td></td>
    
    
<td></td>
  </tr>
    </table>



</td>
</tr>


<tr>
  <td colspan='4' class="footer"><font color='blue'><b>©<?php echo date('Y') ?> </b>ΚΕΠΛΗΝΕΤ Δ.Δ.Ε ΑΝΑΤ. ΑΤΤΙΚΗΣ<BR>
     </font> </td>
</tr>
</table>
 <noscript>

    <br />
    <div class="error" style="margin:3px;">
      Για να χρησιμοποιήσετε την εφαρμογή, πρέπει να ενεργοποιήσετε τη javascript στο φυλλομετρητή σας. 
      Παρακαλούμε ενεργοποιήστε την τώρα και πατήστε το κουμπί ανανέωση στον φυλλομετρητή.
    </div>

  </noscript>
</body>
</html> 
