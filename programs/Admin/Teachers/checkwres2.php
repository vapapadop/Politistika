<?php

include '../../Includes/Logindb2.inc'; 



  
  $connection=LoginToDB2();


if (isset($_POST['ypeythinos_amm'])) 
{
if (($_POST['ypeythinos_amm']!=""))
{

//$bid=$_POST['ypeythinos_amm']; 
$a=$_POST['ypeythinos_amm'];
$tid= substr($a, 9);
$bid=substr($a, 0, 9);



$QueryStr="SELECT  sum(ypeythinos_wres)
                   FROM ft_form_4 WHERE ypeythinos_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $a=$row[0];
 



$QueryStr="SELECT  sum(symetexwn1_wres)
                   FROM ft_form_4 WHERE symetexwn1_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $b=$row[0];

 $QueryStr="SELECT  sum(symetexwn2_wres)
                   FROM ft_form_4 WHERE symetexwn2_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $c=$row[0];
 
 $QueryStr="SELECT  sum(symetexwn3_wres)
                   FROM ft_form_4 WHERE symetexwn3_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $d=$row[0];
 
$all=$a+$b+$c+$d; 

  
 
 echo $all; exit;

 }
}


if (isset($_POST['symetexwn1_amm'])) 
{
 
 if (($_POST['symetexwn1_amm']!=""))
{
 //$bid=$_POST['symetexwn1_amm'];
 $a=$_POST['symetexwn1_amm'];
$tid= substr($a, 9);
$bid=substr($a, 0, 9);
$QueryStr="SELECT  sum(symetexwn1_wres)
                   FROM ft_form_4 WHERE symetexwn1_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $a=$row[0];
 
 $QueryStr="SELECT  sum(ypeythinos_wres)
                   FROM ft_form_4 WHERE ypeythinos_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $b=$row[0];
 
 $QueryStr="SELECT  sum(symetexwn2_wres)
                   FROM ft_form_4 WHERE symetexwn2_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $c=$row[0];
 
 $QueryStr="SELECT  sum(symetexwn3_wres)
                   FROM ft_form_4 WHERE symetexwn3_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $d=$row[0];
 
$all=$a+$b+$c+$d; 


 
 echo $all; exit;

 }
}

if (isset($_POST['symetexwn2_amm'])) 
{

 if (($_POST['symetexwn2_amm']!=""))
{
 // $bid=$_POST['symetexwn2_amm'];
 $a=$_POST['symetexwn2_amm'];
$tid= substr($a, 9);
$bid=substr($a, 0, 9);

 $QueryStr="SELECT  sum(symetexwn1_wres)
                   FROM ft_form_4 WHERE symetexwn1_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $a=$row[0];
 
 $QueryStr="SELECT  sum(ypeythinos_wres)
                   FROM ft_form_4 WHERE ypeythinos_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $b=$row[0];
 
 $QueryStr="SELECT  sum(symetexwn2_wres)
                   FROM ft_form_4 WHERE symetexwn2_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $c=$row[0];
 
 $QueryStr="SELECT  sum(symetexwn3_wres)
                   FROM ft_form_4 WHERE symetexwn3_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $d=$row[0];
 
$all=$a+$b+$c+$d;
  
 echo $all; exit;
}
} 

if (isset($_POST['symetexwn3_amm'])) 
{
 
 if (($_POST['symetexwn3_amm']!=""))
{
 
 
 // $bid=$_POST['symetexwn3_amm'];
 $a=$_POST['symetexwn3_amm'];
$tid= substr($a, 9);
$bid=substr($a, 0, 9);
 

$QueryStr="SELECT  sum(symetexwn1_wres)
                   FROM ft_form_4 WHERE symetexwn1_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $a=$row[0];
 
 $QueryStr="SELECT  sum(ypeythinos_wres)
                   FROM ft_form_4 WHERE ypeythinos_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $b=$row[0];
 
 $QueryStr="SELECT  sum(symetexwn2_wres)
                   FROM ft_form_4 WHERE symetexwn2_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $c=$row[0];
 
 $QueryStr="SELECT  sum(symetexwn3_wres)
                   FROM ft_form_4 WHERE symetexwn3_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $d=$row[0];
 
$all=$a+$b+$c+$d; 

 
  echo $all; exit;
 }

}
?>