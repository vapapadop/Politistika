<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/prosorines_variables.php");

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

$layout = new TLayout("print","BoldOrange","MobileOrange");
$layout->blocks["center"] = array();
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"printgrid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "empty";
$layout->blocks["center"][] = "grid";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["pdf"] = array();

$layout->containers["pdf"][] = array("name"=>"printpdf","block"=>"","substyle"=>1);


$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";$page_layouts["prosorines_print"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');

$cipherer = new RunnerCipherer($strTableName);

$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;
$all = postvalue("all");
$pageName = "print.php";

//array of params for classes
$params = array("id" => $id,
				"tName" => $strTableName,
				"pageType" => PAGE_PRINT);
$params["xt"] = &$xt;
			
$pageObject = new RunnerPage($params);

// add button events if exist
$pageObject->addButtonHandlers();

// Modify query: remove blob fields from fieldlist.
// Blob fields on a print page are shown using imager.php (for example).
// They don't need to be selected from DB in print.php itself.
$noBlobReplace = false;
if(!postvalue("pdf") && !$noBlobReplace)
	$gQuery->ReplaceFieldsWithDummies($pageObject->pSet->getBinaryFieldsIndices());

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn, $pageObject);

$strWhereClause="";
$strHavingClause="";
$strSearchCriteria="and";

$selected_recs=array();
if (@$_REQUEST["a"]!="") 
{
	$sWhere = "1=0";	
	
//	process selection
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["submission_id"]=refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[]=$keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys=array();
			$keys["submission_id"]=urldecode($arr[0]);
			$selected_recs[]=$keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}
	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
}
else
{
	$strWhereClause=@$_SESSION[$strTableName."_where"];
	$strHavingClause=@$_SESSION[$strTableName."_having"];
	$strSearchCriteria=@$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}
if(postvalue("pdf"))
	$strWhereClause = @$_SESSION[$strTableName."_pdfwhere"];

$_SESSION[$strTableName."_pdfwhere"] = $strWhereClause;


$strOrderBy = $_SESSION[$strTableName."_order"];
if(!$strOrderBy)
	$strOrderBy=$gstrOrderBy;
$strSQL.=" ".trim($strOrderBy);

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy, $pageObject);

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
			$masterKeysReq[]=$_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount=$eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
	}
	if($rowcount!==false)
		$numrows=$rowcount;
	else
	{
		$numrows = $gQuery->gSQLRowCount($strWhereClause, $strHavingClause, $strSearchCriteria);
	}
}

LogInfo($strSQL);

$mypage=(integer)$_SESSION[$strTableName."_pagenumber"];
if(!$mypage)
	$mypage=1;

//	page size
$PageSize=(integer)$_SESSION[$strTableName."_pagesize"];
if(!$PageSize)
	$PageSize = $pageObject->pSet->getInitialPageSize();

if($PageSize<0)
	$all = 1;	
	
$recno = 1;
$records = 0;	
$maxpages = 1;
$pageindex = 1;
$pageno=1;

// build arrays for sort (to support old code in user-defined events)
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
}

if(!$all)
{	
	if($numrows)
	{
		$maxRecords = $numrows;
		$maxpages = ceil($maxRecords/$PageSize);
					
		if($mypage > $maxpages)
			$mypage = $maxpages;
		
		if($mypage < 1) 
			$mypage = 1;
		
		$maxrecs = $PageSize;
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort, 
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
	{
			if($numrows)
		{
			$strSQL.=" limit ".(($mypage-1)*$PageSize).",".$PageSize;
		}
		$rs = db_query($strSQL,$conn);
	}
	
	//	hide colunm headers if needed
	$recordsonpage = $numrows-($mypage-1)*$PageSize;
	if($recordsonpage>$PageSize)
		$recordsonpage = $PageSize;
		
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
	$xt->assign("pageno",$mypage);
}
else
{
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray=$eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
		$rs = db_query($strSQL,$conn);
	$recordsonpage = $numrows;
	$maxpages = ceil($recordsonpage/30);
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
}


$fieldsArr = array();
$arr = array();
$arr['fName'] = "submission_id";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("submission_id");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "programa";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("programa");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "date";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("date");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ar_protocol";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ar_protocol");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "sxol_etos";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("sxol_etos");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "dide_name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("dide_name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "sch_name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("sch_name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "tel_ergasias";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("tel_ergasias");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "dimos";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("dimos");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "fax";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("fax");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "e_mail";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("e_mail");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "sch_teachers";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("sch_teachers");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "sch_students";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("sch_students");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "dieythintis_name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("dieythintis_name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "klados_dieythinti";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("klados_dieythinti");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "program_title";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("program_title");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ar_praksis";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ar_praksis");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "date_praksis";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("date_praksis");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "sch_orario";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("sch_orario");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ypeythinos_name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ypeythinos_name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ypeythinos_amm";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ypeythinos_amm");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ypeythinos_klados";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ypeythinos_klados");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ypeythinos_wres";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ypeythinos_wres");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ypeythinos_again";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ypeythinos_again");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ypeythinos_epimorfosi";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ypeythinos_epimorfosi");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn1_name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn1_name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn1_amm";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn1_amm");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn1_klados";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn1_klados");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn1_wres";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn1_wres");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn1_again";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn1_again");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn1_epimorfosi";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn1_epimorfosi");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn2_name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn2_name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn2_amm";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn2_amm");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn2_klados";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn2_klados");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn2_wres";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn2_wres");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn2_again";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn2_again");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn2_epimorfosi";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn2_epimorfosi");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn3_name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn3_name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn3_amm";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn3_amm");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn3_klados";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn3_klados");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn3_wres";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn3_wres");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn3_again";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn3_again");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "symetexwn3_epimorfosi";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("symetexwn3_epimorfosi");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "mathites_synolo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("mathites_synolo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "agoria";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("agoria");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "koritsia";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("koritsia");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "amiges";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("amiges");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "meet_day";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("meet_day");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "meet_hour";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("meet_hour");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "meet_place";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("meet_place");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "arxeio";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("arxeio");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ypothemata";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ypothemata");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "stoxoi";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("stoxoi");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "methodologia";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("methodologia");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "syndeseis";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("syndeseis");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "month1";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("month1");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "month2";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("month2");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "month3";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("month3");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "month4";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("month4");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "month5";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("month5");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "episkepseis";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("episkepseis");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "submission_date";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("submission_date");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "last_modified_date";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("last_modified_date");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ip_address";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ip_address");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "is_finalized";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("is_finalized");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "sch_id";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("sch_id");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "submited";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("submited");
$fieldsArr[] = $arr;
$pageObject->setGoogleMapsParams($fieldsArr);

