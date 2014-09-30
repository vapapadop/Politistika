<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/FINAL_STOPED_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["pdf"] = array();

$layout->containers["pdf"][] = array("name"=>"viewpdf","block"=>"","substyle"=>1);


$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["FINAL_STOPED_view"] = $layout;




//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: FINAL_STOPED_list.php?a=return");
	exit();
}

$out = "";
$first = true;
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

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("submission_id", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["submission_id"]));

////////////////////////////////////////////
//submission_id - 
	
	$value = $pageObject->showDBValue("submission_id", $data, $keylink);
	if($mainTableOwnerID=="submission_id")
		$ownerIdValue=$value;
	$xt->assign("submission_id_value",$value);
	if(!$pageObject->isAppearOnTabs("submission_id"))
		$xt->assign("submission_id_fieldblock",true);
	else
		$xt->assign("submission_id_tabfieldblock",true);
////////////////////////////////////////////
//programa - 
	
	$value = $pageObject->showDBValue("programa", $data, $keylink);
	if($mainTableOwnerID=="programa")
		$ownerIdValue=$value;
	$xt->assign("programa_value",$value);
	if(!$pageObject->isAppearOnTabs("programa"))
		$xt->assign("programa_fieldblock",true);
	else
		$xt->assign("programa_tabfieldblock",true);
////////////////////////////////////////////
//date - 
	
	$value = $pageObject->showDBValue("date", $data, $keylink);
	if($mainTableOwnerID=="date")
		$ownerIdValue=$value;
	$xt->assign("date_value",$value);
	if(!$pageObject->isAppearOnTabs("date"))
		$xt->assign("date_fieldblock",true);
	else
		$xt->assign("date_tabfieldblock",true);
////////////////////////////////////////////
//ar_protocol - 
	
	$value = $pageObject->showDBValue("ar_protocol", $data, $keylink);
	if($mainTableOwnerID=="ar_protocol")
		$ownerIdValue=$value;
	$xt->assign("ar_protocol_value",$value);
	if(!$pageObject->isAppearOnTabs("ar_protocol"))
		$xt->assign("ar_protocol_fieldblock",true);
	else
		$xt->assign("ar_protocol_tabfieldblock",true);
////////////////////////////////////////////
//sxol_etos - 
	
	$value = $pageObject->showDBValue("sxol_etos", $data, $keylink);
	if($mainTableOwnerID=="sxol_etos")
		$ownerIdValue=$value;
	$xt->assign("sxol_etos_value",$value);
	if(!$pageObject->isAppearOnTabs("sxol_etos"))
		$xt->assign("sxol_etos_fieldblock",true);
	else
		$xt->assign("sxol_etos_tabfieldblock",true);
////////////////////////////////////////////
//dide_name - 
	
	$value = $pageObject->showDBValue("dide_name", $data, $keylink);
	if($mainTableOwnerID=="dide_name")
		$ownerIdValue=$value;
	$xt->assign("dide_name_value",$value);
	if(!$pageObject->isAppearOnTabs("dide_name"))
		$xt->assign("dide_name_fieldblock",true);
	else
		$xt->assign("dide_name_tabfieldblock",true);
////////////////////////////////////////////
//sch_name - 
	
	$value = $pageObject->showDBValue("sch_name", $data, $keylink);
	if($mainTableOwnerID=="sch_name")
		$ownerIdValue=$value;
	$xt->assign("sch_name_value",$value);
	if(!$pageObject->isAppearOnTabs("sch_name"))
		$xt->assign("sch_name_fieldblock",true);
	else
		$xt->assign("sch_name_tabfieldblock",true);
////////////////////////////////////////////
//tel_ergasias - 
	
	$value = $pageObject->showDBValue("tel_ergasias", $data, $keylink);
	if($mainTableOwnerID=="tel_ergasias")
		$ownerIdValue=$value;
	$xt->assign("tel_ergasias_value",$value);
	if(!$pageObject->isAppearOnTabs("tel_ergasias"))
		$xt->assign("tel_ergasias_fieldblock",true);
	else
		$xt->assign("tel_ergasias_tabfieldblock",true);
