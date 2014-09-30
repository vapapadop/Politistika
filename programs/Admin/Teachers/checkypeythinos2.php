<?php

include '../../Includes/Logindb2.inc'; 




$connection=LoginToDB2();


if (isset($_POST['ypeythinos_amm'])) 
{
if (($_POST['ypeythinos_amm']!=""))
{

//$bid=$_POST['ypeythinos_amm']; 
$a=$_POST['ypeythinos_amm'];

$bid=substr($a, 0, 9);
$tid= substr($a, 9);
$QueryStr="SELECT  ypeythinos_amm
                   FROM ft_form_4 WHERE ypeythinos_amm=".$bid." AND submission_id!=".$tid."" ; 
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_array($result100);
	
 $k=mysql_num_rows($result100);
 //$k=$k+1;
if ($k>0) {

//echo "Ο εκπ/κος με αυτον τον Α.Μητρώου έχει δηλωθεί ως υπεύθυνος και σε άλλο πρόγραμμα. Δεν μπορεί να είναι υπεύθυνος σε 2 προγράμματα";
echo "nok1"; exit;
}




$QueryStr="SELECT  symetexwn1_amm
                   FROM ft_form_4 WHERE symetexwn1_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $l=mysql_num_rows($result100);



$QueryStr="SELECT  symetexwn2_amm
                   FROM ft_form_4 WHERE symetexwn2_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $m=mysql_num_rows($result100);




 $QueryStr="SELECT  symetexwn3_amm
                   FROM ft_form_4 WHERE symetexwn3_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $n=mysql_num_rows($result100);

  $sum1=$k+$l+$m+$n;
if ($sum1>2){
  //header("Location: pds_edit.php"); 
  
 
 echo "nok2"; exit;
}
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

$QueryStr="SELECT  symetexwn1_amm
                   FROM ft_form_4 WHERE symetexwn1_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $k=mysql_num_rows($result100);


 $QueryStr="SELECT  ypeythinos_amm
                   FROM ft_form_4 WHERE ypeythinos_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $l=mysql_num_rows($result100);
 
 
 
$QueryStr="SELECT  symetexwn2_amm
                   FROM ft_form_4 WHERE symetexwn2_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $m=mysql_num_rows($result100);



 $QueryStr="SELECT  symetexwn3_amm
                   FROM ft_form_4 WHERE symetexwn3_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $n=mysql_num_rows($result100);

 
 
  $sum1=$k+$l+$m+$n;
if ($sum1>2){
  //header("Location: pds_edit.php"); 
  
 
 echo "nok2"; exit;
}
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

$QueryStr="SELECT  symetexwn2_amm
                   FROM ft_form_4 WHERE symetexwn2_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $k=mysql_num_rows($result100);


 $QueryStr="SELECT  ypeythinos_amm
                   FROM ft_form_4 WHERE ypeythinos_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $l=mysql_num_rows($result100);
 
 
 
$QueryStr="SELECT  symetexwn1_amm
                   FROM ft_form_4 WHERE symetexwn1_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $m=mysql_num_rows($result100);




 $QueryStr="SELECT  symetexwn3_amm
                   FROM ft_form_4 WHERE symetexwn3_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $n=mysql_num_rows($result100);
 
 
 
  $sum1=$k+$l+$m+$n;
if ($sum1>2){
  //header("Location: pds_edit.php"); 
  
 
  
  echo "nok2"; exit;
}
}
} 

if (isset($_POST['symetexwn3_amm'])) 
{
 
 if (($_POST['symetexwn3_amm']!=""))
{
 
 
  //$bid=$_POST['symetexwn3_amm'];
$a=$_POST['symetexwn3_amm'];
$tid= substr($a, 9);
$bid=substr($a, 0, 9);
  
 $QueryStr="SELECT  symetexwn3_amm
                   FROM ft_form_4 WHERE symetexwn3_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $k=mysql_num_rows($result100);
 
 $QueryStr="SELECT  ypeythinos_amm
                   FROM ft_form_4 WHERE ypeythinos_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $l=mysql_num_rows($result100);
 
 
  
$QueryStr="SELECT  symetexwn1_amm
                   FROM ft_form_4 WHERE symetexwn1_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $m=mysql_num_rows($result100);
 

 

 $QueryStr="SELECT  symetexwn2_amm
                   FROM ft_form_4 WHERE symetexwn2_amm=".$bid." AND submission_id!=".$tid."" ;  
         
	$result100=QueryDB2($QueryStr,$connection); 
	$row=mysql_fetch_row($result100);
	
 $n=mysql_num_rows($result100);
  
  $sum1=$k+$l+$m+$n;
if ($sum1>2){
  //header("Location: pds_edit.php"); 
  
 
 echo "nok2"; exit;
}
 }

}
?>