$colsonpage=1;
if($colsonpage>$recordsonpage)
	$colsonpage=$recordsonpage;
if($colsonpage<1)
	$colsonpage=1;


//	fill $rowinfo array
	$pages = array();
	$rowinfo = array();
	$rowinfo["data"] = array();
	if($eventObj->exists("ListFetchArray"))
		$data = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$data = $cipherer->DecryptFetchedArray($rs);

	while($data)
	{
		if($eventObj->exists("BeforeProcessRowPrint"))
		{
			if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
			{
				if($eventObj->exists("ListFetchArray"))
					$data = $eventObj->ListFetchArray($rs, $pageObject);
				else
					$data = $cipherer->DecryptFetchedArray($rs);
				continue;
			}
		}
		break;
	}
	
	while($data && ($all || $recno<=$PageSize))
	{
		$row = array();
		$row["grid_record"] = array();
		$row["grid_record"]["data"] = array();
		for($col=1;$data && ($all || $recno<=$PageSize) && $col<=1;$col++)
		{
			$record = array();
			$recno++;
			$records++;
			$keylink="";
			$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["submission_id"]));

//	submited - 
			$record["submited_value"] = $pageObject->showDBValue("submited", $data, $keylink);
			$record["submited_class"] = $pageObject->fieldClass("submited");
//	submission_id - 
			$record["submission_id_value"] = $pageObject->showDBValue("submission_id", $data, $keylink);
			$record["submission_id_class"] = $pageObject->fieldClass("submission_id");
//	programa - 
			$record["programa_value"] = $pageObject->showDBValue("programa", $data, $keylink);
			$record["programa_class"] = $pageObject->fieldClass("programa");
//	date - 
			$record["date_value"] = $pageObject->showDBValue("date", $data, $keylink);
			$record["date_class"] = $pageObject->fieldClass("date");
//	ar_protocol - 
			$record["ar_protocol_value"] = $pageObject->showDBValue("ar_protocol", $data, $keylink);
			$record["ar_protocol_class"] = $pageObject->fieldClass("ar_protocol");
//	sxol_etos - 
			$record["sxol_etos_value"] = $pageObject->showDBValue("sxol_etos", $data, $keylink);
			$record["sxol_etos_class"] = $pageObject->fieldClass("sxol_etos");
//	dide_name - 
			$record["dide_name_value"] = $pageObject->showDBValue("dide_name", $data, $keylink);
			$record["dide_name_class"] = $pageObject->fieldClass("dide_name");
//	sch_name - 
			$record["sch_name_value"] = $pageObject->showDBValue("sch_name", $data, $keylink);
			$record["sch_name_class"] = $pageObject->fieldClass("sch_name");
//	tel_ergasias - 
			$record["tel_ergasias_value"] = $pageObject->showDBValue("tel_ergasias", $data, $keylink);
			$record["tel_ergasias_class"] = $pageObject->fieldClass("tel_ergasias");
//	dimos - 
			$record["dimos_value"] = $pageObject->showDBValue("dimos", $data, $keylink);
			$record["dimos_class"] = $pageObject->fieldClass("dimos");
//	fax - 
			$record["fax_value"] = $pageObject->showDBValue("fax", $data, $keylink);
			$record["fax_class"] = $pageObject->fieldClass("fax");
//	e_mail - 
			$record["e_mail_value"] = $pageObject->showDBValue("e_mail", $data, $keylink);
			$record["e_mail_class"] = $pageObject->fieldClass("e_mail");
//	sch_teachers - 
			$record["sch_teachers_value"] = $pageObject->showDBValue("sch_teachers", $data, $keylink);
			$record["sch_teachers_class"] = $pageObject->fieldClass("sch_teachers");
//	sch_students - 
			$record["sch_students_value"] = $pageObject->showDBValue("sch_students", $data, $keylink);
			$record["sch_students_class"] = $pageObject->fieldClass("sch_students");
//	dieythintis_name - 
			$record["dieythintis_name_value"] = $pageObject->showDBValue("dieythintis_name", $data, $keylink);
			$record["dieythintis_name_class"] = $pageObject->fieldClass("dieythintis_name");
//	klados_dieythinti - 
			$record["klados_dieythinti_value"] = $pageObject->showDBValue("klados_dieythinti", $data, $keylink);
			$record["klados_dieythinti_class"] = $pageObject->fieldClass("klados_dieythinti");
//	program_title - 
			$record["program_title_value"] = $pageObject->showDBValue("program_title", $data, $keylink);
			$record["program_title_class"] = $pageObject->fieldClass("program_title");
