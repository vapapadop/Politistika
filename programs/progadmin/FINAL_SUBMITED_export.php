<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/FINAL_SUBMITED_variables.php");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(CheckPermissionsEvent($strTableName, 'P') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Export"))
{
	echo "<p>"."You don't have permissions to access this table"."<a href=\"login.php\">"."Back to login page"."</a></p>";
	return;
}

$layout = new TLayout("export","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["export"] = array();

$layout->containers["export"][] = array("name"=>"exportheader","block"=>"","substyle"=>2);


$layout->containers["export"][] = array("name"=>"exprange_header","block"=>"rangeheader_block","substyle"=>3);


$layout->containers["export"][] = array("name"=>"exprange","block"=>"range_block","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expoutput_header","block"=>"","substyle"=>3);


$layout->containers["export"][] = array("name"=>"expoutput","block"=>"","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expbuttons","block"=>"","substyle"=>2);


$layout->skins["export"] = "fields";
$layout->blocks["top"][] = "export";$page_layouts["FINAL_SUBMITED_export"] = $layout;


// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

$cipherer = new RunnerCipherer($strTableName);

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;

$phpVersion = (int)substr(phpversion(), 0, 1); 
if($phpVersion > 4)
{
	include("include/export_functions.php");
	$xt->assign("groupExcel", true);
}
else
	$xt->assign("excel", true);

//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn, $pageObject);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["submission_id"] = refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys = array();
			$keys["submission_id"] = urldecode($arr[0]);
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}

