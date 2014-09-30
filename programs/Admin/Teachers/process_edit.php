<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ΑΙΤΗΣΕΙΣ ΠΡΟΓΡΑΜΜΑΤΩΝ</title>

<link type="text/css" rel="stylesheet" href="global/admin_styles.css">
</head>

<?php 
session_start(); 
if (!isset($_SESSION['authenticatedUser'])){
  header("Location: ../../login.php"); 
  exit; 
}

	
if (!isset($_POST['sub_id'])){
  header("Location: main.php"); 
  exit; 
}
include '../../Includes/Logindb2.inc'; 
$tid=$_POST['sub_id'];
$connection=LoginToDB2();



//$yp=$_POST['ypeythinos_amm']; 





	$programa=$_POST['programa'];
	$sch_name=$_POST['sch_name'];
	$date=$_POST['date'];
	$ar_protocol=$_POST['ar_protocol'];
	$sxol_etos=$_POST['sxol_etos'];
	$ypeythinos_name=$_POST['ypeythinos_name'];
        $tel_ergasias=$_POST['tel_ergasias'];
        $dimos=$_POST['dimos'];
        $fax=$_POST['fax']; 
        $e_mail=$_POST['e_mail']; 
        $sch_teachers=$_POST['sch_teachers']; 
        $sch_students=$_POST['sch_students'];
        $dieythintis_name=$_POST['dieythintis_name'];
        $klados_dieythinti=$_POST['klados_dieythinti'];
        $program_title=$_POST['program_title'];
        $ar_praksis=$_POST['ar_praksis']; 
        $date_praksis=$_POST['date_praksis']; 
        $sch_orario=$_POST['sch_orario']; 
        $ypeythinos_amm=$_POST['ypeythinos_amm']; 
        $ypeythinos_klados=$_POST['ypeythinos_klados'];
        $ypeythinos_wres=$_POST['ypeythinos_wres'];  
        $ypeythinos_again=$_POST['ypeythinos_again']; 
        $ypeythinos_epimorfosi=$_POST['ypeythinos_epimorfosi']; 
        $symetexwn1_name=$_POST['symetexwn1_name'];   
        $symetexwn1_amm=$_POST['symetexwn1_amm']; 
$symetexwn1_klados=$_POST['symetexwn1_klados']; 
        $symetexwn1_wres=$_POST['symetexwn1_wres'];   
        $symetexwn1_again=$_POST['symetexwn1_again']; 
 $symetexwn1_epimorfosi=$_POST['symetexwn1_epimorfosi']; 
 $symetexwn2_name=$_POST['symetexwn2_name'];   
        $symetexwn2_amm=$_POST['symetexwn2_amm']; 
$symetexwn2_klados=$_POST['symetexwn2_klados']; 
        $symetexwn2_wres=$_POST['symetexwn2_wres'];   
        $symetexwn2_again=$_POST['symetexwn2_again']; 
 $symetexwn2_epimorfosi=$_POST['symetexwn2_epimorfosi']; 
 
 $symetexwn3_name=$_POST['symetexwn3_name'];   
        $symetexwn3_amm=$_POST['symetexwn3_amm']; 
$symetexwn3_klados=$_POST['symetexwn3_klados']; 
        $symetexwn3_wres=$_POST['symetexwn3_wres'];   
        $symetexwn3_again=$_POST['symetexwn3_again']; 
 $symetexwn3_epimorfosi=$_POST['symetexwn3_epimorfosi']; 
 
  $mathites_synolo=$_POST['mathites_synolo'];   
        $agoria=$_POST['agoria']; 
$koritsia=$_POST['koritsia']; 
        $amiges=$_POST['amiges'];   
        $meet_day=$_POST['meet_day']; 
 $meet_hour=$_POST['meet_hour']; 
 
 $meet_place=$_POST['meet_place'];   
        $arxeio=$_POST['arxeio']; 
$ypothemata=$_POST['ypothemata']; 
        $stoxoi=$_POST['stoxoi'];   
        $methodologia=$_POST['methodologia']; 
 $syndeseis=$_POST['syndeseis']; 
 
 $month1=$_POST['month1'];   
        $month2=$_POST['month2']; 
$month3=$_POST['month3']; 
        $month4=$_POST['month4'];   
        $month5=$_POST['month5']; 
 $episkepseis=$_POST['episkepseis']; 
 
    $QueryStr="UPDATE ft_form_4 SET programa='".$programa."',  sch_name='".$sch_name."' ,  date='".$date."' ,  ar_protocol='".$ar_protocol."' ,  sxol_etos='".$sxol_etos."' ,  ypeythinos_name='".$ypeythinos_name."' ,  tel_ergasias='".$tel_ergasias."' ,  dimos='".$dimos."' ,  fax='".$fax."' ,  e_mail='".$e_mail."' ,  sch_teachers='".$sch_teachers."' ,  sch_students='".$sch_students."' ,  dieythintis_name='".$dieythintis_name."' ,  klados_dieythinti='".$klados_dieythinti."' ,  program_title='".$program_title."' ,  ar_praksis='".$ar_praksis."' ,  date_praksis='".$date_praksis."' ,  sch_orario='".$sch_orario."' ,  ypeythinos_amm='".$ypeythinos_amm."'  ,  ypeythinos_klados='".$ypeythinos_klados."'  ,  ypeythinos_wres='".$ypeythinos_wres."' ,  ypeythinos_again='".$ypeythinos_again."' ,  ypeythinos_epimorfosi='".$ypeythinos_epimorfosi."' ,
	symetexwn1_name='".$symetexwn1_name."' ,  symetexwn1_amm='".$symetexwn1_amm."'  ,  symetexwn1_klados='".$symetexwn1_klados."',  symetexwn1_wres='".$symetexwn1_wres."',  symetexwn1_again='".$symetexwn1_again."',  symetexwn1_epimorfosi='".$symetexwn1_epimorfosi."' ,  
	symetexwn2_name='".$symetexwn2_name."' ,  symetexwn2_amm='".$symetexwn2_amm."'  ,  symetexwn2_klados='".$symetexwn2_klados."',  symetexwn2_wres='".$symetexwn2_wres."',  symetexwn2_again='".$symetexwn2_again."',  symetexwn2_epimorfosi='".$symetexwn2_epimorfosi."' , 
	symetexwn3_name='".$symetexwn3_name."' ,  symetexwn3_amm='".$symetexwn3_amm."'  ,  symetexwn3_klados='".$symetexwn3_klados."',  symetexwn3_wres='".$symetexwn3_wres."',  symetexwn3_again='".$symetexwn3_again."',  symetexwn3_epimorfosi='".$symetexwn3_epimorfosi."' , 
	mathites_synolo='".$mathites_synolo."',agoria='".$agoria."' ,koritsia='".$koritsia."' ,amiges='".$amiges."' ,meet_day='".$meet_day."' ,meet_hour='".$meet_hour."' ,meet_place='".$meet_place."' ,arxeio='".$arxeio."' ,ypothemata='".$ypothemata."' ,
	stoxoi='".$stoxoi."', methodologia='".$methodologia."', syndeseis='".$syndeseis."', month1='".$month1."', month2='".$month2."', month3='".$month3."', month4='".$month4."', month5='".$month5."', episkepseis='".$episkepseis."'
	WHERE submission_id=".$tid."" ; 

	$result=QueryDB2($QueryStr,$connection); 

  
 
  
 header("Location:  main.php");
 // exit;
  






?>  