//	ar_praksis - 
			$record["ar_praksis_value"] = $pageObject->showDBValue("ar_praksis", $data, $keylink);
			$record["ar_praksis_class"] = $pageObject->fieldClass("ar_praksis");
//	date_praksis - 
			$record["date_praksis_value"] = $pageObject->showDBValue("date_praksis", $data, $keylink);
			$record["date_praksis_class"] = $pageObject->fieldClass("date_praksis");
//	sch_orario - 
			$record["sch_orario_value"] = $pageObject->showDBValue("sch_orario", $data, $keylink);
			$record["sch_orario_class"] = $pageObject->fieldClass("sch_orario");
//	ypeythinos_name - 
			$record["ypeythinos_name_value"] = $pageObject->showDBValue("ypeythinos_name", $data, $keylink);
			$record["ypeythinos_name_class"] = $pageObject->fieldClass("ypeythinos_name");
//	ypeythinos_amm - 
			$record["ypeythinos_amm_value"] = $pageObject->showDBValue("ypeythinos_amm", $data, $keylink);
			$record["ypeythinos_amm_class"] = $pageObject->fieldClass("ypeythinos_amm");
//	ypeythinos_klados - 
			$record["ypeythinos_klados_value"] = $pageObject->showDBValue("ypeythinos_klados", $data, $keylink);
			$record["ypeythinos_klados_class"] = $pageObject->fieldClass("ypeythinos_klados");
//	ypeythinos_wres - 
			$record["ypeythinos_wres_value"] = $pageObject->showDBValue("ypeythinos_wres", $data, $keylink);
			$record["ypeythinos_wres_class"] = $pageObject->fieldClass("ypeythinos_wres");
//	ypeythinos_again - 
			$record["ypeythinos_again_value"] = $pageObject->showDBValue("ypeythinos_again", $data, $keylink);
			$record["ypeythinos_again_class"] = $pageObject->fieldClass("ypeythinos_again");
//	ypeythinos_epimorfosi - 
			$record["ypeythinos_epimorfosi_value"] = $pageObject->showDBValue("ypeythinos_epimorfosi", $data, $keylink);
			$record["ypeythinos_epimorfosi_class"] = $pageObject->fieldClass("ypeythinos_epimorfosi");
//	symetexwn1_name - 
			$record["symetexwn1_name_value"] = $pageObject->showDBValue("symetexwn1_name", $data, $keylink);
			$record["symetexwn1_name_class"] = $pageObject->fieldClass("symetexwn1_name");
//	symetexwn1_amm - 
			$record["symetexwn1_amm_value"] = $pageObject->showDBValue("symetexwn1_amm", $data, $keylink);
			$record["symetexwn1_amm_class"] = $pageObject->fieldClass("symetexwn1_amm");
//	symetexwn1_klados - 
			$record["symetexwn1_klados_value"] = $pageObject->showDBValue("symetexwn1_klados", $data, $keylink);
			$record["symetexwn1_klados_class"] = $pageObject->fieldClass("symetexwn1_klados");
//	symetexwn1_wres - 
			$record["symetexwn1_wres_value"] = $pageObject->showDBValue("symetexwn1_wres", $data, $keylink);
			$record["symetexwn1_wres_class"] = $pageObject->fieldClass("symetexwn1_wres");
//	symetexwn1_again - 
			$record["symetexwn1_again_value"] = $pageObject->showDBValue("symetexwn1_again", $data, $keylink);
			$record["symetexwn1_again_class"] = $pageObject->fieldClass("symetexwn1_again");
//	symetexwn1_epimorfosi - 
			$record["symetexwn1_epimorfosi_value"] = $pageObject->showDBValue("symetexwn1_epimorfosi", $data, $keylink);
			$record["symetexwn1_epimorfosi_class"] = $pageObject->fieldClass("symetexwn1_epimorfosi");
//	symetexwn2_name - 
			$record["symetexwn2_name_value"] = $pageObject->showDBValue("symetexwn2_name", $data, $keylink);
			$record["symetexwn2_name_class"] = $pageObject->fieldClass("symetexwn2_name");
//	symetexwn2_amm - 
			$record["symetexwn2_amm_value"] = $pageObject->showDBValue("symetexwn2_amm", $data, $keylink);
			$record["symetexwn2_amm_class"] = $pageObject->fieldClass("symetexwn2_amm");
//	symetexwn2_klados - 
			$record["symetexwn2_klados_value"] = $pageObject->showDBValue("symetexwn2_klados", $data, $keylink);
			$record["symetexwn2_klados_class"] = $pageObject->fieldClass("symetexwn2_klados");
//	symetexwn2_wres - 
			$record["symetexwn2_wres_value"] = $pageObject->showDBValue("symetexwn2_wres", $data, $keylink);
			$record["symetexwn2_wres_class"] = $pageObject->fieldClass("symetexwn2_wres");
//	symetexwn2_again - 
			$record["symetexwn2_again_value"] = $pageObject->showDBValue("symetexwn2_again", $data, $keylink);
			$record["symetexwn2_again_class"] = $pageObject->fieldClass("symetexwn2_again");
//	symetexwn2_epimorfosi - 
			$record["symetexwn2_epimorfosi_value"] = $pageObject->showDBValue("symetexwn2_epimorfosi", $data, $keylink);
			$record["symetexwn2_epimorfosi_class"] = $pageObject->fieldClass("symetexwn2_epimorfosi");