$mypage = 1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy = $gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy, $pageObject);
//	Rebuild SQL if needed
	if($strSQL!=$strSQLbak)
	{
//	changed $strSQL - old style	
		$numrows=GetRowCount($strSQL);
	}
	else
	{
		$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
		$strSQL.=" ".trim($strOrderBy);
		$rowcount=false;
		if($eventObj->exists("ListGetRowCount"))
		{
			$masterKeysReq=array();
			for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
		}
		if($rowcount !== false)
			$numrows = $rowcount;
		else
			$numrows = $gQuery->gSQLRowCount($strWhereClause,$strHavingClause,$strSearchCriteria);
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = $gSettings->getInitialPageSize();
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
		}
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
	{
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');
		$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
		for($i = 0; $i < count($fieldList); $i++)
		{
			$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	if($listarray!==false)
		$rs = $listarray;
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
				if($phpVersion > 4)
			ExportToExcel($cipherer, $pageObject);
		else
			ExportToExcel_old($cipherer);
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord($cipherer);
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML($cipherer);
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV($cipherer);
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->addCommonJs();

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->display("FINAL_SUBMITED_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=FINAL_SUBMITED.xls");

	echo "<html>";
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToWord($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=FINAL_SUBMITED.doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML($cipherer)
{
	global $nPageSize,$rs,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=FINAL_SUBMITED.xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);	
	//if(!$row)
	//	return;
		
	global $cCharset;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i = 0;
	$pageObject->viewControls->forExport = "xml";
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		$values = array();
			$values["submission_id"] = $pageObject->showDBValue("submission_id", $row);
			$values["programa"] = $pageObject->showDBValue("programa", $row);
			$values["date"] = $pageObject->showDBValue("date", $row);
			$values["ar_protocol"] = $pageObject->showDBValue("ar_protocol", $row);
			$values["sxol_etos"] = $pageObject->showDBValue("sxol_etos", $row);
			$values["dide_name"] = $pageObject->showDBValue("dide_name", $row);
			$values["sch_name"] = $pageObject->showDBValue("sch_name", $row);
			$values["tel_ergasias"] = $pageObject->showDBValue("tel_ergasias", $row);
			$values["dimos"] = $pageObject->showDBValue("dimos", $row);
			$values["fax"] = $pageObject->showDBValue("fax", $row);
			$values["e_mail"] = $pageObject->showDBValue("e_mail", $row);
			$values["sch_teachers"] = $pageObject->showDBValue("sch_teachers", $row);
			$values["sch_students"] = $pageObject->showDBValue("sch_students", $row);
			$values["dieythintis_name"] = $pageObject->showDBValue("dieythintis_name", $row);
			$values["klados_dieythinti"] = $pageObject->showDBValue("klados_dieythinti", $row);
			$values["program_title"] = $pageObject->showDBValue("program_title", $row);
			$values["ar_praksis"] = $pageObject->showDBValue("ar_praksis", $row);
			$values["date_praksis"] = $pageObject->showDBValue("date_praksis", $row);
			$values["sch_orario"] = $pageObject->showDBValue("sch_orario", $row);
			$values["ypeythinos_name"] = $pageObject->showDBValue("ypeythinos_name", $row);
			$values["ypeythinos_amm"] = $pageObject->showDBValue("ypeythinos_amm", $row);
			$values["ypeythinos_klados"] = $pageObject->showDBValue("ypeythinos_klados", $row);
			$values["ypeythinos_wres"] = $pageObject->showDBValue("ypeythinos_wres", $row);
			$values["ypeythinos_again"] = $pageObject->showDBValue("ypeythinos_again", $row);
			$values["ypeythinos_epimorfosi"] = $pageObject->showDBValue("ypeythinos_epimorfosi", $row);
			$values["symetexwn1_name"] = $pageObject->showDBValue("symetexwn1_name", $row);
			$values["symetexwn1_amm"] = $pageObject->showDBValue("symetexwn1_amm", $row);
			$values["symetexwn1_klados"] = $pageObject->showDBValue("symetexwn1_klados", $row);
			$values["symetexwn1_wres"] = $pageObject->showDBValue("symetexwn1_wres", $row);
			$values["symetexwn1_again"] = $pageObject->showDBValue("symetexwn1_again", $row);
			$values["symetexwn1_epimorfosi"] = $pageObject->showDBValue("symetexwn1_epimorfosi", $row);
			$values["symetexwn2_name"] = $pageObject->showDBValue("symetexwn2_name", $row);
			$values["symetexwn2_amm"] = $pageObject->showDBValue("symetexwn2_amm", $row);
			$values["symetexwn2_klados"] = $pageObject->showDBValue("symetexwn2_klados", $row);
			$values["symetexwn2_wres"] = $pageObject->showDBValue("symetexwn2_wres", $row);
			$values["symetexwn2_again"] = $pageObject->showDBValue("symetexwn2_again", $row);
			$values["symetexwn2_epimorfosi"] = $pageObject->showDBValue("symetexwn2_epimorfosi", $row);
			$values["symetexwn3_name"] = $pageObject->showDBValue("symetexwn3_name", $row);
			$values["symetexwn3_amm"] = $pageObject->showDBValue("symetexwn3_amm", $row);
			$values["symetexwn3_klados"] = $pageObject->showDBValue("symetexwn3_klados", $row);
			$values["symetexwn3_wres"] = $pageObject->showDBValue("symetexwn3_wres", $row);
			$values["symetexwn3_again"] = $pageObject->showDBValue("symetexwn3_again", $row);
			$values["symetexwn3_epimorfosi"] = $pageObject->showDBValue("symetexwn3_epimorfosi", $row);
			$values["mathites_synolo"] = $pageObject->showDBValue("mathites_synolo", $row);
			$values["agoria"] = $pageObject->showDBValue("agoria", $row);
			$values["koritsia"] = $pageObject->showDBValue("koritsia", $row);
			$values["amiges"] = $pageObject->showDBValue("amiges", $row);
			$values["meet_day"] = $pageObject->showDBValue("meet_day", $row);
			$values["meet_hour"] = $pageObject->showDBValue("meet_hour", $row);
			$values["meet_place"] = $pageObject->showDBValue("meet_place", $row);
			$values["arxeio"] = $pageObject->showDBValue("arxeio", $row);
			$values["ypothemata"] = $pageObject->showDBValue("ypothemata", $row);
			$values["stoxoi"] = $pageObject->showDBValue("stoxoi", $row);
			$values["methodologia"] = $pageObject->showDBValue("methodologia", $row);
			$values["syndeseis"] = $pageObject->showDBValue("syndeseis", $row);
			$values["month1"] = $pageObject->showDBValue("month1", $row);
			$values["month2"] = $pageObject->showDBValue("month2", $row);
			$values["month3"] = $pageObject->showDBValue("month3", $row);
			$values["month4"] = $pageObject->showDBValue("month4", $row);
			$values["month5"] = $pageObject->showDBValue("month5", $row);
			$values["episkepseis"] = $pageObject->showDBValue("episkepseis", $row);
			$values["submission_date"] = $pageObject->showDBValue("submission_date", $row);
			$values["is_finalized"] = $pageObject->showDBValue("is_finalized", $row);
			$values["sch_id"] = $pageObject->showDBValue("sch_id", $row);
			$values["submited"] = $pageObject->showDBValue("submited", $row);
			$values["sch_id1"] = $pageObject->showDBValue("sch_id1", $row);
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo $values[$fName];
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	echo "</table>\r\n";
}

function ExportToCSV($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=FINAL_SUBMITED.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"submission_id\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"programa\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ar_protocol\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"sxol_etos\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"dide_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"sch_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"tel_ergasias\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"dimos\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"fax\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"e_mail\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"sch_teachers\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"sch_students\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"dieythintis_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"klados_dieythinti\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"program_title\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ar_praksis\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"date_praksis\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"sch_orario\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ypeythinos_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ypeythinos_amm\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ypeythinos_klados\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ypeythinos_wres\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ypeythinos_again\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ypeythinos_epimorfosi\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn1_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn1_amm\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn1_klados\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn1_wres\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn1_again\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn1_epimorfosi\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn2_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn2_amm\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn2_klados\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn2_wres\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn2_again\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn2_epimorfosi\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn3_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn3_amm\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn3_klados\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn3_wres\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn3_again\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"symetexwn3_epimorfosi\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"mathites_synolo\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"agoria\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"koritsia\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"amiges\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"meet_day\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"meet_hour\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"meet_place\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"arxeio\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ypothemata\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"stoxoi\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"methodologia\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"syndeseis\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"month1\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"month2\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"month3\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"month4\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"month5\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"episkepseis\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"submission_date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"is_finalized\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"sch_id\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"submited\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"sch_id1\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["submission_id"] = $pageObject->getViewControl("submission_id")->showDBValue($row, "");
			$values["programa"] = $pageObject->getViewControl("programa")->showDBValue($row, "");
			$values["date"] = $pageObject->getViewControl("date")->showDBValue($row, "");
			$values["ar_protocol"] = $pageObject->getViewControl("ar_protocol")->showDBValue($row, "");
			$values["sxol_etos"] = $pageObject->getViewControl("sxol_etos")->showDBValue($row, "");
			$values["dide_name"] = $pageObject->getViewControl("dide_name")->showDBValue($row, "");
			$values["sch_name"] = $pageObject->getViewControl("sch_name")->showDBValue($row, "");
			$values["tel_ergasias"] = $pageObject->getViewControl("tel_ergasias")->showDBValue($row, "");
			$values["dimos"] = $pageObject->getViewControl("dimos")->showDBValue($row, "");
			$values["fax"] = $pageObject->getViewControl("fax")->showDBValue($row, "");
			$values["e_mail"] = $pageObject->getViewControl("e_mail")->showDBValue($row, "");
			$values["sch_teachers"] = $pageObject->getViewControl("sch_teachers")->showDBValue($row, "");
			$values["sch_students"] = $pageObject->getViewControl("sch_students")->showDBValue($row, "");
			$values["dieythintis_name"] = $pageObject->getViewControl("dieythintis_name")->showDBValue($row, "");
			$values["klados_dieythinti"] = $pageObject->getViewControl("klados_dieythinti")->showDBValue($row, "");
			$values["program_title"] = $pageObject->getViewControl("program_title")->showDBValue($row, "");
			$values["ar_praksis"] = $pageObject->getViewControl("ar_praksis")->showDBValue($row, "");
			$values["date_praksis"] = $pageObject->getViewControl("date_praksis")->showDBValue($row, "");
			$values["sch_orario"] = $pageObject->getViewControl("sch_orario")->showDBValue($row, "");
			$values["ypeythinos_name"] = $pageObject->getViewControl("ypeythinos_name")->showDBValue($row, "");
			$values["ypeythinos_amm"] = $pageObject->getViewControl("ypeythinos_amm")->showDBValue($row, "");
			$values["ypeythinos_klados"] = $pageObject->getViewControl("ypeythinos_klados")->showDBValue($row, "");
			$values["ypeythinos_wres"] = $pageObject->getViewControl("ypeythinos_wres")->showDBValue($row, "");
			$values["ypeythinos_again"] = $pageObject->getViewControl("ypeythinos_again")->showDBValue($row, "");
			$values["ypeythinos_epimorfosi"] = $pageObject->getViewControl("ypeythinos_epimorfosi")->showDBValue($row, "");
			$values["symetexwn1_name"] = $pageObject->getViewControl("symetexwn1_name")->showDBValue($row, "");
			$values["symetexwn1_amm"] = $pageObject->getViewControl("symetexwn1_amm")->showDBValue($row, "");
			$values["symetexwn1_klados"] = $pageObject->getViewControl("symetexwn1_klados")->showDBValue($row, "");
			$values["symetexwn1_wres"] = $pageObject->getViewControl("symetexwn1_wres")->showDBValue($row, "");
			$values["symetexwn1_again"] = $pageObject->getViewControl("symetexwn1_again")->showDBValue($row, "");
			$values["symetexwn1_epimorfosi"] = $pageObject->getViewControl("symetexwn1_epimorfosi")->showDBValue($row, "");
			$values["symetexwn2_name"] = $pageObject->getViewControl("symetexwn2_name")->showDBValue($row, "");
			$values["symetexwn2_amm"] = $pageObject->getViewControl("symetexwn2_amm")->showDBValue($row, "");
			$values["symetexwn2_klados"] = $pageObject->getViewControl("symetexwn2_klados")->showDBValue($row, "");
			$values["symetexwn2_wres"] = $pageObject->getViewControl("symetexwn2_wres")->showDBValue($row, "");
			$values["symetexwn2_again"] = $pageObject->getViewControl("symetexwn2_again")->showDBValue($row, "");
			$values["symetexwn2_epimorfosi"] = $pageObject->getViewControl("symetexwn2_epimorfosi")->showDBValue($row, "");
			$values["symetexwn3_name"] = $pageObject->getViewControl("symetexwn3_name")->showDBValue($row, "");
			$values["symetexwn3_amm"] = $pageObject->getViewControl("symetexwn3_amm")->showDBValue($row, "");
			$values["symetexwn3_klados"] = $pageObject->getViewControl("symetexwn3_klados")->showDBValue($row, "");
			$values["symetexwn3_wres"] = $pageObject->getViewControl("symetexwn3_wres")->showDBValue($row, "");
			$values["symetexwn3_again"] = $pageObject->getViewControl("symetexwn3_again")->showDBValue($row, "");
			$values["symetexwn3_epimorfosi"] = $pageObject->getViewControl("symetexwn3_epimorfosi")->showDBValue($row, "");
			$values["mathites_synolo"] = $pageObject->getViewControl("mathites_synolo")->showDBValue($row, "");
			$values["agoria"] = $pageObject->getViewControl("agoria")->showDBValue($row, "");
			$values["koritsia"] = $pageObject->getViewControl("koritsia")->showDBValue($row, "");
			$values["amiges"] = $pageObject->getViewControl("amiges")->showDBValue($row, "");
			$values["meet_day"] = $pageObject->getViewControl("meet_day")->showDBValue($row, "");
			$values["meet_hour"] = $pageObject->getViewControl("meet_hour")->showDBValue($row, "");
			$values["meet_place"] = $pageObject->getViewControl("meet_place")->showDBValue($row, "");
			$values["arxeio"] = $pageObject->getViewControl("arxeio")->showDBValue($row, "");
			$values["ypothemata"] = $pageObject->getViewControl("ypothemata")->showDBValue($row, "");
			$values["stoxoi"] = $pageObject->getViewControl("stoxoi")->showDBValue($row, "");
			$values["methodologia"] = $pageObject->getViewControl("methodologia")->showDBValue($row, "");
			$values["syndeseis"] = $pageObject->getViewControl("syndeseis")->showDBValue($row, "");
			$values["month1"] = $pageObject->getViewControl("month1")->showDBValue($row, "");
			$values["month2"] = $pageObject->getViewControl("month2")->showDBValue($row, "");
			$values["month3"] = $pageObject->getViewControl("month3")->showDBValue($row, "");
			$values["month4"] = $pageObject->getViewControl("month4")->showDBValue($row, "");
			$values["month5"] = $pageObject->getViewControl("month5")->showDBValue($row, "");
			$values["episkepseis"] = $pageObject->getViewControl("episkepseis")->showDBValue($row, "");
			$values["submission_date"] = $pageObject->getViewControl("submission_date")->showDBValue($row, "");
			$values["is_finalized"] = $pageObject->getViewControl("is_finalized")->showDBValue($row, "");
			$values["sch_id"] = $pageObject->getViewControl("sch_id")->showDBValue($row, "");
			$values["submited"] = $pageObject->getViewControl("submited")->showDBValue($row, "");
			$values["sch_id1"] = $pageObject->getViewControl("sch_id1")->showDBValue($row, "");

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row,$values, $pageObject);
		}
		if ($eventRes)
		{
			$outstr="";
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["submission_id"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["programa"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ar_protocol"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["sxol_etos"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["dide_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["sch_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["tel_ergasias"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["dimos"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["fax"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["e_mail"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["sch_teachers"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["sch_students"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["dieythintis_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["klados_dieythinti"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["program_title"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ar_praksis"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["date_praksis"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["sch_orario"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ypeythinos_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ypeythinos_amm"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ypeythinos_klados"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ypeythinos_wres"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ypeythinos_again"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ypeythinos_epimorfosi"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn1_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn1_amm"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn1_klados"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn1_wres"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn1_again"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn1_epimorfosi"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn2_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn2_amm"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn2_klados"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn2_wres"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn2_again"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn2_epimorfosi"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn3_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn3_amm"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn3_klados"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn3_wres"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn3_again"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["symetexwn3_epimorfosi"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["mathites_synolo"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["agoria"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["koritsia"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["amiges"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["meet_day"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["meet_hour"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["meet_place"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["arxeio"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ypothemata"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["stoxoi"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["methodologia"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["syndeseis"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["month1"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["month2"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["month3"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["month4"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["month5"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["episkepseis"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["submission_date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["is_finalized"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["sch_id"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["submited"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["sch_id1"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}

function WriteTableData($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Αρ. Ηλ. Καταχώρησης").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Τύπος Προγράματος").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ημνια Πρωτλου Σχολείου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Αρ. Πρωτλου Σχολείου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Σχολ. Ετος").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("ΔΔΕ Ονομα").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Σχολείο").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Τηλ. Σχολείου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Δήμος Σχολείου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Fax").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("E Mail").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Αρ. Καθηγητών Σχολείου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Αρ. Μαθητών Σχολείου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ονομα Διευθυντή").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Κλάδος Διευθυντή").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Τίτλος Προγράμματος").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Αρ. Πράξης Συλλόγου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ημνια Πράξης Συλλόγου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ωράριο Σχολείου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Όνομα Υπευθύνου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("ΑΦΜ Υπευθύνου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Κλάδος Υπευθύνου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ώρες Υπευθύνου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Υπεύθυνος ξανά").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Επιμόρφωση Υπευθύνου").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Όνομα Συμμετέχων1").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("ΑΦΜ Συμμετέχων1").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Κλάδος Συμμετέχων1").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ώρες Συμμετέχων1").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Συμμετέχων1 ξανά").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Επιμόρφωση Συμμετέχων1").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Όνομα Συμμετέχων2").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("ΑΦΜ Συμμετέχων2").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Κλάδος Συμμετέχων2").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ώρες Συμμετέχων2").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Συμμετέχων2 ξανά").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Επιμόρφωση Συμμετέχων2").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Όνομα Συμμετέχων3").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("ΑΦΜ Συμμετέχων3").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Κλάδος Συμμετέχων3").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ώρες Συμμετέχων3").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Συμμετέχων3 ξανά").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Επιμόρφωση Συμμετέχων3").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Σύνολο Μαθητές Ομάδας").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Αγόρια").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Κορίτσια").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Σύνθεση Ομάδας").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ημέρα/ες Συνάντησης").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ώρα/ες Συνάντησης").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Τόπος Συνάντησης").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Υπάρχει Αρχείο ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Υποθέματα").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Στόχοι").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Μεθοδολογία").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Συνδέσεις").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Μήνας 1").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Μήνας 2").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Μήνας 3").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Μήνας 4").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Μήνας 5").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Αρ. Επισκέψεων").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Ημερομηνία Υποβολής Αιτησης").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Διακοπή Προγράμματος").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("sch_id").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Submited").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Sch Id1").'</td>';	
	}
	else
	{
		echo "<td>"."Αρ. Ηλ. Καταχώρησης"."</td>";
		echo "<td>"."Τύπος Προγράματος"."</td>";
		echo "<td>"."Ημνια Πρωτλου Σχολείου"."</td>";
		echo "<td>"."Αρ. Πρωτλου Σχολείου"."</td>";
		echo "<td>"."Σχολ. Ετος"."</td>";
		echo "<td>"."ΔΔΕ Ονομα"."</td>";
		echo "<td>"."Σχολείο"."</td>";
		echo "<td>"."Τηλ. Σχολείου"."</td>";
		echo "<td>"."Δήμος Σχολείου"."</td>";
		echo "<td>"."Fax"."</td>";
		echo "<td>"."E Mail"."</td>";
		echo "<td>"."Αρ. Καθηγητών Σχολείου"."</td>";
		echo "<td>"."Αρ. Μαθητών Σχολείου"."</td>";
		echo "<td>"."Ονομα Διευθυντή"."</td>";
		echo "<td>"."Κλάδος Διευθυντή"."</td>";
		echo "<td>"."Τίτλος Προγράμματος"."</td>";
		echo "<td>"."Αρ. Πράξης Συλλόγου"."</td>";
		echo "<td>"."Ημνια Πράξης Συλλόγου"."</td>";
		echo "<td>"."Ωράριο Σχολείου"."</td>";
		echo "<td>"."Όνομα Υπευθύνου"."</td>";
		echo "<td>"."ΑΦΜ Υπευθύνου"."</td>";
		echo "<td>"."Κλάδος Υπευθύνου"."</td>";
		echo "<td>"."Ώρες Υπευθύνου"."</td>";
		echo "<td>"."Υπεύθυνος ξανά"."</td>";
		echo "<td>"."Επιμόρφωση Υπευθύνου"."</td>";
		echo "<td>"."Όνομα Συμμετέχων1"."</td>";
		echo "<td>"."ΑΦΜ Συμμετέχων1"."</td>";
		echo "<td>"."Κλάδος Συμμετέχων1"."</td>";
		echo "<td>"."Ώρες Συμμετέχων1"."</td>";
		echo "<td>"."Συμμετέχων1 ξανά"."</td>";
		echo "<td>"."Επιμόρφωση Συμμετέχων1"."</td>";
		echo "<td>"."Όνομα Συμμετέχων2"."</td>";
		echo "<td>"."ΑΦΜ Συμμετέχων2"."</td>";
		echo "<td>"."Κλάδος Συμμετέχων2"."</td>";
		echo "<td>"."Ώρες Συμμετέχων2"."</td>";
		echo "<td>"."Συμμετέχων2 ξανά"."</td>";
		echo "<td>"."Επιμόρφωση Συμμετέχων2"."</td>";
		echo "<td>"."Όνομα Συμμετέχων3"."</td>";
		echo "<td>"."ΑΦΜ Συμμετέχων3"."</td>";
		echo "<td>"."Κλάδος Συμμετέχων3"."</td>";
		echo "<td>"."Ώρες Συμμετέχων3"."</td>";
		echo "<td>"."Συμμετέχων3 ξανά"."</td>";
		echo "<td>"."Επιμόρφωση Συμμετέχων3"."</td>";
		echo "<td>"."Σύνολο Μαθητές Ομάδας"."</td>";
		echo "<td>"."Αγόρια"."</td>";
		echo "<td>"."Κορίτσια"."</td>";
		echo "<td>"."Σύνθεση Ομάδας"."</td>";
		echo "<td>"."Ημέρα/ες Συνάντησης"."</td>";
		echo "<td>"."Ώρα/ες Συνάντησης"."</td>";
		echo "<td>"."Τόπος Συνάντησης"."</td>";
		echo "<td>"."Υπάρχει Αρχείο "."</td>";
		echo "<td>"."Υποθέματα"."</td>";
		echo "<td>"."Στόχοι"."</td>";
		echo "<td>"."Μεθοδολογία"."</td>";
		echo "<td>"."Συνδέσεις"."</td>";
		echo "<td>"."Μήνας 1"."</td>";
		echo "<td>"."Μήνας 2"."</td>";
		echo "<td>"."Μήνας 3"."</td>";
		echo "<td>"."Μήνας 4"."</td>";
		echo "<td>"."Μήνας 5"."</td>";
		echo "<td>"."Αρ. Επισκέψεων"."</td>";
		echo "<td>"."Ημερομηνία Υποβολής Αιτησης"."</td>";
		echo "<td>"."Διακοπή Προγράμματος"."</td>";
		echo "<td>"."sch_id"."</td>";
		echo "<td>"."Submited"."</td>";
		echo "<td>"."Sch Id1"."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["submission_id"] = $pageObject->getViewControl("submission_id")->showDBValue($row, "");
					$values["programa"] = $pageObject->getViewControl("programa")->showDBValue($row, "");
					$values["date"] = $pageObject->getViewControl("date")->showDBValue($row, "");
					$values["ar_protocol"] = $pageObject->getViewControl("ar_protocol")->showDBValue($row, "");
					$values["sxol_etos"] = $pageObject->getViewControl("sxol_etos")->showDBValue($row, "");
					$values["dide_name"] = $pageObject->getViewControl("dide_name")->showDBValue($row, "");
					$values["sch_name"] = $pageObject->getViewControl("sch_name")->showDBValue($row, "");
					$values["tel_ergasias"] = $pageObject->getViewControl("tel_ergasias")->showDBValue($row, "");
					$values["dimos"] = $pageObject->getViewControl("dimos")->showDBValue($row, "");
					$values["fax"] = $pageObject->getViewControl("fax")->showDBValue($row, "");
					$values["e_mail"] = $pageObject->getViewControl("e_mail")->showDBValue($row, "");
					$values["sch_teachers"] = $pageObject->getViewControl("sch_teachers")->showDBValue($row, "");
					$values["sch_students"] = $pageObject->getViewControl("sch_students")->showDBValue($row, "");
					$values["dieythintis_name"] = $pageObject->getViewControl("dieythintis_name")->showDBValue($row, "");
					$values["klados_dieythinti"] = $pageObject->getViewControl("klados_dieythinti")->showDBValue($row, "");
					$values["program_title"] = $pageObject->getViewControl("program_title")->showDBValue($row, "");
					$values["ar_praksis"] = $pageObject->getViewControl("ar_praksis")->showDBValue($row, "");
					$values["date_praksis"] = $pageObject->getViewControl("date_praksis")->showDBValue($row, "");
					$values["sch_orario"] = $pageObject->getViewControl("sch_orario")->showDBValue($row, "");
					$values["ypeythinos_name"] = $pageObject->getViewControl("ypeythinos_name")->showDBValue($row, "");
					$values["ypeythinos_amm"] = $pageObject->getViewControl("ypeythinos_amm")->showDBValue($row, "");
					$values["ypeythinos_klados"] = $pageObject->getViewControl("ypeythinos_klados")->showDBValue($row, "");
					$values["ypeythinos_wres"] = $pageObject->getViewControl("ypeythinos_wres")->showDBValue($row, "");
					$values["ypeythinos_again"] = $pageObject->getViewControl("ypeythinos_again")->showDBValue($row, "");
					$values["ypeythinos_epimorfosi"] = $pageObject->getViewControl("ypeythinos_epimorfosi")->showDBValue($row, "");
					$values["symetexwn1_name"] = $pageObject->getViewControl("symetexwn1_name")->showDBValue($row, "");
					$values["symetexwn1_amm"] = $pageObject->getViewControl("symetexwn1_amm")->showDBValue($row, "");
					$values["symetexwn1_klados"] = $pageObject->getViewControl("symetexwn1_klados")->showDBValue($row, "");
					$values["symetexwn1_wres"] = $pageObject->getViewControl("symetexwn1_wres")->showDBValue($row, "");
					$values["symetexwn1_again"] = $pageObject->getViewControl("symetexwn1_again")->showDBValue($row, "");
					$values["symetexwn1_epimorfosi"] = $pageObject->getViewControl("symetexwn1_epimorfosi")->showDBValue($row, "");
					$values["symetexwn2_name"] = $pageObject->getViewControl("symetexwn2_name")->showDBValue($row, "");
					$values["symetexwn2_amm"] = $pageObject->getViewControl("symetexwn2_amm")->showDBValue($row, "");
					$values["symetexwn2_klados"] = $pageObject->getViewControl("symetexwn2_klados")->showDBValue($row, "");
					$values["symetexwn2_wres"] = $pageObject->getViewControl("symetexwn2_wres")->showDBValue($row, "");
					$values["symetexwn2_again"] = $pageObject->getViewControl("symetexwn2_again")->showDBValue($row, "");
					$values["symetexwn2_epimorfosi"] = $pageObject->getViewControl("symetexwn2_epimorfosi")->showDBValue($row, "");
					$values["symetexwn3_name"] = $pageObject->getViewControl("symetexwn3_name")->showDBValue($row, "");
					$values["symetexwn3_amm"] = $pageObject->getViewControl("symetexwn3_amm")->showDBValue($row, "");
					$values["symetexwn3_klados"] = $pageObject->getViewControl("symetexwn3_klados")->showDBValue($row, "");
					$values["symetexwn3_wres"] = $pageObject->getViewControl("symetexwn3_wres")->showDBValue($row, "");
					$values["symetexwn3_again"] = $pageObject->getViewControl("symetexwn3_again")->showDBValue($row, "");
					$values["symetexwn3_epimorfosi"] = $pageObject->getViewControl("symetexwn3_epimorfosi")->showDBValue($row, "");
					$values["mathites_synolo"] = $pageObject->getViewControl("mathites_synolo")->showDBValue($row, "");
					$values["agoria"] = $pageObject->getViewControl("agoria")->showDBValue($row, "");
					$values["koritsia"] = $pageObject->getViewControl("koritsia")->showDBValue($row, "");
					$values["amiges"] = $pageObject->getViewControl("amiges")->showDBValue($row, "");
					$values["meet_day"] = $pageObject->getViewControl("meet_day")->showDBValue($row, "");
					$values["meet_hour"] = $pageObject->getViewControl("meet_hour")->showDBValue($row, "");
					$values["meet_place"] = $pageObject->getViewControl("meet_place")->showDBValue($row, "");
					$values["arxeio"] = $pageObject->getViewControl("arxeio")->showDBValue($row, "");
					$values["ypothemata"] = $pageObject->getViewControl("ypothemata")->showDBValue($row, "");
					$values["stoxoi"] = $pageObject->getViewControl("stoxoi")->showDBValue($row, "");
					$values["methodologia"] = $pageObject->getViewControl("methodologia")->showDBValue($row, "");
					$values["syndeseis"] = $pageObject->getViewControl("syndeseis")->showDBValue($row, "");
					$values["month1"] = $pageObject->getViewControl("month1")->showDBValue($row, "");
					$values["month2"] = $pageObject->getViewControl("month2")->showDBValue($row, "");
					$values["month3"] = $pageObject->getViewControl("month3")->showDBValue($row, "");
					$values["month4"] = $pageObject->getViewControl("month4")->showDBValue($row, "");
					$values["month5"] = $pageObject->getViewControl("month5")->showDBValue($row, "");
					$values["episkepseis"] = $pageObject->getViewControl("episkepseis")->showDBValue($row, "");
					$values["submission_date"] = $pageObject->getViewControl("submission_date")->showDBValue($row, "");
					$values["is_finalized"] = $pageObject->getViewControl("is_finalized")->showDBValue($row, "");
					$values["sch_id"] = $pageObject->getViewControl("sch_id")->showDBValue($row, "");
					$values["submited"] = $pageObject->getViewControl("submited")->showDBValue($row, "");
					$values["sch_id1"] = $pageObject->getViewControl("sch_id1")->showDBValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							echo '<td>';
			
									echo $values["submission_id"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["programa"]);
					else
						echo $values["programa"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["date"]);
					else
						echo $values["date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ar_protocol"]);
					else
						echo $values["ar_protocol"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["sxol_etos"]);
					else
						echo $values["sxol_etos"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["dide_name"]);
					else
						echo $values["dide_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["sch_name"]);
					else
						echo $values["sch_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["tel_ergasias"]);
					else
						echo $values["tel_ergasias"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["dimos"]);
					else
						echo $values["dimos"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["fax"]);
					else
						echo $values["fax"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["e_mail"]);
					else
						echo $values["e_mail"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["sch_teachers"]);
					else
						echo $values["sch_teachers"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["sch_students"]);
					else
						echo $values["sch_students"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["dieythintis_name"]);
					else
						echo $values["dieythintis_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["klados_dieythinti"]);
					else
						echo $values["klados_dieythinti"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["program_title"]);
					else
						echo $values["program_title"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ar_praksis"]);
					else
						echo $values["ar_praksis"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["date_praksis"]);
					else
						echo $values["date_praksis"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["sch_orario"]);
					else
						echo $values["sch_orario"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ypeythinos_name"]);
					else
						echo $values["ypeythinos_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ypeythinos_amm"]);
					else
						echo $values["ypeythinos_amm"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ypeythinos_klados"]);
					else
						echo $values["ypeythinos_klados"];
			echo '</td>';
							echo '<td>';
			
									echo $values["ypeythinos_wres"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ypeythinos_again"]);
					else
						echo $values["ypeythinos_again"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ypeythinos_epimorfosi"]);
					else
						echo $values["ypeythinos_epimorfosi"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn1_name"]);
					else
						echo $values["symetexwn1_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn1_amm"]);
					else
						echo $values["symetexwn1_amm"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn1_klados"]);
					else
						echo $values["symetexwn1_klados"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn1_wres"]);
					else
						echo $values["symetexwn1_wres"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn1_again"]);
					else
						echo $values["symetexwn1_again"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn1_epimorfosi"]);
					else
						echo $values["symetexwn1_epimorfosi"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn2_name"]);
					else
						echo $values["symetexwn2_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn2_amm"]);
					else
						echo $values["symetexwn2_amm"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn2_klados"]);
					else
						echo $values["symetexwn2_klados"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn2_wres"]);
					else
						echo $values["symetexwn2_wres"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn2_again"]);
					else
						echo $values["symetexwn2_again"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn2_epimorfosi"]);
					else
						echo $values["symetexwn2_epimorfosi"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn3_name"]);
					else
						echo $values["symetexwn3_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn3_amm"]);
					else
						echo $values["symetexwn3_amm"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn3_klados"]);
					else
						echo $values["symetexwn3_klados"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn3_wres"]);
					else
						echo $values["symetexwn3_wres"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn3_again"]);
					else
						echo $values["symetexwn3_again"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["symetexwn3_epimorfosi"]);
					else
						echo $values["symetexwn3_epimorfosi"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["mathites_synolo"]);
					else
						echo $values["mathites_synolo"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["agoria"]);
					else
						echo $values["agoria"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["koritsia"]);
					else
						echo $values["koritsia"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["amiges"]);
					else
						echo $values["amiges"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["meet_day"]);
					else
						echo $values["meet_day"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["meet_hour"]);
					else
						echo $values["meet_hour"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["meet_place"]);
					else
						echo $values["meet_place"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["arxeio"]);
					else
						echo $values["arxeio"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ypothemata"]);
					else
						echo $values["ypothemata"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["stoxoi"]);
					else
						echo $values["stoxoi"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["methodologia"]);
					else
						echo $values["methodologia"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["syndeseis"]);
					else
						echo $values["syndeseis"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["month1"]);
					else
						echo $values["month1"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["month2"]);
					else
						echo $values["month2"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["month3"]);
					else
						echo $values["month3"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["month4"]);
					else
						echo $values["month4"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["month5"]);
					else
						echo $values["month5"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["episkepseis"]);
					else
						echo $values["episkepseis"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["submission_date"]);
					else
						echo $values["submission_date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["is_finalized"]);
					else
						echo $values["is_finalized"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["sch_id"]);
					else
						echo $values["sch_id"];
			echo '</td>';
							echo '<td>';
			
									echo $values["submited"];
			echo '</td>';
							echo '<td>';
			
									echo $values["sch_id1"];
			echo '</td>';
			echo "</tr>";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	
}

function XMLNameEncode($strValue)
{
	$search = array(" ","#","'","/","\\","(",")",",","[");
	$ret = str_replace($search,"",$strValue);
	$search = array("]","+","\"","-","_","|","}","{","=");
	$ret = str_replace($search,"",$ret);
	return $ret;
}

function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);
		
		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}
?>
