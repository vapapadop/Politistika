<?php 
session_start(); 	

include '../../Includes/Logindb2.inc'; 
$tid=$_POST['sch_id'];
$connection=LoginToDB2();

$ap=date('d/ m/ y');

  $QueryStr="UPDATE pschools SET submited='1'
	WHERE sch_id=".$tid."" ; 

	$result=QueryDB2($QueryStr,$connection); 

  $QueryStr="UPDATE ft_form_4 SET submission_date='".$ap."'
	WHERE sch_id=".$tid."" ; 

	$result=QueryDB2($QueryStr,$connection); 
 
  
  header("Location:  main.php");
 // exit;
  






?>  