////////////////////////////////////////////
//dimos - 
	
	$value = $pageObject->showDBValue("dimos", $data, $keylink);
	if($mainTableOwnerID=="dimos")
		$ownerIdValue=$value;
	$xt->assign("dimos_value",$value);
	if(!$pageObject->isAppearOnTabs("dimos"))
		$xt->assign("dimos_fieldblock",true);
	else
		$xt->assign("dimos_tabfieldblock",true);
////////////////////////////////////////////
//fax - 
	
	$value = $pageObject->showDBValue("fax", $data, $keylink);
	if($mainTableOwnerID=="fax")
		$ownerIdValue=$value;
	$xt->assign("fax_value",$value);
	if(!$pageObject->isAppearOnTabs("fax"))
		$xt->assign("fax_fieldblock",true);
	else
		$xt->assign("fax_tabfieldblock",true);
////////////////////////////////////////////
//e_mail - 
	
	$value = $pageObject->showDBValue("e_mail", $data, $keylink);
	if($mainTableOwnerID=="e_mail")
		$ownerIdValue=$value;
	$xt->assign("e_mail_value",$value);
	if(!$pageObject->isAppearOnTabs("e_mail"))
		$xt->assign("e_mail_fieldblock",true);
	else
		$xt->assign("e_mail_tabfieldblock",true);
////////////////////////////////////////////
//sch_teachers - 
	
	$value = $pageObject->showDBValue("sch_teachers", $data, $keylink);
	if($mainTableOwnerID=="sch_teachers")
		$ownerIdValue=$value;
	$xt->assign("sch_teachers_value",$value);
	if(!$pageObject->isAppearOnTabs("sch_teachers"))
		$xt->assign("sch_teachers_fieldblock",true);
	else
		$xt->assign("sch_teachers_tabfieldblock",true);
////////////////////////////////////////////
//sch_students - 
	
	$value = $pageObject->showDBValue("sch_students", $data, $keylink);
	if($mainTableOwnerID=="sch_students")
		$ownerIdValue=$value;
	$xt->assign("sch_students_value",$value);
	if(!$pageObject->isAppearOnTabs("sch_students"))
		$xt->assign("sch_students_fieldblock",true);
	else
		$xt->assign("sch_students_tabfieldblock",true);
////////////////////////////////////////////
//dieythintis_name - 
	
	$value = $pageObject->showDBValue("dieythintis_name", $data, $keylink);
	if($mainTableOwnerID=="dieythintis_name")
		$ownerIdValue=$value;
	$xt->assign("dieythintis_name_value",$value);
	if(!$pageObject->isAppearOnTabs("dieythintis_name"))
		$xt->assign("dieythintis_name_fieldblock",true);
	else
		$xt->assign("dieythintis_name_tabfieldblock",true);
////////////////////////////////////////////
//klados_dieythinti - 
	
	$value = $pageObject->showDBValue("klados_dieythinti", $data, $keylink);
	if($mainTableOwnerID=="klados_dieythinti")
		$ownerIdValue=$value;
	$xt->assign("klados_dieythinti_value",$value);
	if(!$pageObject->isAppearOnTabs("klados_dieythinti"))
		$xt->assign("klados_dieythinti_fieldblock",true);
	else
		$xt->assign("klados_dieythinti_tabfieldblock",true);
////////////////////////////////////////////
//program_title - 
	
	$value = $pageObject->showDBValue("program_title", $data, $keylink);
	if($mainTableOwnerID=="program_title")
		$ownerIdValue=$value;
	$xt->assign("program_title_value",$value);
	if(!$pageObject->isAppearOnTabs("program_title"))
		$xt->assign("program_title_fieldblock",true);
	else
		$xt->assign("program_title_tabfieldblock",true);
////////////////////////////////////////////
//ar_praksis - 
	
	$value = $pageObject->showDBValue("ar_praksis", $data, $keylink);
	if($mainTableOwnerID=="ar_praksis")
		$ownerIdValue=$value;
	$xt->assign("ar_praksis_value",$value);
	if(!$pageObject->isAppearOnTabs("ar_praksis"))
		$xt->assign("ar_praksis_fieldblock",true);
	else
		$xt->assign("ar_praksis_tabfieldblock",true);
