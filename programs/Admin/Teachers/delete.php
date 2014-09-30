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
$QueryStr="SELECT submission_id,sch_id
                   FROM ft_form_4 WHERE submission_id=".$tid."" ;   
         
	$result100=QueryDB2($QueryStr,$connection);

$row=mysql_fetch_array($result100);


 if($_SESSION['sch_id']!=$row['sch_id']) {header("Location: main.php"); exit;}
	


 
  

    $QueryStr="DELETE FROM ft_form_4  WHERE submission_id=".$tid."" ;

	$result=QueryDB2($QueryStr,$connection); 

  
 
  
  header("Location: main.php");
  //exit;
 //} 






?>  

