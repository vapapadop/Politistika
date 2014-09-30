<?php 
session_start(); 	
	

if (!isset($_SESSION['authenticatedUser'])){
  header("Location: ../../login.php"); 
  exit; 
}



if (!isset($_GET['subid'])){
  header("Location: main.php"); 
  exit; 
}
include '../../Includes/Logindb2.inc'; 
$tid=$_GET['subid'];
$connection=LoginToDB2();

?>  

<?php
 

$QueryStr="SELECT submission_id,sch_id,programa,sch_name,date,ar_protocol, sxol_etos,ypeythinos_name,tel_ergasias,dimos,fax,e_mail,sch_teachers,sch_students,dieythintis_name,klados_dieythinti,program_title,ar_praksis,date_praksis,sch_orario,ypeythinos_amm,ypeythinos_klados,ypeythinos_wres,ypeythinos_again,ypeythinos_epimorfosi,
symetexwn1_name,symetexwn1_amm,symetexwn1_klados,symetexwn1_wres,symetexwn1_again,symetexwn1_epimorfosi,
 symetexwn2_name,symetexwn2_amm,symetexwn2_klados,symetexwn2_wres,symetexwn2_again,symetexwn2_epimorfosi,
 symetexwn3_name,symetexwn3_amm,symetexwn3_klados,symetexwn3_wres,symetexwn3_again,symetexwn3_epimorfosi,
 mathites_synolo,agoria,koritsia,amiges,meet_day,meet_hour,meet_place,arxeio,ypothemata,stoxoi,methodologia,syndeseis,month1,month2,month3,month4,month5,episkepseis,submission_date,is_finalized,last_modified_date
                   FROM ft_form_4 WHERE submission_id=".$tid."" ;  
         
	$result=QueryDB2($QueryStr,$connection); 
      
$row=mysql_fetch_array($result);
 if($_SESSION['sch_id']!=$row['sch_id']) {header("Location: main.php"); exit;}


//ΕΓΙΝΕ ΔΙΑΚΟΠΗ
$isfinalized=$row['is_finalized'];
$diakopi_date=$row['last_modified_date'];


?>	
<html><head><title>ΑΙΤΗΣΗ</title>

<style type="text/css" media="print">
.no_print { display: none; }
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="final_print_files/styles.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body leftmargin="0" topmargin="0"> 
<table align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" width="700">
<tbody><tr>
  <td align="center" ><img src="../../ethno.gif" width="84" height="71"></td>
</tr>
<tr> 
    <td><div align="center" class="paragraph"> <font size="-1" ><strong>ΔΙΕΥΘΥΝΣΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ ΑΝΑΤΟΛΙΚΗΣ ΑΤΤΙΚΗΣ      </strong></font><font color="#FFFFFF" size="-2"><br>


      </div></td>
</tr>
<tr><td align="center">



	

 <table width="98%" border="0" cellpadding="0" cellspacing="0" >