////////////////////////////////////////////
//date_praksis - 
	
	$value = $pageObject->showDBValue("date_praksis", $data, $keylink);
	if($mainTableOwnerID=="date_praksis")
		$ownerIdValue=$value;
	$xt->assign("date_praksis_value",$value);
	if(!$pageObject->isAppearOnTabs("date_praksis"))
		$xt->assign("date_praksis_fieldblock",true);
	else
		$xt->assign("date_praksis_tabfieldblock",true);
////////////////////////////////////////////
//sch_orario - 
	
	$value = $pageObject->showDBValue("sch_orario", $data, $keylink);
	if($mainTableOwnerID=="sch_orario")
		$ownerIdValue=$value;
	$xt->assign("sch_orario_value",$value);
	if(!$pageObject->isAppearOnTabs("sch_orario"))
		$xt->assign("sch_orario_fieldblock",true);
	else
		$xt->assign("sch_orario_tabfieldblock",true);
////////////////////////////////////////////
//ypeythinos_name - 
	
	$value = $pageObject->showDBValue("ypeythinos_name", $data, $keylink);
	if($mainTableOwnerID=="ypeythinos_name")
		$ownerIdValue=$value;
	$xt->assign("ypeythinos_name_value",$value);
	if(!$pageObject->isAppearOnTabs("ypeythinos_name"))
		$xt->assign("ypeythinos_name_fieldblock",true);
	else
		$xt->assign("ypeythinos_name_tabfieldblock",true);
////////////////////////////////////////////
//ypeythinos_amm - 
	
	$value = $pageObject->showDBValue("ypeythinos_amm", $data, $keylink);
	if($mainTableOwnerID=="ypeythinos_amm")
		$ownerIdValue=$value;
	$xt->assign("ypeythinos_amm_value",$value);
	if(!$pageObject->isAppearOnTabs("ypeythinos_amm"))
		$xt->assign("ypeythinos_amm_fieldblock",true);
	else
		$xt->assign("ypeythinos_amm_tabfieldblock",true);
////////////////////////////////////////////
//ypeythinos_klados - 
	
	$value = $pageObject->showDBValue("ypeythinos_klados", $data, $keylink);
	if($mainTableOwnerID=="ypeythinos_klados")
		$ownerIdValue=$value;
	$xt->assign("ypeythinos_klados_value",$value);
	if(!$pageObject->isAppearOnTabs("ypeythinos_klados"))
		$xt->assign("ypeythinos_klados_fieldblock",true);
	else
		$xt->assign("ypeythinos_klados_tabfieldblock",true);
////////////////////////////////////////////
//ypeythinos_wres - 
	
	$value = $pageObject->showDBValue("ypeythinos_wres", $data, $keylink);
	if($mainTableOwnerID=="ypeythinos_wres")
		$ownerIdValue=$value;
	$xt->assign("ypeythinos_wres_value",$value);
	if(!$pageObject->isAppearOnTabs("ypeythinos_wres"))
		$xt->assign("ypeythinos_wres_fieldblock",true);
	else
		$xt->assign("ypeythinos_wres_tabfieldblock",true);
////////////////////////////////////////////
//ypeythinos_again - 
	
	$value = $pageObject->showDBValue("ypeythinos_again", $data, $keylink);
	if($mainTableOwnerID=="ypeythinos_again")
		$ownerIdValue=$value;
	$xt->assign("ypeythinos_again_value",$value);
	if(!$pageObject->isAppearOnTabs("ypeythinos_again"))
		$xt->assign("ypeythinos_again_fieldblock",true);
	else
		$xt->assign("ypeythinos_again_tabfieldblock",true);