//	symetexwn3_name - 
			$record["symetexwn3_name_value"] = $pageObject->showDBValue("symetexwn3_name", $data, $keylink);
			$record["symetexwn3_name_class"] = $pageObject->fieldClass("symetexwn3_name");
//	symetexwn3_amm - 
			$record["symetexwn3_amm_value"] = $pageObject->showDBValue("symetexwn3_amm", $data, $keylink);
			$record["symetexwn3_amm_class"] = $pageObject->fieldClass("symetexwn3_amm");
//	symetexwn3_klados - 
			$record["symetexwn3_klados_value"] = $pageObject->showDBValue("symetexwn3_klados", $data, $keylink);
			$record["symetexwn3_klados_class"] = $pageObject->fieldClass("symetexwn3_klados");
//	symetexwn3_wres - 
			$record["symetexwn3_wres_value"] = $pageObject->showDBValue("symetexwn3_wres", $data, $keylink);
			$record["symetexwn3_wres_class"] = $pageObject->fieldClass("symetexwn3_wres");
//	symetexwn3_again - 
			$record["symetexwn3_again_value"] = $pageObject->showDBValue("symetexwn3_again", $data, $keylink);
			$record["symetexwn3_again_class"] = $pageObject->fieldClass("symetexwn3_again");
//	symetexwn3_epimorfosi - 
			$record["symetexwn3_epimorfosi_value"] = $pageObject->showDBValue("symetexwn3_epimorfosi", $data, $keylink);
			$record["symetexwn3_epimorfosi_class"] = $pageObject->fieldClass("symetexwn3_epimorfosi");
//	mathites_synolo - 
			$record["mathites_synolo_value"] = $pageObject->showDBValue("mathites_synolo", $data, $keylink);
			$record["mathites_synolo_class"] = $pageObject->fieldClass("mathites_synolo");
//	agoria - 
			$record["agoria_value"] = $pageObject->showDBValue("agoria", $data, $keylink);
			$record["agoria_class"] = $pageObject->fieldClass("agoria");
//	koritsia - 
			$record["koritsia_value"] = $pageObject->showDBValue("koritsia", $data, $keylink);
			$record["koritsia_class"] = $pageObject->fieldClass("koritsia");
//	amiges - 
			$record["amiges_value"] = $pageObject->showDBValue("amiges", $data, $keylink);
			$record["amiges_class"] = $pageObject->fieldClass("amiges");
//	meet_day - 
			$record["meet_day_value"] = $pageObject->showDBValue("meet_day", $data, $keylink);
			$record["meet_day_class"] = $pageObject->fieldClass("meet_day");
//	meet_hour - 
			$record["meet_hour_value"] = $pageObject->showDBValue("meet_hour", $data, $keylink);
			$record["meet_hour_class"] = $pageObject->fieldClass("meet_hour");
//	meet_place - 
			$record["meet_place_value"] = $pageObject->showDBValue("meet_place", $data, $keylink);
			$record["meet_place_class"] = $pageObject->fieldClass("meet_place");
//	arxeio - 
			$record["arxeio_value"] = $pageObject->showDBValue("arxeio", $data, $keylink);
			$record["arxeio_class"] = $pageObject->fieldClass("arxeio");
//	ypothemata - 
			$record["ypothemata_value"] = $pageObject->showDBValue("ypothemata", $data, $keylink);
			$record["ypothemata_class"] = $pageObject->fieldClass("ypothemata");
//	stoxoi - 
			$record["stoxoi_value"] = $pageObject->showDBValue("stoxoi", $data, $keylink);
			$record["stoxoi_class"] = $pageObject->fieldClass("stoxoi");
//	methodologia - 
			$record["methodologia_value"] = $pageObject->showDBValue("methodologia", $data, $keylink);
			$record["methodologia_class"] = $pageObject->fieldClass("methodologia");
//	syndeseis - 
			$record["syndeseis_value"] = $pageObject->showDBValue("syndeseis", $data, $keylink);
			$record["syndeseis_class"] = $pageObject->fieldClass("syndeseis");
//	month1 - 
			$record["month1_value"] = $pageObject->showDBValue("month1", $data, $keylink);
			$record["month1_class"] = $pageObject->fieldClass("month1");
//	month2 - 
			$record["month2_value"] = $pageObject->showDBValue("month2", $data, $keylink);
			$record["month2_class"] = $pageObject->fieldClass("month2");
//	month3 - 
			$record["month3_value"] = $pageObject->showDBValue("month3", $data, $keylink);
			$record["month3_class"] = $pageObject->fieldClass("month3");
//	month4 - 
			$record["month4_value"] = $pageObject->showDBValue("month4", $data, $keylink);
			$record["month4_class"] = $pageObject->fieldClass("month4");
//	month5 - 
			$record["month5_value"] = $pageObject->showDBValue("month5", $data, $keylink);
			$record["month5_class"] = $pageObject->fieldClass("month5");
//	episkepseis - 
			$record["episkepseis_value"] = $pageObject->showDBValue("episkepseis", $data, $keylink);
			$record["episkepseis_class"] = $pageObject->fieldClass("episkepseis");
//	submission_date - 
			$record["submission_date_value"] = $pageObject->showDBValue("submission_date", $data, $keylink);
			$record["submission_date_class"] = $pageObject->fieldClass("submission_date");
//	last_modified_date - 
			$record["last_modified_date_value"] = $pageObject->showDBValue("last_modified_date", $data, $keylink);
			$record["last_modified_date_class"] = $pageObject->fieldClass("last_modified_date");
//	ip_address - 
			$record["ip_address_value"] = $pageObject->showDBValue("ip_address", $data, $keylink);
			$record["ip_address_class"] = $pageObject->fieldClass("ip_address");
