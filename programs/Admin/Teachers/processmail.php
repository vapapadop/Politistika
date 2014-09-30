<?php
include '../../Includes/Logindb.inc';

 session_start();
 if (isset($_POST['sch_name']))
	$tid=$_POST['sch_name'];

	echo $tid;
  // Formulate the SQL query find the user
 //ORIGINAL BILL CODE:  $QueryStr = "SELECT a.AMM, a.psw  FROM teacher AS a  WHERE a.AMM = '".$username."' AND a.psw = '".$password."' ";
 $connection=LoginToDB(); 
 $QueryStr="SELECT email, password, sch_name,sch_id
                   FROM pschools WHERE sch_id=".$tid."" ;   
         
	$result=QueryDB($QueryStr,$connection);   



	$row=mysql_fetch_row($result);
 



require 'phpmailer/class.phpmailer.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.att.sch.gr';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'grperekana';                            // SMTP username
$mail->Password = 'grf2anpe';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'perival@dide-anatol.att.sch.gr';
$mail->FromName = 'Dide-anatol-programs';
//$mail->AddAddress('vapapado@sch.gr', 'Josh Adams');  // Add a recipient
$mail->AddAddress("$row[0]");               // Name is optional
//$mail->AddReplyTo('info@example.com', 'Information');
//$mail->AddCC('cc@example.com');
//$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Kodikos gia dilosi programmatwn Sxol. Drastiriotitwn';
$mail->Body    = 'O Kodikos gia dilosi programmatwn Sxol. Drastiriotitwn  einai :<b>'. $row[1] .'</b>';
$mail->AltBody = 'O Kodikos gia dilosi programmatwn Sxol. Drastiriotitwn  einai:'. $row[1] .'';

if(!$mail->Send()) {
   echo 'Αποτυχία Απόκτησης-Ανάκτησης Κωδικού.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

 $loginMessage ="Επιτυχής Απόκτηση-Ανάκτηση Κωδικού! Ο κωδικός πρόσβασης έχει αποσταλεί στο e-mail του σχολείου σας:'". $row[0] ."'";
   // echo  $loginMessage;
    $_SESSION["loginMessage"]=$loginMessage;    
    header("Location: ../../Admin/Teachers/anaktisi.php"); 


//echo 'Message has been sent';
?>