////////////////////////////////////////////
//ypeythinos_epimorfosi - 
	
	$value = $pageObject->showDBValue("ypeythinos_epimorfosi", $data, $keylink);
	if($mainTableOwnerID=="ypeythinos_epimorfosi")
		$ownerIdValue=$value;
	$xt->assign("ypeythinos_epimorfosi_value",$value);
	if(!$pageObject->isAppearOnTabs("ypeythinos_epimorfosi"))
		$xt->assign("ypeythinos_epimorfosi_fieldblock",true);
	else
		$xt->assign("ypeythinos_epimorfosi_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn1_name - 
	
	$value = $pageObject->showDBValue("symetexwn1_name", $data, $keylink);
	if($mainTableOwnerID=="symetexwn1_name")
		$ownerIdValue=$value;
	$xt->assign("symetexwn1_name_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn1_name"))
		$xt->assign("symetexwn1_name_fieldblock",true);
	else
		$xt->assign("symetexwn1_name_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn1_amm - 
	
	$value = $pageObject->showDBValue("symetexwn1_amm", $data, $keylink);
	if($mainTableOwnerID=="symetexwn1_amm")
		$ownerIdValue=$value;
	$xt->assign("symetexwn1_amm_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn1_amm"))
		$xt->assign("symetexwn1_amm_fieldblock",true);
	else
		$xt->assign("symetexwn1_amm_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn1_klados - 
	
	$value = $pageObject->showDBValue("symetexwn1_klados", $data, $keylink);
	if($mainTableOwnerID=="symetexwn1_klados")
		$ownerIdValue=$value;
	$xt->assign("symetexwn1_klados_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn1_klados"))
		$xt->assign("symetexwn1_klados_fieldblock",true);
	else
		$xt->assign("symetexwn1_klados_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn1_wres - 
	
	$value = $pageObject->showDBValue("symetexwn1_wres", $data, $keylink);
	if($mainTableOwnerID=="symetexwn1_wres")
		$ownerIdValue=$value;
	$xt->assign("symetexwn1_wres_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn1_wres"))
		$xt->assign("symetexwn1_wres_fieldblock",true);
	else
		$xt->assign("symetexwn1_wres_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn1_again - 
	
	$value = $pageObject->showDBValue("symetexwn1_again", $data, $keylink);
	if($mainTableOwnerID=="symetexwn1_again")
		$ownerIdValue=$value;
	$xt->assign("symetexwn1_again_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn1_again"))
		$xt->assign("symetexwn1_again_fieldblock",true);
	else
		$xt->assign("symetexwn1_again_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn1_epimorfosi - 
	
	$value = $pageObject->showDBValue("symetexwn1_epimorfosi", $data, $keylink);
	if($mainTableOwnerID=="symetexwn1_epimorfosi")
		$ownerIdValue=$value;
	$xt->assign("symetexwn1_epimorfosi_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn1_epimorfosi"))
		$xt->assign("symetexwn1_epimorfosi_fieldblock",true);
	else
		$xt->assign("symetexwn1_epimorfosi_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn2_name - 
	
	$value = $pageObject->showDBValue("symetexwn2_name", $data, $keylink);
	if($mainTableOwnerID=="symetexwn2_name")
		$ownerIdValue=$value;
	$xt->assign("symetexwn2_name_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn2_name"))
		$xt->assign("symetexwn2_name_fieldblock",true);
	else
		$xt->assign("symetexwn2_name_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn2_amm - 
	
	$value = $pageObject->showDBValue("symetexwn2_amm", $data, $keylink);
	if($mainTableOwnerID=="symetexwn2_amm")
		$ownerIdValue=$value;
	$xt->assign("symetexwn2_amm_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn2_amm"))
		$xt->assign("symetexwn2_amm_fieldblock",true);
	else
		$xt->assign("symetexwn2_amm_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn2_klados - 
	
	$value = $pageObject->showDBValue("symetexwn2_klados", $data, $keylink);
	if($mainTableOwnerID=="symetexwn2_klados")
		$ownerIdValue=$value;
	$xt->assign("symetexwn2_klados_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn2_klados"))
		$xt->assign("symetexwn2_klados_fieldblock",true);
	else
		$xt->assign("symetexwn2_klados_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn2_wres - 
	
	$value = $pageObject->showDBValue("symetexwn2_wres", $data, $keylink);
	if($mainTableOwnerID=="symetexwn2_wres")
		$ownerIdValue=$value;
	$xt->assign("symetexwn2_wres_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn2_wres"))
		$xt->assign("symetexwn2_wres_fieldblock",true);
	else
		$xt->assign("symetexwn2_wres_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn2_again - 
	
	$value = $pageObject->showDBValue("symetexwn2_again", $data, $keylink);
	if($mainTableOwnerID=="symetexwn2_again")
		$ownerIdValue=$value;
	$xt->assign("symetexwn2_again_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn2_again"))
		$xt->assign("symetexwn2_again_fieldblock",true);
	else
		$xt->assign("symetexwn2_again_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn2_epimorfosi - 
	
	$value = $pageObject->showDBValue("symetexwn2_epimorfosi", $data, $keylink);
	if($mainTableOwnerID=="symetexwn2_epimorfosi")
		$ownerIdValue=$value;
	$xt->assign("symetexwn2_epimorfosi_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn2_epimorfosi"))
		$xt->assign("symetexwn2_epimorfosi_fieldblock",true);
	else
		$xt->assign("symetexwn2_epimorfosi_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn3_name - 
	
	$value = $pageObject->showDBValue("symetexwn3_name", $data, $keylink);
	if($mainTableOwnerID=="symetexwn3_name")
		$ownerIdValue=$value;
	$xt->assign("symetexwn3_name_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn3_name"))
		$xt->assign("symetexwn3_name_fieldblock",true);
	else
		$xt->assign("symetexwn3_name_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn3_amm - 
	
	$value = $pageObject->showDBValue("symetexwn3_amm", $data, $keylink);
	if($mainTableOwnerID=="symetexwn3_amm")
		$ownerIdValue=$value;
	$xt->assign("symetexwn3_amm_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn3_amm"))
		$xt->assign("symetexwn3_amm_fieldblock",true);
	else
		$xt->assign("symetexwn3_amm_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn3_klados - 
	
	$value = $pageObject->showDBValue("symetexwn3_klados", $data, $keylink);
	if($mainTableOwnerID=="symetexwn3_klados")
		$ownerIdValue=$value;
	$xt->assign("symetexwn3_klados_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn3_klados"))
		$xt->assign("symetexwn3_klados_fieldblock",true);
	else
		$xt->assign("symetexwn3_klados_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn3_wres - 
	
	$value = $pageObject->showDBValue("symetexwn3_wres", $data, $keylink);
	if($mainTableOwnerID=="symetexwn3_wres")
		$ownerIdValue=$value;
	$xt->assign("symetexwn3_wres_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn3_wres"))
		$xt->assign("symetexwn3_wres_fieldblock",true);
	else
		$xt->assign("symetexwn3_wres_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn3_again - 
	
	$value = $pageObject->showDBValue("symetexwn3_again", $data, $keylink);
	if($mainTableOwnerID=="symetexwn3_again")
		$ownerIdValue=$value;
	$xt->assign("symetexwn3_again_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn3_again"))
		$xt->assign("symetexwn3_again_fieldblock",true);
	else
		$xt->assign("symetexwn3_again_tabfieldblock",true);
