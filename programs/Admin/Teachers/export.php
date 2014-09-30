<?
// Connect database. 
session_start(); 	

//if (!isset($_SESSION['authenticatedUser'])){
//  header("Location: ../../login2.php"); 
//  exit; 
//}
include '../../Includes/Logindb2.inc'; 

//$tid=$_SESSION['teacher_id'];
$connection=LoginToDB2();
$QueryStr="SELECT schools.school_id,schools.onsxoleiou,schools.perioxi_id, schools.typos,topoid,topo 
                   FROM schools order by schools.onsxoleiou"; 

	$result=QueryDB2($QueryStr,$connection);
// Get data records from table. 
//$result=mysql_query("select * from name_list order by id asc");

// Functions for export to excel.
function xlsBOF() { 
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0); 
return; 
} 
function xlsEOF() { 
echo pack("ss", 0x0A, 0x00); 
return; 
} 
function xlsWriteNumber($Row, $Col, $Value) { 
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0); 
echo pack("d", $Value); 
return; 
} 
function xlsWriteLabel($Row, $Col, $Value ) { 
$L = strlen($Value); 
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L); 
echo $Value; 
return; 
} 
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");;
header("Content-Disposition: attachment;filename=orderlist.xls "); 
header("Content-Transfer-Encoding: binary ");

xlsBOF();

/*
Make a top line on your excel sheet at line 1 (starting at 0).
The first number is the row number and the second number is the column, both are start at '0'
*/

xlsWriteLabel(0,0,"Τοποθετήσεις Διευθυντών.");

// Make column labels. (at line 3)
xlsWriteLabel(2,0,"Σχολείο");
xlsWriteLabel(2,1,"Τοποθετήθηκε Διευθυντής");

$xlsRow = 3;

// Put data records from mysql by while loop.
while($row=mysql_fetch_array($result)){

xlsWriteNumber($xlsRow,0,$row[1]);
xlsWriteLabel($xlsRow,1,$row['topo']);

$xlsRow++;
} 
xlsEOF();
exit();
?>