<tr><td  height="30"></td></tr>
				
 <tr>

   <td>
       <table width="100%" cellpadding="0" cellspacing="0">
	      <tr>
		  <?php if ($isfinalized=="yes"){
		?>
			  <td width="40%" >Αρ.Ηλ.Καταχώρησης<strong> ΔΙΑΚΟΠΗΣ ΠΠΡΟΓΡΑΜΜΑΤΟΣ:  <?php echo $row['submission_id']; echo '--';echo $diakopi_date ?></td> 
			  <?php } else { if  ($_SESSION['submited']==0) {?>
		<td width="40%" >Αρ.Ηλ.Καταχώρησης:<strong> ΠΡΟΣΩΡΙΝΗ ΥΠΟΒΟΛΗ </td> 
		  <?php } else {  ?>
		     <td width="40%">Αρ. Ηλ. Καταχώρησης: <?php echo $row['submission_id']; echo '--'; echo $row['submission_date']; ?> </td>
			 <?php } }?>
			 <td width="20%" class="maintext"></td> 
			 
			 <td width="40%" class="maintext">
			      <strong>Προς<br>Δ/ΝΣΗ Δ.Ε. ΑΝ. ΑΤΤΙΚΗΣ<br>Τμήμα Εκπαιδευτικών Θεμάτων</strong></td> 
		  </tr>
	   </table>

   </td>
 </tr> 
  <tr><td height="50"  align="center"  valign="bottom" class="paragraph"><strong>Α Ι Τ Η Σ Η - Δ Η Λ Ω Σ Η </br>  Υ Π Ο Β Ο Λ Η Σ  Π Ρ Ο Γ Ρ Α Μ Μ Α Τ Ο Σ </strong></td>
  <tr>
      <td align="center" valign="top" class="maintext">(επέχει θέση Υπεύθυνης Δήλωσης του Ν. 1599/86)<br>
        </td>
    </tr>
    </tr> 
  <tr><td height="10"></td></tr>

 
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
                          <input  type="hidden" name="sub_id" value="<?php echo $tid ?>"> 
                                                  </td>

                      </tr>

                       <tr valign="middle"> 
                       <td width="220" height="30" class="maintext" valign="middle"> ΣΧΟΛΙΚΗ ΔΡΑΣΤΗΡΙΟΤΗΤΑ:  </td>
					   <td> 
					   
                          <STRONG> <?php echo $row['programa'] ?>
                            


                         
							   
                       
                        </td>
                      <tr> 
                      
					  <tr> <TD></TD><TD></TD>
                  <td height="30" align="LEFT" class="maintext">Ημερομηνία : 
                    <STRONG><?php echo $row['date'] ?></STRONG></td>
                </tr>
				
				<tr> <TD></TD><TD></TD>
                  <td height="30" align="LEFT" class="maintext">Αριθ. Πρωτ. : 
                   <STRONG><?php echo $row['ar_protocol'] ?> </td>
                </tr>
					<tr> 
                        <td height="30" class="maintext"> Σχ. Έτος:  :
                          
                           <STRONG><?php echo $row['sxol_etos'] ?></td>
                      </tr>

<tr valign="middle"> 
                        <td width="150" height="30" class="maintext" valign="middle"> Δ/ΝΣΗ ΕΚΠΑΙΔΕΥΣΗΣ: </td>
                        <td><STRONG>ΔΔΕ ΑΝ. ΑΤΤΙΚΗΣ </td>
                      </tr>

					
                      <tr valign="middle"> 
                        <td width="150" height="30" class="maintext" valign="middle"> ΣΧΟΛΙΚΗ ΜΟΝΑΔΑ: </td>
                        <td><STRONG><?php echo $row['sch_name'] ?>
                          </td>
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
                        <td width="200" height="30" class="maintext" valign="middle"> Τηλ σταθερό : 
                          <STRONG><?php echo $row['tel_ergasias'] ?> </td>
                        <td>Δήμος : 
                         <STRONG><?php echo $row['dimos'] ?> </td>
                      </tr>
				  <tr valign="middle"> 
                        <td width="200" height="30" class="maintext" valign="middle"> Fax : 
                         <STRONG><?php echo $row['fax'] ?></td>
                        <td>e-mail : 
                         <STRONG><?php echo $row['e_mail'] ?> </td>
                      </tr>
				  
				  <tr valign="middle"> 
                        <td width="300" height="30" class="maintext" valign="middle"> ΑΡΙΘΜΟΣ ΕΚΠΑΙΔΕΥΤΙΚΩΝ ΣΧΟΛΕΙΟΥ: </td>
                        <td><STRONG><?php echo $row['sch_teachers'] ?> </td>
                      </tr>
				  
                   <tr valign="middle"> 
                        <td width="200" height="30" class="maintext" valign="middle"> ΑΡΙΘΜΟΣ ΜΑΘΗΤΩΝ ΣΧΟΛΕΙΟΥ : </td>
                        <td><STRONG><?php echo $row['sch_students'] ?> </td>
                      </tr>   
                     
                   <tr valign="middle"> 
                        <td width="200" height="30" class="maintext" valign="middle"> ΟΝΟΜΑΤΕΠΩΝΥΜΟ  ΔΙΕΥΘΥΝΤΗ: : </td>
                        <td><STRONG><?php echo $row['dieythintis_name'] ?> </td>
						<td height="30" class="maintext"> ΚΛΑΔΟΣ :
                         <STRONG><?php echo $row['klados_dieythinti'] ?></td>
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
                  <td class="maintext">Ο ΤΙΤΛΟΣ ΤΟΥ ΠΡΟΓΡΑΜΜΑΤΟΣ ΜΑΣ:</td>
                </tr>
				  <tr valign="middle"> 
                        <td width="100%"  height="30" class="maintext" valign="middle"> 
						<STRONG><?php echo $row['program_title'] ?>
						</td>
                        
                      </tr>
				  
				   <tr> 
				   
                  <td> <table width="100%" cellpadding="0" cellspacing="0">