////////////////////////////////////////////
//symetexwn3_epimorfosi - 
	
	$value = $pageObject->showDBValue("symetexwn3_epimorfosi", $data, $keylink);
	if($mainTableOwnerID=="symetexwn3_epimorfosi")
		$ownerIdValue=$value;
	$xt->assign("symetexwn3_epimorfosi_value",$value);
	if(!$pageObject->isAppearOnTabs("symetexwn3_epimorfosi"))
		$xt->assign("symetexwn3_epimorfosi_fieldblock",true);
	else
		$xt->assign("symetexwn3_epimorfosi_tabfieldblock",true);
////////////////////////////////////////////
//mathites_synolo - 
	
	$value = $pageObject->showDBValue("mathites_synolo", $data, $keylink);
	if($mainTableOwnerID=="mathites_synolo")
		$ownerIdValue=$value;
	$xt->assign("mathites_synolo_value",$value);
	if(!$pageObject->isAppearOnTabs("mathites_synolo"))
		$xt->assign("mathites_synolo_fieldblock",true);
	else
		$xt->assign("mathites_synolo_tabfieldblock",true);
////////////////////////////////////////////
//agoria - 
	
	$value = $pageObject->showDBValue("agoria", $data, $keylink);
	if($mainTableOwnerID=="agoria")
		$ownerIdValue=$value;
	$xt->assign("agoria_value",$value);
	if(!$pageObject->isAppearOnTabs("agoria"))
		$xt->assign("agoria_fieldblock",true);
	else
		$xt->assign("agoria_tabfieldblock",true);