//	is_finalized - 
			$record["is_finalized_value"] = $pageObject->showDBValue("is_finalized", $data, $keylink);
			$record["is_finalized_class"] = $pageObject->fieldClass("is_finalized");
//	sch_id - 
			$record["sch_id_value"] = $pageObject->showDBValue("sch_id", $data, $keylink);
			$record["sch_id_class"] = $pageObject->fieldClass("sch_id");
			if($col<$colsonpage)
				$record["endrecord_block"] = true;
			$record["grid_recordheader"] = true;
			$record["grid_vrecord"] = true;
			
			if($eventObj->exists("BeforeMoveNextPrint"))
				$eventObj->BeforeMoveNextPrint($data,$row,$record, $pageObject);
				
			$row["grid_record"]["data"][] = $record;
			
			if($eventObj->exists("ListFetchArray"))
				$data = $eventObj->ListFetchArray($rs, $pageObject);
			else
				$data = $cipherer->DecryptFetchedArray($rs);
				
			while($data)
			{
				if($eventObj->exists("BeforeProcessRowPrint"))
				{
					if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
					{
						if($eventObj->exists("ListFetchArray"))
							$data = $eventObj->ListFetchArray($rs, $pageObject);
						else
							$data = $cipherer->DecryptFetchedArray($rs);
						continue;
					}
				}
				break;
			}
		}
		if($col <= $colsonpage)
		{
			$row["grid_record"]["data"][count($row["grid_record"]["data"])-1]["endrecord_block"] = false;
		}
		$row["grid_rowspace"]=true;
		$row["grid_recordspace"] = array("data"=>array());
		for($i=0;$i<$colsonpage*2-1;$i++)
			$row["grid_recordspace"]["data"][]=true;
		
		$rowinfo["data"][]=$row;
		
		if($all && $records>=30)
		{
			$page=array("grid_row" =>$rowinfo);
			$page["pageno"]=$pageindex;
			$pageindex++;
			$pages[] = $page;
			$records=0;
			$rowinfo=array();
		}
		
	}
	if(count($rowinfo))
	{
		$page=array("grid_row" =>$rowinfo);
		if($all)
			$page["pageno"]=$pageindex;
		$pages[] = $page;
	}
	
	for($i=0;$i<count($pages);$i++)
	{
	 	if($i<count($pages)-1)
			$pages[$i]["begin"]="<div name=page class=printpage>";
		else
		    $pages[$i]["begin"]="<div name=page>";
			
		$pages[$i]["end"]="</div>";
	}

	$page = array();
	$page["data"] = &$pages;
	$xt->assignbyref("page",$page);

	

$strSQL = $_SESSION[$strTableName."_sql"];

$isPdfView = true;
$hasEvents = false;
if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
{
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
}

$pagename = $_SERVER["REQUEST_URI"];
if(!$pagename)
{
	$pagename=basename(__file__);
	$params = "";
	foreach($_GET as $k=>$v)
	{
		if(strlen($params))
			$params.="&";
		$params.=rawurlencode($k)."=".rawurlencode($v);
	}
	if(strlen($params))
		$pagename.="?".$params;
}
if(strpos($pagename,"?")===false)
	$pagename.="?pdf=1";
else
	$pagename.="&pdf=1";


if(!postvalue("pdf"))
{
		if(!GetGlobalData("openPDFFileDirectly", true))
		$pageObject->AddJSFile("include/pdf.js");
	else 
		$pageObject->AddJSFile("include/pdfinitlink.js");
	$xt->assign("pdflink_block",true);
	$pageObject->body["end"] .= "<script>
		var page = '".jsreplace($pagename)."';
		</script>";
}
//$pdf_block = array("begin"=>"<div id=progress>", "end"=>"</div>");
//if(count($pages))
//	$pages[0]["pdf_block"]=&$pdf_block;

if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);