<tr> 
                  <td height="10"></td>
                </tr>
				   <tr> 
                  <td width="300" class="maintext">ΠΡΑΞΗ ΑΝΑΘΕΣΗΣ ΤΟΥ ΣΥΛΛΟΓΟΥ ΔΙΔΑΣΚΟΝΤΩΝ:</td>
                </tr>
				  
				  <tr> 
                        <td width="200" height="30" class="maintext" valign="middle"> Αρ. Πράξης: 
                         <STRONG><?php echo $row['ar_praksis'] ?> </td>
                        <td>Ημερομηνία: 
                          <STRONG><?php echo $row['date_praksis'] ?> </td>
                      </tr>
				  <tr> 
                  <td height="10"></td>
                </tr>
				  <tr valign="middle"> 
                       <td width="180" height="30" class="maintext" valign="middle"> ΤΟ ΣΧΟΛΕΙΟ ΛΕΙΤΟΥΡΓΕΙ:  </td>
					   <td> <STRONG><?php echo $row['sch_orario'] ?>

					                          			               
                           
                        </td>
                      <tr> 
				   <tr> 
                  <td height="20"></td>
                </tr>
				  </table>
				  <table width="100%" cellpadding="1" cellspacing="1" border="1">
				  <tr> 
                        <td width="20%" height="30" class="maintext" align="center"> ΕΚΠΑΙΔΕΥΤΙΚΟΣ ΠΟΥ ΑΝΑΛΑΜΒΑΝΕΙ ΤΟ ΠΡΟΓΡΑΜΜΑ
 
                           </td>
						  <td width="50" height="30" class="maintext" align="center"> Α.Φ.Μ
 
                           </td> 
						   
                        <td width="100" height="30" class="maintext" align="center"> ΚΛΑΔΟΣ (ΠΕ)  
                           </td>
						  <td width="50" height="30" class="maintext" align="center" >ΩΡΕΣ ΣΥΜΠΛΗΡΩΣΗΣ ΩΡΑΡΙΟΥ 
                           </td> 
						  <td width="50" height="30" class="maintext" align="center">ΥΛΟΠΟΙΗΣΗ ΠΡΟΓΡΑΜΜΑΤΩΝ ΣΕ ΠΡΟΗΓΟΥΜΕΝΑ ΕΤΗ (ΝΑΙ/ΟΧΙ) 
                           </td>
						   <td width="150" height="30" class="maintext" align="center">ΣΧΕΤΙΚΗ ΕΠΙΜΟΡΦΩΣΗ(ΦΟΡΕΑΣ ΕΠΙΜΟΡΦΩΣΗΣ)

                           </td> 
						   
                      </tr>
				  
				  <tr> 
                        <td width="20%" height="30" class="maintext" align="center"> 
						<STRONG><?php echo $row['ypeythinos_name'] ?>
 
                           </td>
						   <td width="50" height="30" class="maintext" align="center"> 
						<STRONG><?php echo $row['ypeythinos_amm'] ?>
 
                           </td>
                        <td width="100" height="30" class="maintext" align="center">
						       <STRONG><?php echo $row['ypeythinos_klados'] ?>
                           </td>
						  <td width="50" height="30" class="maintext" align="center" >
						         <STRONG><?php echo $row['ypeythinos_wres'] ?>
                           </td> 
						  <td width="50" height="30" class="maintext" align="center">
						  <STRONG><?php echo $row['ypeythinos_again'] ?>						  
						
                           </td>
						   <td width="150" height="30" class="maintext" align="center">
						   <STRONG><?php echo $row['ypeythinos_epimorfosi'] ?>

                           </td> 
						   
                      </tr>
				  </table>
				  
				  <tr> 
                  <td height="20"></td>
                </tr>
				  <table width="100%" cellpadding="1" cellspacing="1" border="1">
				  <tr> 
                        <td width="20%" height="30" class="maintext" align="center">ΕΚΠΑΙΔΕΥΤΙΚΟΙ ΠΟΥ ΣΥΜΜΕΤΕΧΟΥΝ
 
                           </td>
						  <td width="10%" height="30" class="maintext" align="center"> Α.Φ.Μ
 
                           </td> 
						   
                        <td width="80" height="30" class="maintext" align="center">ΚΛΑΔΟΣ (ΠΕ)  
                           </td>
						  <td width="80" height="30" class="maintext" align="center" >ΩΡΕΣ ΣΥΜΠΛΗΡΩΣΗΣ ΩΡΑΡΙΟΥ 
                           </td> 
						  <td width="80" height="30" class="maintext" align="center">ΥΛΟΠΟΙΗΣΗ ΠΡΟΓΡΑΜΜΑΤΩΝ ΣΕ ΠΡΟΗΓΟΥΜΕΝΑ ΕΤΗ (ΝΑΙ/ΟΧΙ) 
                           </td>
						   <td width="80" height="30" class="maintext" align="center">ΣΧΕΤΙΚΗ ΕΠΙΜΟΡΦΩΣΗ(ΦΟΡΕΑΣ ΕΠΙΜΟΡΦΩΣΗΣ)

                           </td> 
						   
                      </tr>
				  
				  <tr> 
                        <td width="20%" height="30" class="maintext" align="center"> 
						<STRONG><?php echo $row['symetexwn1_name'] ?>
 
                           </td>
						   <td width="80" height="30" class="maintext" align="center"> 
						<STRONG><?php echo $row['symetexwn1_amm'] ?>
 
                           </td>
                        <td width="80" height="30" class="maintext" align="center">
						       <STRONG><?php echo $row['symetexwn1_klados'] ?>
                           </td>
						  <td width="100" height="30" class="maintext" align="center" >
						         <STRONG><?php echo $row['symetexwn1_wres'] ?>
                           </td> 
						  <td width="100" height="30" class="maintext" align="center">
						<STRONG><?php echo $row['symetexwn1_again'] ?>
                           </td>
						   <td width="100" height="30" class="maintext" align="center">
						  <STRONG><?php echo $row['symetexwn1_epimorfosi'] ?>

                           </td> 
						   
                      </tr>
					  
					   <tr> 
                        <td width="80" height="30" class="maintext" align="center"> 
						<STRONG><?php echo $row['symetexwn2_name'] ?>
 
                           </td>
						   <td width="80" height="30" class="maintext" align="center"> 
						<STRONG><?php echo $row['symetexwn2_amm'] ?>
 
                           </td>
                        <td width="80" height="30" class="maintext" align="center">
						       <STRONG><?php echo $row['symetexwn2_klados'] ?>
                           </td>
						  <td width="100" height="30" class="maintext" align="center" >
						        <STRONG><?php echo $row['symetexwn2_wres'] ?>
                           </td> 
						  <td width="100" height="30" class="maintext" align="center">
						<STRONG><?php echo $row['symetexwn2_again'] ?>
                           </td>
						   <td width="100" height="30" class="maintext" align="center">
						  <STRONG><?php echo $row['symetexwn2_epimorfosi'] ?>

                           </td> 
						   
                      </tr>
					   <tr> 
                        <td width="80" height="30" class="maintext" align="center"> 
						<STRONG><?php echo $row['symetexwn3_name'] ?>
 
                           </td>
						   <td width="80" height="30" class="maintext" align="center"> 
						<STRONG><?php echo $row['symetexwn3_amm'] ?>
 
                           </td>
                        <td width="80" height="30" class="maintext" align="center">
						       <STRONG><?php echo $row['symetexwn3_klados'] ?>
                           </td>
						  <td width="100" height="30" class="maintext" align="center" >
						        <STRONG> <?php echo $row['symetexwn3_wres'] ?>
                           </td> 
						  <td width="100" height="30" class="maintext" align="center">
						 <STRONG><?php echo $row['symetexwn3_again'] ?>
                           </td>
						   <td width="100" height="30" class="maintext" align="center">
						   <STRONG><?php echo $row['symetexwn3_epimorfosi'] ?>

                           </td> 
						   
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
                        <td width="200" height="30" class="maintext" valign="middle"> ΣΥΝΟΛΟ ΜΑΘΗΤΩΝ ΤΗΣ ΟΜΑΔΑΣ: 
                         <STRONG><?php echo $row['mathites_synolo'] ?></td>
                        <td>ΑΓΟΡΙΑ: 
                          <STRONG><?php echo $row['agoria'] ?> </td>
						  <td>ΚΟΡΙΤΣΙΑ: 
                         <STRONG><?php echo $row['koritsia'] ?> </td>
                      </tr>
				  <tr> 
                  <td height="10"></td>
                </tr>
				  <tr valign="middle"> 
                      
					   <td>                          
                         
						   ΣΥΝΘΕΣΗ ΟΜΑΔΑΣ:
                        <STRONG><?php echo $row['amiges'] ?>
                           
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
                        <td width="100" height="30" class="maintext" valign="middle"> ΗΜΕΡΑ: 
                          <STRONG><?php echo $row['meet_day'] ?></td>
                        <td>ΩΡΑ: 
                          <STRONG><?php echo $row['meet_hour'] ?> </td>
						  <td>ΤΟΠΟΣ: 
                         <STRONG> <?php echo $row['meet_place'] ?></td>
                      </tr>
				  <tr> 
                  <td height="10"></td>
                </tr>
				
				<tr> 
                  <td>ΥΠΑΡΧΕΙ ΣΤΟ ΣΧΟΛΕΙΟ ΑΡΧΕΙΟ ΤΩΝ ΣΧΟΛΙΚΩΝ ΔΡΑΣΤΗΡΙΟΤΗΤΩΝ;
				 </td>
                
                      
					   <td>                          
                         						   
                          <STRONG><?php echo $row['arxeio'] ?>
                           
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
                  <td> <table width="100%" cellpadding="0" cellspacing="0" border="1">

				   <tr> 
                  <td class="maintext"><strong>ΠΑΙΔΑΓΩΓΙΚΗ ΔΙΑΔΙΚΑΣΙΑ:</strong></BR></td>
                </tr>
				<tr> 
                  <td class="maintext">A.ΥΠΟΘΕΜΑΤΑ (ΠΟΙΕΣ ΔΙΑΣΤΑΣΕΙΣ-ΟΨΕΙΣ ΤΟΥ ΘΕΜΑΤΟΣ ΘΑ ΠΡΟΣΕΓΓΙΣΕΤΕ):</BR></td>
                </tr>
				
				  <tr valign="middle" > 
                        <td width="100%" height="30" class="maintext" valign="middle" > 
						<STRONG><?php echo $row['ypothemata'] ?></BR>
						</td>
                        
                      </tr>
				<tr> 
                  <td class="maintext">Β. ΠΟΙΟΥΣ ΠΑΙΔΑΓΩΓΙΚΟΥΣ ΣΤΟΧΟΥΣ ΒΑΛΑΤΕ; (γράψτε συνοπτικά τους πιο σημαντικούς):</td>
                </tr>
				
				  <tr valign="middle"> 
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<STRONG><?php echo $row['stoxoi'] ?></BR>
						</td>
                        
                      </tr>	  
				<tr> 
                  <td class="maintext">Γ. ΜΕΘΟΔΟΛΟΓΙΑ ΥΛΟΠΟΙΗΣΗΣ – ΣΥΝΕΡΓΑΣΙΕΣ ΜΕ ΑΛΛΟΥΣ ΦΟΡΕΙΣ:</td>
                </tr>
				
				  <tr valign="middle"> 
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<STRONG><?php echo $row['methodologia'] ?></BR>
						</td>
                        
                      </tr>	  
