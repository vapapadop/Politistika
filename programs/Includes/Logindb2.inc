﻿<?
//global $connection;
//=======================
//Connecting to db
//=======================
function LoginToDB2()
{


$hostname='localhost';
$username='root';
$password='';
$databaseName='politistika';

$connection = @mysql_connect($hostname,$username,$password)
or die("Αδυναμία Σύνδεσης Στη Βάση Δεδομένων του Σχολικού Δικτύου.H Ιστοσελίδα είναι προσωρινά μη Διαθέσιμη. Δοκιμάστε πάλι Αργότερα..");
@mysql_select_db($databaseName, $connection)
or die ("couldn't find database '$databaseName'.");
@mysql_query("SET NAMES 'utf8'", $connection);
return $connection;
}

//=======================
//Closing connection
//=======================
function LogoutFromDB2()
{
mysql_close();
}

//=======================
//Query the DataBase
//=======================
function QueryDB2($Query,$connection)
{
$result = @mysql_query($Query,$connection);
return $result;
}

//==================================
//Free buffer from query results
//==================================
function FreeBuffer($result)
{
mysql_free_result($result);
return result;
}


?>