////////////////////////////////////////////
//koritsia - 
	
	$value = $pageObject->showDBValue("koritsia", $data, $keylink);
	if($mainTableOwnerID=="koritsia")
		$ownerIdValue=$value;
	$xt->assign("koritsia_value",$value);
	if(!$pageObject->isAppearOnTabs("koritsia"))
		$xt->assign("koritsia_fieldblock",true);
	else
		$xt->assign("koritsia_tabfieldblock",true);
////////////////////////////////////////////
//amiges - 
	
	$value = $pageObject->showDBValue("amiges", $data, $keylink);
	if($mainTableOwnerID=="amiges")
		$ownerIdValue=$value;
	$xt->assign("amiges_value",$value);
	if(!$pageObject->isAppearOnTabs("amiges"))
		$xt->assign("amiges_fieldblock",true);
	else
		$xt->assign("amiges_tabfieldblock",true);
////////////////////////////////////////////
//meet_day - 
	
	$value = $pageObject->showDBValue("meet_day", $data, $keylink);
	if($mainTableOwnerID=="meet_day")
		$ownerIdValue=$value;
	$xt->assign("meet_day_value",$value);
	if(!$pageObject->isAppearOnTabs("meet_day"))
		$xt->assign("meet_day_fieldblock",true);
	else
		$xt->assign("meet_day_tabfieldblock",true);
////////////////////////////////////////////
//meet_hour - 
	
	$value = $pageObject->showDBValue("meet_hour", $data, $keylink);
	if($mainTableOwnerID=="meet_hour")
		$ownerIdValue=$value;
	$xt->assign("meet_hour_value",$value);
	if(!$pageObject->isAppearOnTabs("meet_hour"))
		$xt->assign("meet_hour_fieldblock",true);
	else
		$xt->assign("meet_hour_tabfieldblock",true);
////////////////////////////////////////////
//meet_place - 
	
	$value = $pageObject->showDBValue("meet_place", $data, $keylink);
	if($mainTableOwnerID=="meet_place")
		$ownerIdValue=$value;
	$xt->assign("meet_place_value",$value);
	if(!$pageObject->isAppearOnTabs("meet_place"))
		$xt->assign("meet_place_fieldblock",true);
	else
		$xt->assign("meet_place_tabfieldblock",true);
////////////////////////////////////////////
//arxeio - 
	
	$value = $pageObject->showDBValue("arxeio", $data, $keylink);
	if($mainTableOwnerID=="arxeio")
		$ownerIdValue=$value;
	$xt->assign("arxeio_value",$value);
	if(!$pageObject->isAppearOnTabs("arxeio"))
		$xt->assign("arxeio_fieldblock",true);
	else
		$xt->assign("arxeio_tabfieldblock",true);
////////////////////////////////////////////
//ypothemata - 
	
	$value = $pageObject->showDBValue("ypothemata", $data, $keylink);
	if($mainTableOwnerID=="ypothemata")
		$ownerIdValue=$value;
	$xt->assign("ypothemata_value",$value);
	if(!$pageObject->isAppearOnTabs("ypothemata"))
		$xt->assign("ypothemata_fieldblock",true);
	else
		$xt->assign("ypothemata_tabfieldblock",true);
////////////////////////////////////////////
//stoxoi - 
	
	$value = $pageObject->showDBValue("stoxoi", $data, $keylink);
	if($mainTableOwnerID=="stoxoi")
		$ownerIdValue=$value;
	$xt->assign("stoxoi_value",$value);
	if(!$pageObject->isAppearOnTabs("stoxoi"))
		$xt->assign("stoxoi_fieldblock",true);
	else
		$xt->assign("stoxoi_tabfieldblock",true);