<tr> 
                  <td class="maintext">Δ. ΠΕΔΙΑ ΣΥΝΔΕΣΗΣ ΜΕ ΤΑ ΠΡΟΓΡΑΜΜΑΤΑ ΣΠΟΥΔΩΝ ΤΩΝ ΑΝΤΙΣΤΟΙΧΩΝ ΓΝΩΣΤΙΚΩΝ ΑΝΤΙΚΕΙΜΕΝΩΝ:</td>
                </tr>
				
				  <tr valign="middle"> 
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<STRONG><?php echo $row['syndeseis'] ?></BR>
						</td>
                        
                      </tr>	 
					  
					  
</table>					  
</BR>
<table width="100%" cellpadding="0" cellspacing="0">

				  
				<tr> 
                  <td class="maintext">Ε. ΚΑΤΑΓΡΑΨΤΕ ΣΥΝΟΠΤΙΚΑ ΤΗΝ ΧΡΟΝΙΚΗ ΕΞΕΛΙΞΗ ΤΟΥ ΠΡΟΓΡΑΜΜΑΤΟΣ ΣΑΣ 
ΚΑΤΑ ΤΗ ΣΧΟΛΙΚΗ ΧΡΟΝΙΑ (20- 25 ΔΙΩΡΑ)
Η χρονική εξέλιξη του προγράμματος
( διερεύνηση θέματος, επεξεργασία, υλοποίηση δράσεων, επισκέψεων, παρουσίαση κλπ)
</td>
                </tr></table>
				<table width="100%" cellpadding="1" cellspacing="1"border="1">
				<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>1ος Μήνας</strong></td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<STRONG><?php echo $row['month1'] ?>
						</td>
                        
                      </tr>	 
				<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>2ος Μήνας</strong></td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<STRONG><?php echo $row['month2'] ?>
						</td>
                        
                      </tr>	
				<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>3ος Μήνας</strong></td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<STRONG><?php echo $row['month3'] ?></textarea>
						</td>
                        
                      </tr>	
				<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>4ος Μήνας</strong></td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<STRONG><?php echo $row['month4'] ?>
						</td>
                        
                      </tr>	
			<tr valign="middle"><td width="20%" height="30" class="maintext" valign="middle" align="center"><strong>5ος Μήνας</strong></td>
                        <td width="100%" height="30" class="maintext" valign="middle"> 
						<STRONG><?php echo $row['month5'] ?>
						</td>
                        
                      </tr>			  
				</table>
				
				 <tr> 
                  <td height="10"></td>
                </tr>
			<tr valign="middle"> 
			<td   class="maintext"  >Αριθμός προβλεπόμενων επισκέψεων: <STRONG><?php echo $row['episkepseis'] ?>
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
                </tr>
				 <tr> 
                  <td class="maintext"><div id="sign1"><STRONG><?php echo $row['ypeythinos_name'] ?><div>
				</td>
				<td class="maintext">
				<div id="sign2"><STRONG><?php echo $row['dieythintis_name'] ?><div>
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
                        </table>
			   </td>
			</tr>
			</table>
	  </td></tr>
    </table>

            </td>
        </tr>

</table>

				  
				  
				  
				  
<table cellpadding="0" cellspacing="0" class="no_print">
<tr> </tr><tr> </tr>

    <tr> <td width="150"> </td>  
<td><input type="button" onclick="javascript: window.print()" value="Εκτύπωση"/></td>
      <td><input type="button" value="Αρχική σελίδα" onclick="window.location.replace('main.php')"/></td>
      
    </tr>
<tr> </tr><tr> </tr>


			  
			
			</tbody></table>
	  </td></tr>
    </tbody></table>

            
        

 

<!--script language="JavaScript">print();</script-->
 
</body></html>