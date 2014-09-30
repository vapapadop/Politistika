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
//include '../../Includes/Logindb.inc'; 
$tid=$_GET['subid'];	

include '../../Includes/Logindb2.inc'; 
//$tid=$_POST['sch_id'];
$connection=LoginToDB2();

$ap=date('d/m/Y');

 $QueryStr="SELECT submission_id,sch_id
                   FROM ft_form_4 WHERE submission_id=".$tid."" ;   
         
	$result100=QueryDB2($QueryStr,$connection);

$row=mysql_fetch_array($result100);


 if($_SESSION['sch_id']!=$row['sch_id']) {header("Location: main.php"); exit;}
 
 
 
 

	$is_finalized="yes";
	
  $QueryStr="UPDATE ft_form_4 SET last_modified_date='".$ap."',is_finalized='".$is_finalized."'
	WHERE submission_id=".$tid."" ; 

	$result=QueryDB2($QueryStr,$connection); 
 
  
  header("Location:  main.php");
 // exit;
  






?>  