////////////////////////////////////////////
//methodologia - 
	
	$value = $pageObject->showDBValue("methodologia", $data, $keylink);
	if($mainTableOwnerID=="methodologia")
		$ownerIdValue=$value;
	$xt->assign("methodologia_value",$value);
	if(!$pageObject->isAppearOnTabs("methodologia"))
		$xt->assign("methodologia_fieldblock",true);
	else
		$xt->assign("methodologia_tabfieldblock",true);
////////////////////////////////////////////
//syndeseis - 
	
	$value = $pageObject->showDBValue("syndeseis", $data, $keylink);
	if($mainTableOwnerID=="syndeseis")
		$ownerIdValue=$value;
	$xt->assign("syndeseis_value",$value);
	if(!$pageObject->isAppearOnTabs("syndeseis"))
		$xt->assign("syndeseis_fieldblock",true);
	else
		$xt->assign("syndeseis_tabfieldblock",true);
////////////////////////////////////////////
//month1 - 
	
	$value = $pageObject->showDBValue("month1", $data, $keylink);
	if($mainTableOwnerID=="month1")
		$ownerIdValue=$value;
	$xt->assign("month1_value",$value);
	if(!$pageObject->isAppearOnTabs("month1"))
		$xt->assign("month1_fieldblock",true);
	else
		$xt->assign("month1_tabfieldblock",true);
////////////////////////////////////////////
//month2 - 
	
	$value = $pageObject->showDBValue("month2", $data, $keylink);
	if($mainTableOwnerID=="month2")
		$ownerIdValue=$value;
	$xt->assign("month2_value",$value);
	if(!$pageObject->isAppearOnTabs("month2"))
		$xt->assign("month2_fieldblock",true);
	else
		$xt->assign("month2_tabfieldblock",true);
////////////////////////////////////////////
//month3 - 
	
	$value = $pageObject->showDBValue("month3", $data, $keylink);
	if($mainTableOwnerID=="month3")
		$ownerIdValue=$value;
	$xt->assign("month3_value",$value);
	if(!$pageObject->isAppearOnTabs("month3"))
		$xt->assign("month3_fieldblock",true);
	else
		$xt->assign("month3_tabfieldblock",true);
////////////////////////////////////////////
//month4 - 
	
	$value = $pageObject->showDBValue("month4", $data, $keylink);
	if($mainTableOwnerID=="month4")
		$ownerIdValue=$value;
	$xt->assign("month4_value",$value);
	if(!$pageObject->isAppearOnTabs("month4"))
		$xt->assign("month4_fieldblock",true);
	else
		$xt->assign("month4_tabfieldblock",true);
////////////////////////////////////////////
//month5 - 
	
	$value = $pageObject->showDBValue("month5", $data, $keylink);
	if($mainTableOwnerID=="month5")
		$ownerIdValue=$value;
	$xt->assign("month5_value",$value);
	if(!$pageObject->isAppearOnTabs("month5"))
		$xt->assign("month5_fieldblock",true);
	else
		$xt->assign("month5_tabfieldblock",true);
////////////////////////////////////////////
//episkepseis - 
	
	$value = $pageObject->showDBValue("episkepseis", $data, $keylink);
	if($mainTableOwnerID=="episkepseis")
		$ownerIdValue=$value;
	$xt->assign("episkepseis_value",$value);
	if(!$pageObject->isAppearOnTabs("episkepseis"))
		$xt->assign("episkepseis_fieldblock",true);
	else
		$xt->assign("episkepseis_tabfieldblock",true);
////////////////////////////////////////////
//submission_date - 
	
	$value = $pageObject->showDBValue("submission_date", $data, $keylink);
	if($mainTableOwnerID=="submission_date")
		$ownerIdValue=$value;
	$xt->assign("submission_date_value",$value);
	if(!$pageObject->isAppearOnTabs("submission_date"))
		$xt->assign("submission_date_fieldblock",true);
	else
		$xt->assign("submission_date_tabfieldblock",true);
////////////////////////////////////////////
//last_modified_date - 
	
	$value = $pageObject->showDBValue("last_modified_date", $data, $keylink);
	if($mainTableOwnerID=="last_modified_date")
		$ownerIdValue=$value;
	$xt->assign("last_modified_date_value",$value);
	if(!$pageObject->isAppearOnTabs("last_modified_date"))
		$xt->assign("last_modified_date_fieldblock",true);
	else
		$xt->assign("last_modified_date_tabfieldblock",true);
