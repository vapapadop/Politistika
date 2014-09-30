<?php 
session_start(); 	

//if (!isset($_SESSION['authenticatedUser'])){
//  header("Location: ../../login2.php"); 
//  exit; 
//}
include '../../Includes/Logindb2.inc'; 

//$tid=$_SESSION['teacher_id'];
$connection=LoginToDB2();
 //$_SESSION['submited']=1;
?>  

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Topothethseis Dieythintwn</title>

 
  <link type="text/css" rel="stylesheet" href="../../global/admin_styles.css" />



<style type="text/css" media="print">
.no_print { display: none; }
</style>

</head>
<body style="padding: 10px">




<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td class='print_title' align="center" width="100">Topothethseis dieythintwn sta sxoleia </td></tr>
<tr>

  <td class='print_title' align="right"></td>
  <td width="250" align="right">
 
    <table cellpadding="0" cellspacing="0" class="no_print">
    <tr>    

      <!--td><input type="button" onclick="javascript: window.close()" value="Κλείσιμο"/></td-->
      <td><input type="button" onclick="javascript: window.location.replace('menu.php')" value="Return to menu"/></td>
      <td><input type="button" onclick="javascript: window.print()" value="Print"/></td>
    </tr>
    </table>
    
  </td>
</tr>
</table>

<br />





<br />


<br />






<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td class='print_title' align="center" width="60"></td><td class='print_title' align="left"></td></tr>

    </table>
	
    
     </td>
   
    <td>    
     <?php
	 
				 
				 //echo "ok update";
				 $topoid=0;
				 $g=$row3[0];
				 $aa=0;
				   $teach_name="";
				    $QueryStr="UPDATE schools SET topo='".$teach_name."', topoid='".$topoid."' "; 

	                $result10=QueryDB2($QueryStr,$connection);
					$QueryStr="UPDATE teacher SET aa='".$aa."'" ;
	                $result11=QueryDB2($QueryStr,$connection);
					
					
					
					
					//update school
					//update teacher
				 	

	 ?>	
	

<?php

$QueryStr="SELECT schools.school_id,schools.onsxoleiou,schools.perioxi_id, schools.typos,topoid,topo 
                   FROM schools order by schools.onsxoleiou"; 

	$result132=QueryDB2($QueryStr,$connection);

	while ($row=mysql_fetch_row($result132)){
?>		           
        
     	  <table class='print_table' cellpadding='2' cellspacing='0' width='100%'>            
              	 
	         <tr><th class='print_th' width="15%"><?php echo $row[1] ?></th>
		
           
              
            <td width='35%'><b><?php echo $row[5] ?></b></td>
			
           </tr>
         </table>
   <?php } ?>

<br />
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td class='print_title' align="center" width="60"></td><td class='print_title' align="left"></td><td class='print_title' align="right">  <?php echo $row[6] ?></td></tr>
</table>

</body>
</html> 