$xt->assign("submited_fieldheadercolumn",true);
$xt->assign("submited_fieldheader",true);
$xt->assign("submited_fieldcolumn",true);
$xt->assign("submited_fieldfootercolumn",true);
$xt->assign("submission_id_fieldheadercolumn",true);
$xt->assign("submission_id_fieldheader",true);
$xt->assign("submission_id_fieldcolumn",true);
$xt->assign("submission_id_fieldfootercolumn",true);
$xt->assign("programa_fieldheadercolumn",true);
$xt->assign("programa_fieldheader",true);
$xt->assign("programa_fieldcolumn",true);
$xt->assign("programa_fieldfootercolumn",true);
$xt->assign("date_fieldheadercolumn",true);
$xt->assign("date_fieldheader",true);
$xt->assign("date_fieldcolumn",true);
$xt->assign("date_fieldfootercolumn",true);
$xt->assign("ar_protocol_fieldheadercolumn",true);
$xt->assign("ar_protocol_fieldheader",true);
$xt->assign("ar_protocol_fieldcolumn",true);
$xt->assign("ar_protocol_fieldfootercolumn",true);
$xt->assign("sxol_etos_fieldheadercolumn",true);
$xt->assign("sxol_etos_fieldheader",true);
$xt->assign("sxol_etos_fieldcolumn",true);
$xt->assign("sxol_etos_fieldfootercolumn",true);
$xt->assign("dide_name_fieldheadercolumn",true);
$xt->assign("dide_name_fieldheader",true);
$xt->assign("dide_name_fieldcolumn",true);
$xt->assign("dide_name_fieldfootercolumn",true);
$xt->assign("sch_name_fieldheadercolumn",true);
$xt->assign("sch_name_fieldheader",true);
$xt->assign("sch_name_fieldcolumn",true);
$xt->assign("sch_name_fieldfootercolumn",true);
$xt->assign("tel_ergasias_fieldheadercolumn",true);
$xt->assign("tel_ergasias_fieldheader",true);
$xt->assign("tel_ergasias_fieldcolumn",true);
$xt->assign("tel_ergasias_fieldfootercolumn",true);
$xt->assign("dimos_fieldheadercolumn",true);
$xt->assign("dimos_fieldheader",true);
$xt->assign("dimos_fieldcolumn",true);
$xt->assign("dimos_fieldfootercolumn",true);
$xt->assign("fax_fieldheadercolumn",true);
$xt->assign("fax_fieldheader",true);
$xt->assign("fax_fieldcolumn",true);
$xt->assign("fax_fieldfootercolumn",true);
$xt->assign("e_mail_fieldheadercolumn",true);
$xt->assign("e_mail_fieldheader",true);
$xt->assign("e_mail_fieldcolumn",true);
$xt->assign("e_mail_fieldfootercolumn",true);
$xt->assign("sch_teachers_fieldheadercolumn",true);
$xt->assign("sch_teachers_fieldheader",true);
$xt->assign("sch_teachers_fieldcolumn",true);
$xt->assign("sch_teachers_fieldfootercolumn",true);
$xt->assign("sch_students_fieldheadercolumn",true);
$xt->assign("sch_students_fieldheader",true);
$xt->assign("sch_students_fieldcolumn",true);
$xt->assign("sch_students_fieldfootercolumn",true);
$xt->assign("dieythintis_name_fieldheadercolumn",true);
$xt->assign("dieythintis_name_fieldheader",true);
$xt->assign("dieythintis_name_fieldcolumn",true);
$xt->assign("dieythintis_name_fieldfootercolumn",true);
$xt->assign("klados_dieythinti_fieldheadercolumn",true);
$xt->assign("klados_dieythinti_fieldheader",true);
$xt->assign("klados_dieythinti_fieldcolumn",true);
$xt->assign("klados_dieythinti_fieldfootercolumn",true);
$xt->assign("program_title_fieldheadercolumn",true);
$xt->assign("program_title_fieldheader",true);
$xt->assign("program_title_fieldcolumn",true);
$xt->assign("program_title_fieldfootercolumn",true);
$xt->assign("ar_praksis_fieldheadercolumn",true);
$xt->assign("ar_praksis_fieldheader",true);
$xt->assign("ar_praksis_fieldcolumn",true);
$xt->assign("ar_praksis_fieldfootercolumn",true);
$xt->assign("date_praksis_fieldheadercolumn",true);
$xt->assign("date_praksis_fieldheader",true);
$xt->assign("date_praksis_fieldcolumn",true);
$xt->assign("date_praksis_fieldfootercolumn",true);
$xt->assign("sch_orario_fieldheadercolumn",true);
$xt->assign("sch_orario_fieldheader",true);
$xt->assign("sch_orario_fieldcolumn",true);
$xt->assign("sch_orario_fieldfootercolumn",true);
$xt->assign("ypeythinos_name_fieldheadercolumn",true);
$xt->assign("ypeythinos_name_fieldheader",true);
$xt->assign("ypeythinos_name_fieldcolumn",true);
$xt->assign("ypeythinos_name_fieldfootercolumn",true);
$xt->assign("ypeythinos_amm_fieldheadercolumn",true);
$xt->assign("ypeythinos_amm_fieldheader",true);
$xt->assign("ypeythinos_amm_fieldcolumn",true);
$xt->assign("ypeythinos_amm_fieldfootercolumn",true);
$xt->assign("ypeythinos_klados_fieldheadercolumn",true);
$xt->assign("ypeythinos_klados_fieldheader",true);
$xt->assign("ypeythinos_klados_fieldcolumn",true);
$xt->assign("ypeythinos_klados_fieldfootercolumn",true);
$xt->assign("ypeythinos_wres_fieldheadercolumn",true);
$xt->assign("ypeythinos_wres_fieldheader",true);
$xt->assign("ypeythinos_wres_fieldcolumn",true);
$xt->assign("ypeythinos_wres_fieldfootercolumn",true);
$xt->assign("ypeythinos_again_fieldheadercolumn",true);
$xt->assign("ypeythinos_again_fieldheader",true);
$xt->assign("ypeythinos_again_fieldcolumn",true);
$xt->assign("ypeythinos_again_fieldfootercolumn",true);
$xt->assign("ypeythinos_epimorfosi_fieldheadercolumn",true);
$xt->assign("ypeythinos_epimorfosi_fieldheader",true);
$xt->assign("ypeythinos_epimorfosi_fieldcolumn",true);
$xt->assign("ypeythinos_epimorfosi_fieldfootercolumn",true);
$xt->assign("symetexwn1_name_fieldheadercolumn",true);
$xt->assign("symetexwn1_name_fieldheader",true);
$xt->assign("symetexwn1_name_fieldcolumn",true);
$xt->assign("symetexwn1_name_fieldfootercolumn",true);
$xt->assign("symetexwn1_amm_fieldheadercolumn",true);
$xt->assign("symetexwn1_amm_fieldheader",true);
$xt->assign("symetexwn1_amm_fieldcolumn",true);
$xt->assign("symetexwn1_amm_fieldfootercolumn",true);
$xt->assign("symetexwn1_klados_fieldheadercolumn",true);
$xt->assign("symetexwn1_klados_fieldheader",true);
$xt->assign("symetexwn1_klados_fieldcolumn",true);
$xt->assign("symetexwn1_klados_fieldfootercolumn",true);
$xt->assign("symetexwn1_wres_fieldheadercolumn",true);
$xt->assign("symetexwn1_wres_fieldheader",true);
$xt->assign("symetexwn1_wres_fieldcolumn",true);
$xt->assign("symetexwn1_wres_fieldfootercolumn",true);
$xt->assign("symetexwn1_again_fieldheadercolumn",true);
$xt->assign("symetexwn1_again_fieldheader",true);
$xt->assign("symetexwn1_again_fieldcolumn",true);
$xt->assign("symetexwn1_again_fieldfootercolumn",true);
$xt->assign("symetexwn1_epimorfosi_fieldheadercolumn",true);
$xt->assign("symetexwn1_epimorfosi_fieldheader",true);
$xt->assign("symetexwn1_epimorfosi_fieldcolumn",true);
$xt->assign("symetexwn1_epimorfosi_fieldfootercolumn",true);
$xt->assign("symetexwn2_name_fieldheadercolumn",true);
$xt->assign("symetexwn2_name_fieldheader",true);
$xt->assign("symetexwn2_name_fieldcolumn",true);
$xt->assign("symetexwn2_name_fieldfootercolumn",true);
$xt->assign("symetexwn2_amm_fieldheadercolumn",true);
$xt->assign("symetexwn2_amm_fieldheader",true);
$xt->assign("symetexwn2_amm_fieldcolumn",true);
$xt->assign("symetexwn2_amm_fieldfootercolumn",true);
$xt->assign("symetexwn2_klados_fieldheadercolumn",true);
$xt->assign("symetexwn2_klados_fieldheader",true);
$xt->assign("symetexwn2_klados_fieldcolumn",true);
$xt->assign("symetexwn2_klados_fieldfootercolumn",true);
$xt->assign("symetexwn2_wres_fieldheadercolumn",true);
$xt->assign("symetexwn2_wres_fieldheader",true);
$xt->assign("symetexwn2_wres_fieldcolumn",true);
$xt->assign("symetexwn2_wres_fieldfootercolumn",true);
$xt->assign("symetexwn2_again_fieldheadercolumn",true);
$xt->assign("symetexwn2_again_fieldheader",true);
$xt->assign("symetexwn2_again_fieldcolumn",true);
$xt->assign("symetexwn2_again_fieldfootercolumn",true);
$xt->assign("symetexwn2_epimorfosi_fieldheadercolumn",true);
$xt->assign("symetexwn2_epimorfosi_fieldheader",true);
$xt->assign("symetexwn2_epimorfosi_fieldcolumn",true);
$xt->assign("symetexwn2_epimorfosi_fieldfootercolumn",true);
$xt->assign("symetexwn3_name_fieldheadercolumn",true);
$xt->assign("symetexwn3_name_fieldheader",true);
$xt->assign("symetexwn3_name_fieldcolumn",true);
$xt->assign("symetexwn3_name_fieldfootercolumn",true);
$xt->assign("symetexwn3_amm_fieldheadercolumn",true);
$xt->assign("symetexwn3_amm_fieldheader",true);
$xt->assign("symetexwn3_amm_fieldcolumn",true);
$xt->assign("symetexwn3_amm_fieldfootercolumn",true);
$xt->assign("symetexwn3_klados_fieldheadercolumn",true);
$xt->assign("symetexwn3_klados_fieldheader",true);
$xt->assign("symetexwn3_klados_fieldcolumn",true);
$xt->assign("symetexwn3_klados_fieldfootercolumn",true);
$xt->assign("symetexwn3_wres_fieldheadercolumn",true);
$xt->assign("symetexwn3_wres_fieldheader",true);
$xt->assign("symetexwn3_wres_fieldcolumn",true);
$xt->assign("symetexwn3_wres_fieldfootercolumn",true);
$xt->assign("symetexwn3_again_fieldheadercolumn",true);
$xt->assign("symetexwn3_again_fieldheader",true);
$xt->assign("symetexwn3_again_fieldcolumn",true);
$xt->assign("symetexwn3_again_fieldfootercolumn",true);
$xt->assign("symetexwn3_epimorfosi_fieldheadercolumn",true);
$xt->assign("symetexwn3_epimorfosi_fieldheader",true);
$xt->assign("symetexwn3_epimorfosi_fieldcolumn",true);
$xt->assign("symetexwn3_epimorfosi_fieldfootercolumn",true);
$xt->assign("mathites_synolo_fieldheadercolumn",true);
$xt->assign("mathites_synolo_fieldheader",true);
$xt->assign("mathites_synolo_fieldcolumn",true);
$xt->assign("mathites_synolo_fieldfootercolumn",true);
$xt->assign("agoria_fieldheadercolumn",true);
$xt->assign("agoria_fieldheader",true);
$xt->assign("agoria_fieldcolumn",true);
$xt->assign("agoria_fieldfootercolumn",true);
$xt->assign("koritsia_fieldheadercolumn",true);
$xt->assign("koritsia_fieldheader",true);
$xt->assign("koritsia_fieldcolumn",true);
$xt->assign("koritsia_fieldfootercolumn",true);
$xt->assign("amiges_fieldheadercolumn",true);
$xt->assign("amiges_fieldheader",true);
$xt->assign("amiges_fieldcolumn",true);
$xt->assign("amiges_fieldfootercolumn",true);
$xt->assign("meet_day_fieldheadercolumn",true);
$xt->assign("meet_day_fieldheader",true);
$xt->assign("meet_day_fieldcolumn",true);
$xt->assign("meet_day_fieldfootercolumn",true);
$xt->assign("meet_hour_fieldheadercolumn",true);
$xt->assign("meet_hour_fieldheader",true);
$xt->assign("meet_hour_fieldcolumn",true);
$xt->assign("meet_hour_fieldfootercolumn",true);
$xt->assign("meet_place_fieldheadercolumn",true);
$xt->assign("meet_place_fieldheader",true);
$xt->assign("meet_place_fieldcolumn",true);
$xt->assign("meet_place_fieldfootercolumn",true);
$xt->assign("arxeio_fieldheadercolumn",true);
$xt->assign("arxeio_fieldheader",true);
$xt->assign("arxeio_fieldcolumn",true);
$xt->assign("arxeio_fieldfootercolumn",true);
$xt->assign("ypothemata_fieldheadercolumn",true);
$xt->assign("ypothemata_fieldheader",true);
$xt->assign("ypothemata_fieldcolumn",true);
$xt->assign("ypothemata_fieldfootercolumn",true);
$xt->assign("stoxoi_fieldheadercolumn",true);
$xt->assign("stoxoi_fieldheader",true);
$xt->assign("stoxoi_fieldcolumn",true);
$xt->assign("stoxoi_fieldfootercolumn",true);
$xt->assign("methodologia_fieldheadercolumn",true);
$xt->assign("methodologia_fieldheader",true);
$xt->assign("methodologia_fieldcolumn",true);
$xt->assign("methodologia_fieldfootercolumn",true);
$xt->assign("syndeseis_fieldheadercolumn",true);
$xt->assign("syndeseis_fieldheader",true);
$xt->assign("syndeseis_fieldcolumn",true);
$xt->assign("syndeseis_fieldfootercolumn",true);
$xt->assign("month1_fieldheadercolumn",true);
$xt->assign("month1_fieldheader",true);
$xt->assign("month1_fieldcolumn",true);
$xt->assign("month1_fieldfootercolumn",true);
$xt->assign("month2_fieldheadercolumn",true);
$xt->assign("month2_fieldheader",true);
$xt->assign("month2_fieldcolumn",true);
$xt->assign("month2_fieldfootercolumn",true);
$xt->assign("month3_fieldheadercolumn",true);
$xt->assign("month3_fieldheader",true);
$xt->assign("month3_fieldcolumn",true);
$xt->assign("month3_fieldfootercolumn",true);
$xt->assign("month4_fieldheadercolumn",true);
$xt->assign("month4_fieldheader",true);
$xt->assign("month4_fieldcolumn",true);
$xt->assign("month4_fieldfootercolumn",true);
$xt->assign("month5_fieldheadercolumn",true);
$xt->assign("month5_fieldheader",true);
$xt->assign("month5_fieldcolumn",true);
$xt->assign("month5_fieldfootercolumn",true);
$xt->assign("episkepseis_fieldheadercolumn",true);
$xt->assign("episkepseis_fieldheader",true);
$xt->assign("episkepseis_fieldcolumn",true);
$xt->assign("episkepseis_fieldfootercolumn",true);
$xt->assign("submission_date_fieldheadercolumn",true);
$xt->assign("submission_date_fieldheader",true);
$xt->assign("submission_date_fieldcolumn",true);
$xt->assign("submission_date_fieldfootercolumn",true);
$xt->assign("last_modified_date_fieldheadercolumn",true);
$xt->assign("last_modified_date_fieldheader",true);
$xt->assign("last_modified_date_fieldcolumn",true);
$xt->assign("last_modified_date_fieldfootercolumn",true);
$xt->assign("ip_address_fieldheadercolumn",true);
$xt->assign("ip_address_fieldheader",true);
$xt->assign("ip_address_fieldcolumn",true);
$xt->assign("ip_address_fieldfootercolumn",true);
$xt->assign("is_finalized_fieldheadercolumn",true);
$xt->assign("is_finalized_fieldheader",true);
$xt->assign("is_finalized_fieldcolumn",true);
$xt->assign("is_finalized_fieldfootercolumn",true);
$xt->assign("sch_id_fieldheadercolumn",true);
$xt->assign("sch_id_fieldheader",true);
$xt->assign("sch_id_fieldcolumn",true);
$xt->assign("sch_id_fieldfootercolumn",true);

	$record_header=array("data"=>array());
	$record_footer=array("data"=>array());
	for($i=0;$i<$colsonpage;$i++)
	{
		$rheader=array();
		$rfooter=array();
		if($i<$colsonpage-1)
		{
			$rheader["endrecordheader_block"]=true;
			$rfooter["endrecordheader_block"]=true;
		}
		$record_header["data"][]=$rheader;
		$record_footer["data"][]=$rfooter;
	}
	$xt->assignbyref("record_header",$record_header);
	$xt->assignbyref("record_footer",$record_footer);
	$xt->assign("grid_header",true);
	$xt->assign("grid_footer",true);

if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$pageObject->templatefile, $pageObject);

if(!postvalue("pdf"))
	$xt->display($pageObject->templatefile);
else
{
	$xt->load_template($pageObject->templatefile);
	$page = $xt->fetch_loaded();
	$pagewidth=postvalue("width")*1.05;
	$pageheight=postvalue("height")*1.05;
	$landscape=false;
		if($pagewidth>$pageheight)
		{
			$landscape=true;
			if($pagewidth/$pageheight<297/210)
				$pagewidth = 297/210*$pageheight;
		}
		else
		{
			if($pagewidth/$pageheight<210/297)
				$pagewidth = 210/297*$pageheight;
		}
	include("plugins/page2pdf.php");
}
?>