////////////////////////////////////////////
//ip_address - 
	
	$value = $pageObject->showDBValue("ip_address", $data, $keylink);
	if($mainTableOwnerID=="ip_address")
		$ownerIdValue=$value;
	$xt->assign("ip_address_value",$value);
	if(!$pageObject->isAppearOnTabs("ip_address"))
		$xt->assign("ip_address_fieldblock",true);
	else
		$xt->assign("ip_address_tabfieldblock",true);
////////////////////////////////////////////
//is_finalized - 
	
	$value = $pageObject->showDBValue("is_finalized", $data, $keylink);
	if($mainTableOwnerID=="is_finalized")
		$ownerIdValue=$value;
	$xt->assign("is_finalized_value",$value);
	if(!$pageObject->isAppearOnTabs("is_finalized"))
		$xt->assign("is_finalized_fieldblock",true);
	else
		$xt->assign("is_finalized_tabfieldblock",true);
////////////////////////////////////////////
//sch_id - 
	
	$value = $pageObject->showDBValue("sch_id", $data, $keylink);
	if($mainTableOwnerID=="sch_id")
		$ownerIdValue=$value;
	$xt->assign("sch_id_value",$value);
	if(!$pageObject->isAppearOnTabs("sch_id"))
		$xt->assign("sch_id_fieldblock",true);
	else
		$xt->assign("sch_id_tabfieldblock",true);
////////////////////////////////////////////
//submited - 
	
	$value = $pageObject->showDBValue("submited", $data, $keylink);
	if($mainTableOwnerID=="submited")
		$ownerIdValue=$value;
	$xt->assign("submited_value",$value);
	if(!$pageObject->isAppearOnTabs("submited"))
		$xt->assign("submited_fieldblock",true);
	else
		$xt->assign("submited_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "FINAL_STOPED";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "FINAL_STOPED";
			continue;
		}
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "FINAL_STOPED";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!$pdf)
{
	if(!GetGlobalData("openPDFFileDirectly", true))
		$pageObject->AddJSFile("include/pdf.js");
	else 
		$pageObject->AddJSFile("include/pdfinitlink.js");
	if(!$all)
		$xt->assign("pdflink_block",true);

}

if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='FINAL_STOPED_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	if($pdf)
	{
		$xt->load_template($pageObject->templatefile);
		$page = $xt->fetch_loaded();
		$pagewidth = postvalue("width")*1.05;
		$landscape=false;
		include("plugins/page2pdf.php");
	}
	break;
}
if($all)
{
	$head="<span name=page>";
	if($eventObj->exists("BeforeShowView"))
		$eventObj->BeforeShowView($xt,$pageObject->templatefile,$data, $pageObject);
	if($oldtemplatefile!=$pageObject->templatefile)
		$xt->load_template($pageObject->templatefile);

	$xt->assign("id",$id);
	$page="";
	if($id==1)
	{
		$head = $head;
		$head = "<html><head>".$xt->fetch_loaded("stylefiles_block")."</head><body>".$head;
	}
	$page .= $xt->fetch_loaded("style_block");
	$page .= $xt->fetch_loaded("body");
	$data=db_fetch_array($rs);
	if($eventObj->exists("ProcessValuesView"))
		$eventObj->ProcessValuesView($data, $pageObject);
	$foot="</span>";
	if($data)
	{
		if(!$pdf)
			$foot.="<div style=\"page-break-after: always\">&nbsp;</div>";
		else
			$foot.="<div style=\"page-break-after: always\">&nbsp;</div>";
	}
	else
		$foot.="</body></html>";
	$page=$head.$page.$foot;
	$id++;

	if(!$pdf)
	{
		echo $page;
	}
	else
	{
		$out.=$page;
	}
}
}

if($all)
{
	if(!$pdf)
		echo "<script>Runner.Pdf.RunPDF();</script>";
	else
	{
		$page=$out;
		$pagewidth = postvalue("width")*1.05;
		$landscape=false;
		include("plugins/page2pdf.php");
	}
}

?>
